<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title> {{ @$setting->title }}</title>
    <!-- Stylesheets -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $setting->title }}" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ $setting->logo }}" />
    <meta property="fb:app_id" content="177380226248562" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ $setting->title }}" />
    <meta name="twitter:creator" content="hexa" />
    <meta name="twitter:title" content="{{ $setting->title }}" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="{{ $setting->logo }}" />

    <!-- Stylesheets -->

    <link rel="shortcut icon" href="{{ url('favicon.svg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10/dist/sweetalert2.min.css">

    <link href="{{ url('website/css/style.css') }}" rel="stylesheet">

    @if (app()->getLocale() == 'ar')
        <link href="{{ url('website/css/rtl.css') }}" rel="stylesheet">
    @else
    @endif

    <!-- Responsive -->
    <link href="{{ url('website/css/responsive.css') }}" rel="stylesheet">

    {{-- <script src="{{ asset('website/js/jquery-3.2.1.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    @yield('css')
    {!! @$setting->seo_in_header !!}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

</head>

<body>

    {!! @$setting->seo_in_body !!}
    <div class="main-wrapper">


        <header id="header">
            <div class="container">
                <div class="logo-site">
                    <a href="{{ url(getLocal() . '/home') }}">
                        <img src="{{ $setting->logo }}" alt="" />
                    </a>
                </div>
                <ul class="main_menu clearfix">
                    @php
                        $currentRouteName = Route::currentRouteName();
                    @endphp

                    <li class=" @if ($currentRouteName == 'home') active @endif"><a class="page-scroll"
                            href="{{ url(getLocal() . '/') }}">{{ __('website.home') }}</a></li>
                    <li class="@if ($currentRouteName == 'products') active @endif"><a class="page-scroll"
                            href="{{ url(getLocal() . '/products') }}">{{ __('website.products') }}</a></li>
                    <li class="@if ($currentRouteName == 'pages') active @endif"><a class="page-scroll"
                            href="{{ url(getLocal() . '/page/12') }}">{{ __('website.about_us') }}</a></li>
                </ul>
             
            </div>
        </header>
        <!--header-->

        @yield('content')

        <footer id="footer">
            <div class="container">
                <div class="d-flex flex-ft">
                    <div class="cont-ft">
                        <figure class="logo-ft wow fadeInUp">
                            <img src="{{ asset('website/images/logo-ft.svg') }}" alt="Logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="menu-ft menu-ls">
                        <ul class="li-ft wow fadeInUp">
                            <li><a href="{{ url(getLocal() . '/') }}">{{ __('website.home') }}</a></li>
                            <li><a href="{{ url(getLocal() . '/products') }}">{{ __('website.products') }}</li>
                            <li><a href="{{ url(getLocal() . '/page/12') }}">{{ __('website.about_us') }}</li>
                            <li><a href="{{ url(getLocal() . '/get-track-order') }}">{{ __('website.track_order') }}
                            </li>
                        </ul>
                    </div>
                    <div class="menu-ft menu-sm">
                        <ul class="social-media wow fadeInUp">
                            @if ($setting->twitter != null)
                                <li><a href="{{ $setting->twitter }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                            @endif
                            @if ($setting->facebook != null)
                                <li><a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                            @endif
                            @if ($setting->whatsapp != null)
                                <li><a href="tel:+{{ $setting->whatsapp }}"><i
                                            class="fa-brands fa-square-whatsapp"></i></a></li>
                            @endif
                            @if ($setting->linkedin != null)
                                <li><a href="{{ $setting->linkedin }}"><i class="fa-brands fa-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-->
    </div>
    <!--main-wrapper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10/dist/sweetalert2.all.min.js"></script>

    <script src="{{ url('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('website/js/all.min.js') }}"></script>
    <script src="{{ url('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('website/js/wow.js') }}"></script>
    <script src="{{ url('website/js/jquery.easing.min.js') }}"></script>

    <script src="{{ url('website/js/script.js') }}"></script>

    <script>
        new WOW().init();
    </script>

    @yield('js')
</body>

</html>
