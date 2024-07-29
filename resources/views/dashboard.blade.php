<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
      .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
        #toast {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 16px;
            position: fixed;
            z-index: 1111;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
            opacity: 0;
            transition: opacity 0.5s, bottom 0.5s;
        }

        #toast.show {
            visibility: visible;
            opacity: 1;
            bottom: 50px;
        }
        .social-icons a{
            color: rgb(253 160 133);
        }
        .logout_btn {
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
            color: white;
        }
    </style>
</head>

<body>
<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-10 mb-4 mb-lg-0">
        <p class="text-center">User Dashboard</p>
          <h1 class="text-center mb-5">Welcome, {{auth()->user()->fullname}}</h1>
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0" style="min-height: 500px;">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>{{auth()->user()->fullname}}</h5>
              <p>{{auth()->user()->profession}}</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Username</h6>
                    <p class="text-muted">{{auth()->user()->username}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Full Name</h6>
                    <p class="text-muted">{{auth()->user()->fullname}}</p>
                  </div>
                </div>
                <h6>Personal Info</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>DOB</h6>
                    <p class="text-muted">{{auth()->user()->dob}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Profession</h6>
                    <p class="text-muted">{{auth()->user()->profession}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Address</h6>
                    <p class="text-muted">{{auth()->user()->address}}</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start social-icons">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{route('logout')}}" class="btn logout_btn">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer >
  <p class="m-3 text-center">&copy; {{date('Y')}} Company Name. All rights reserved.</p>
</footer>
    <div id="toast" class="toast">This is a toaster notification!</div>
</body>

</html>