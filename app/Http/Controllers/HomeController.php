<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        echo 'dashboard';
    }
    public function login(){
        return view('login');
    }
    public function login_post(Request $request){
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Login Successfully']);
        }else{
            return response()->json(['message' => 'Incorrect Credentials']);
        }

    }
    public function signup(){
        return view('signup');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function signup_post(Request $request){

    
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'username' => 'required|unique:users,username',
            'dob' => 'required',
           'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/'],
        ],
        ['password' => ' Password field must contain 1 number, 1 special char, should be minimum 8 char']
    );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

       $save =  User::create([
            'fullname' => $request->fullname,
            'username' =>  $request->username,
            'password' => bcrypt( $request->password),
            'dob' =>  $request->dob,
            'profession' =>  $request->profession,
            'address' =>  $request->address,
        ]);
        
        if( $save){
            return response()->json(['message' => 'User created successfully']);
        }else{
            
            return response()->json(['message' => 'Some error occured']);
        }
        
    }
}
