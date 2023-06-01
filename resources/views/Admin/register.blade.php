<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jquery-steps/jquery.steps.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}" />


</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <img src="{{ asset('images/Juwan logo.svg') }}" alt="" />
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('vendors/images/register-page-img.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="register-title">
                            <h2 class="text-center text-primary">Register To Juwan</h2>
                        </div>
                        <br>
                        <form action="{{ route('register') }}" method="POST"> @csrf
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">Email Address*</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">Username*</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">Surname*</label>
                                <div class="col-sm-12">
                                    <input type="text" name="surname" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">Password*</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">Confirm Password*</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password_confirmation" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('src/plugins/jquery-steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('vendors/scripts/steps-setting.js') }}"></script>

</body>

</html>
