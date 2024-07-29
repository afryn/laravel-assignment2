<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('signup', [HomeController::class, 'signup'])->name('signup');
Route::post('signup', [HomeController::class, 'signup_post'])->name('signup.post');
Route::post('login', [HomeController::class, 'login_post'])->name('login.post');
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');