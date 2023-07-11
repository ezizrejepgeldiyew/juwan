<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Juwan</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendors/images/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendors/images/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendors/images/favicon-16x16.png') }}" />

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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/otp.css') }}" />
</head>

<body>
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <img src="{{ asset('images/Juwan logo.svg') }}" alt="" />
            </div>
            <div class="d-flex align-items-center">
                {{-- Change Language --}}
                <div class="dropdown" style="margin-top: 15px; margin-right: 2rem">
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
                                    {{ $language['display'] }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="vendors/images/forgot-password.png" alt="" />
                </div>
                <div class="col-md-6">
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="fa fa-times">

                                </i>
                            </button>
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">{{ __('Confirmation code') }}</h2>
                        </div>
                        <h6 class="d-flex justify-content-center mb-20">
                            <div>
                                <span id="timer"></span>
                            </div>
                        </h6>

                        <form action="{{ route('verify') }}" method="POST"> @csrf
                            <div class="otp_input text-start mb-2">
                                <div class="d-flex align-items-center justify-content-center mt-2 ml-4 mr-4"
                                    style="gap: 30px">
                                    <input type="text" class="form-control" name="number[]" maxlength="1">
                                    <input type="text" class="form-control" name="number[]" maxlength="1">
                                    <input type="text" class="form-control" name="number[]" maxlength="1">
                                    <input type="text" class="form-control" name="number[]" maxlength="1">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class=" col-6">
                                    <div class="input-group mb-0">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <div class="text-muted mb-2 pt-2">
                                {{ __('Dont get the code') }}?
                                <a href="{{ route('resend_otp') }}"
                                    class="text-primary fw-bold text-decoration-none">{{ __('Resend') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/ajaxCDN.js') }}"></script>
    <script src="{{ asset('js/OTPTime.js') }}"></script>
    <!-- js -->
    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
</body>

</html>
