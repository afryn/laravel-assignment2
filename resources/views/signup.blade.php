<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
    .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
    .gradient-form {
        height: 100vh !important;
    }
}

@media (min-width: 769px) {
    .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
    }
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
 </style>
</head>

<body>
    <div id="toast" class="toast">This is a toaster notification!</div>
    <section class="h-100 gradient-form" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-2 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-2 pb-1">Signup</h4>
                                    </div>

                                    <form method="post" id="signup_form" action="{{route('signup.post')}}">
                                        @csrf
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Full Name </label>
                                            <input type="text" name="fullname" id="form2Example11" class="form-control" placeholder="Full Name" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example12">Username</label>
                                            <input type="text" name="username" id="form2Example12" class="form-control" placeholder="Username" />
                                        </div>
                                        <div class="row">
                                            <div data-mdb-input-init class="form-outline mb-4 col-lg-6 col-md-12">
                                                <label class="form-label" for="form2Example13">DOB</label>
                                                <input type="date" name="dob" id="form2Example13" class="form-control" />
                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-4  col-lg-6 col-md-12">
                                                <label class="form-label" for="form2Example14">Profession </label>
                                                <input type="text" name="profession" id="form2Example14" class="form-control" placeholder="Profession " />
                                            </div>
                                        </div>


                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example21">Address</label>
                                            <input type="text" name="address" id="form2Example21" class="form-control" placeholder="Address" />
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" id="form2Example22" class="form-control" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Signup</button>
                                            <a class="text-muted " href="#">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a href="{{route('login')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Login</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        document.getElementById('signup_form').addEventListener('submit', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: $(this).attr('action'),
                cache: false,
                processData: false,
                contentType: false,
                data: new FormData($(this)[0]),
                success: function(data) {
                    console.log(data)
                    if (data.errors) {
                        Object.keys(data.errors).forEach(function(key, value) {
                            toasterNotification(data.errors[key][0]);
                        });
                    } else {
                        toasterNotification(data.message);
                        setTimeout(() => {

                            window.location.href = "{{route('login')}}"
                        }, 2000);
                    }
                }
            });
        })

        function toasterNotification(msg) {
            $("#toast").text(msg);
            $("#toast").addClass("show");
            setTimeout(function() {
                $("#toast").removeClass("show");
            }, 3000);
        }
    </script>
</body>

</html>