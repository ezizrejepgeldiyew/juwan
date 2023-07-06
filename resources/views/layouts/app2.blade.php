<!DOCTYPE html>
<html lang="">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Juwan</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('images/Juwan-logos.svg') }} />
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('images/Juwan-logos.svg') }} />
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('images/Juwan-logos.png') }} />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}" />



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<<<<<<< HEAD
<body class="sidebar-light active">
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
=======
<body class="sidebar-light">

    <div class="header">
        <div class="header-left">
            {{-- <div class="menu-icon bi bi-list"></div> --}}
>>>>>>> 67235890e50a68e654dd1b0542e2f12b7fc23700
        </div>

        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>

                </div>
            </div>

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

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            {{ Str::substr(Auth::user()->name, 0, 1) }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="dw dw-user1"></i>
                            {{ __('Profile') }}</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item">
                            <i class="dw dw-logout"></i> {{ __('Logout') }}</a>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
<<<<<<< HEAD

            <a href="index.html">
                <img src="{{ asset('images/Juwan logo.svg') }}" alt="" class="dark-logo" />
=======
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/Juwan logo.svg') }}" alt="" class="dark-logo" />
                <img src="{{ asset('images/Frame 74.svg') }}" alt="" class="dark-logo-mob" />
>>>>>>> 67235890e50a68e654dd1b0542e2f12b7fc23700
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu ">
                <ul id="accordion-menu">
                    <li>
                        <a href="{{ route('index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('index')) active @endif">
                            <span class="micon fa fa-dashboard"></span><span
                                class="mtext">{{ __('Dashboard') }}</span>
                        </a>
                        <span class="dash">
                            <ul>
                                <li><a href="{{ route('index') }}" class="sub-toggle">{{ __('Dashboard') }}</a></li>
                            </ul>
                        </span>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-users"></span><span class="mtext"> {{ __('Users') }}</span>
                        </a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('users.index') }}" class="sub-toggle">{{ __('Users') }}</a>
                                </li>
                                <li><a href="{{ route('roles.index') }}" class="sub-toggle">{{ __('Roles') }}</a>
                                </li>
                                <li><a href="{{ route('permissions.index') }}"
                                        class="sub-toggle">{{ __('Permission') }}</a></li>
                                <li><a href="{{ route('otps.index') }}" class="sub-toggle">{{ __('Otps') }}</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="@if (Request::routeIs('users.index')) active @endif"
                                    href="{{ route('users.index') }}"> {{ __('Users') }}</a></li>
                            <li><a class="@if (Request::routeIs('roles.index')) active @endif"
                                    href="{{ route('roles.index') }}">{{ __('Roles') }}</a></li>
                            <li><a class="@if (Request::routeIs('permissions.index')) active @endif"
                                    href="{{ route('permissions.index') }}">{{ __('Permissions') }}</a></li>
                            <li><a class="@if (Request::routeIs('otps.index')) active @endif"
                                    href="{{ route('otps.index') }}">Otps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('categories.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('categories.index')) active @endif">
                            <span class="micon bi bi-menu-button-wide"></span><span
                                class="mtext">{{ __('Categories') }}</span></a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('categories.index') }}"
                                        class="sub-toggle">{{ __('Categories') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('authors.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('authors.index')) active @endif">
                            <span class="micon fa fa-user-o"></span><span class="mtext"> {{ __('Authors') }}</span>
                        </a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('authors.index') }}"
                                        class="sub-toggle">{{ __('Authors') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('genres.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('genres.index')) active @endif">
                            <span class="micon bi bi-pen"></span><span class="mtext"> {{ __('Genres') }}</span>
                        </a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('genres.index') }}" class="sub-toggle">{{ __('Genres') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('podkasts.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('podkasts.index')) active @endif">
                            <span class="micon fa fa-podcast"></span><span
                                class="mtext">{{ __('Podcasts') }}</span></a>
                    </li>

                    <li>
                        <a href="{{ route('books.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('books.index')) active @endif">
                            <span class="micon fa fa-book"></span><span class="mtext">{{ __('Books') }}</span></a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('books.index') }}" class="sub-toggle">{{ __('Books') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('favorites.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('favorites.index')) active @endif">
                            <span
                                class="micon fa @if (Request::routeIs('favorites.index')) fa-heart @else fa-heart-o @endif"></span><span
                                class="mtext">{{ __('Favorites') }}</span></a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('favorites.index') }}"
                                        class="sub-toggle">{{ __('Favorites') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('favorites.index') }}"
                            class="dropdown-toggle no-arrow @if (Request::routeIs('favorites.index')) active @endif">
                            <span
                                class="micon fa @if (Request::routeIs('favorites.index')) fa-heart @else fa-heart-o @endif"></span><span
                                class="mtext">{{ __('Favorites') }}</span></a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-pencil-square-o"></span><span class="mtext">
                                {{ __('Posts') }}</span>
                        </a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('posts.index') }}" class="sub-toggle">{{ __('Posts') }}</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="@if (Request::routeIs('posts.index')) active @endif"
                                    href="{{ route('posts.index') }}"> {{ __('Posts') }}</a></li>
                            <li><a class="@if (Request::routeIs('photos.index')) active @endif"
                                    href="{{ route('photos.index') }}">{{ __('Photos') }}</a></li>
                            <li><a class="@if (Request::routeIs('videos.index')) active @endif"
                                    href="{{ route('videos.index') }}">{{ __('Videos') }}</a></li>
                            <li><a class="@if (Request::routeIs('postbooks.index')) active @endif"
                                    href="{{ route('postbooks.index') }}">{{ __('Books') }}</a></li>
                        </ul>
                    </li>

                    {{-- LOGOUT --}}
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-logout"></span><span class="mtext"> {{ __('Logout') }}</span>
                        </a>
                        <div class="dash">
                            <ul>
                                <li><a href="{{ route('logout') }}" class="sub-toggle">{{ __('Logout') }}</a>
                                </li>
                            </ul>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div> 

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('skilet')

            <div class="title pb-20 pt-20">
            </div>

            <div class="footer-wrap pd-20 mb-20 card-box">
                Juwan
            </div>
        </div>
    </div>
    {{-- toastr --}}
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
    <!-- js -->

    <script src="{{ asset('js/previewImg.js') }}"></script>

    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/dashboard3.js') }}"></script>
    <!-- buttons for Export datatable -->
    <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
