<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Juwan</title>

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
            <div class="d-flex align-items-center">
                {{-- Change Language --}}
                <div class="dropdown" style="margin-top: 15px; margin-right: 15px">
                    <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown"
                        aria-expanded="false"><span
                            class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                        {{ Config::get('languages')[App::getLocale()]['display'] }}
                    </button>
                    <div class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                        class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                                    {{ $language['display'] }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="login-menu" style="margin-top: 15px">
                    <ul>
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    </ul>
                </div>
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
                                <label class="col-sm-8 col-form-label">{{ __('Email Address') }}*</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">{{ __('Username') }}*</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">{{ __('Surname') }}*</label>
                                <div class="col-sm-12">
                                    <input type="text" name="surname" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">{{ __('Password') }}*</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" id="password"
                                        class="form-control"/>
                                    <div class="input-group-append custom mr-3">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash" id="togglePassword"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-8 col-form-label">{{ __('Confirm Password') }}*</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password_confirmation" id="confPassword" class="form-control" />
                                    <div class="input-group-append custom mr-3">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash" id="toggleConfPassword"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg btn-block">{{ __('Register') }}</button>
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
        // Password show/hide
        const togglePassword = document.querySelector('#togglePassword')
        const password = document.querySelector('#password')

        togglePassword.addEventListener("click", function() {
            const type = password.getAttribute("type") === "password" ? "text" : "password"
            password.setAttribute("type", type)
            this.classList.toggle("bi-eye")
        })

        // Confir Password show/hide
        const toggleConfPassword = document.querySelector('#toggleConfPassword')
        const confPassword = document.querySelector('#confPassword')

        toggleConfPassword.addEventListener('click', function() {
            const type = confPassword.getAttribute('type') === 'password' ? 'text' : 'password'
            confPassword.setAttribute('type', type)
            this.classList.toggle('bi-eye')
        })
    </script>
    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('src/plugins/jquery-steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('vendors/scripts/steps-setting.js') }}"></script>

</body>

</html>
