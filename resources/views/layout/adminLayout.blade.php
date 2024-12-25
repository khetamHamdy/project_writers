<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <title>
        @yield('title')
    </title>
    <meta name="description" content="Base form control examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('/admin_assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin_assets/plugins/custom/uppy/uppy.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin_assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/admin_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('/admin_assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />

    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('/admin_assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/admin_assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/admin_assets/css/themes/layout/brand/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin_assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin_assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    @yield('css')
    <!--end::Layout Themes-->
    <!--<link rel="shortcut icon" href="{{ url('/admin_assets/media/logos/favicon.ico') }}" />-->

    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('/admin_assets/plugins/global/fonts/keenthemes-icons/ki.rtl.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('/admin_assets/css/rtl.css') }}" rel="stylesheet" type="text/css" />
    @endif


    <link rel="shortcut icon" href="{{ url('favicon.svg') }}">
    <style>
        #modalWritersEdit .modal-dialog {
            max-width: 60%;
        }

        textarea.form-control {
            height: auto;
            min-height: 120px;
        }

        #modalWritersCreate .modal-dialog {
            max-width: 60%;
        }

        textarea.form-control {
            height: auto;
            min-height: 120px;
        }
    </style>
    <style type="text/css">
        .box-filter-collapse {
            display: none;
        }

        .select2-selection {
            height: auto !important;
        }


        .form-control {
            width: 100%;
            height: 34px;
            padding: 2px 12px;
        }

        .dark_link {
            color: black;
        }
    </style>

    <livewire:styles />
    <livewire:scripts />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="{{ url(getLocal() . '/admin/home') }}">
            <img alt="Logo" src="{{ $setting->logo }}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->


    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="{{ url(getLocal() . '/admin/home') }}" class="brand-logo">
                        <img alt="Logo" src="{{ $setting->logo }}" />
                        <!--<img alt="Logo" src="" />-->
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl" style="color:#ffffff">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#ffffff" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#ffffff" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                        data-menu-dropdown-timeout="500">


                        <ul class="menu-nav">


                            <li class="menu-item {{ explode('/', request()->url())[5] == 'home' ? 'menu-item-here' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ url(getLocal() . '/admin/home') }}" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Home.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">{{ __('cp.home') }}</span>
                                </a>
                            </li>

                            @if (can('admins'))
                                <li class="menu-item {{ explode('/', request()->url())[5] == 'admins' ? 'menu-item-here' : '' }}"
                                    aria-haspopup="true">
                                    <a href="{{ url(getLocal() . '/admin/admins') }}" class="menu-link">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Delete-user.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z M21,8 L17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L21,6 C21.5522847,6 22,6.44771525 22,7 C22,7.55228475 21.5522847,8 21,8 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg><!--end::Svg Icon--></span>

                                        <span class="menu-text">{{ __('cp.admins') }}</span>
                                    </a>
                                </li>
                            @endif



                            @if (can('writers'))
                                <li class="menu-item {{ explode('/', request()->url())[5] == 'writers' ? 'menu-item-here' : '' }}"
                                    aria-haspopup="true">
                                    <a href="{{ url(getLocal() . '/admin/writers') }}" class="menu-link">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Delete-user.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z M21,8 L17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L21,6 C21.5522847,6 22,6.44771525 22,7 C22,7.55228475 21.5522847,8 21,8 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg><!--end::Svg Icon--></span>

                                        <span class="menu-text">{{ __('cp.writers') }}</span>
                                    </a>
                                </li>
                            @endif


                            @if (can('settings'))
                                <li class="menu-item menu-item-submenu {{ explode('/', request()->url())[5] == 'settings' || explode('/', request()->url())[5] == 'system_seo' ? 'menu-item-here' : '' }}"
                                    aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">{{ __('cp.setting') }}</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">

                                        <ul class="menu-subnav">

                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ url(getLocal() . '/admin/settings') }}"
                                                    class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">{{ __('cp.general_setting') }}</span>
                                                </a>
                                            </li>

                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ url(getLocal() . '/admin/system_seo') }}"
                                                    class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">{{ __('cp.seo_setting') }} </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif

                        </ul>
                        <!--end::Menu Nav-->
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->


            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu"
                                class="header-menu header-menu-mobile header-menu-layout-default">
                                <!--begin::Header Nav-->
                                <ul
                                    class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url(app()->getLocale() . '/admin/home') }}"
                                            class="text-dark font-weight-bold">{{ __('cp.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">@yield('title')</a>
                                    </li>
                                </ul>


                                <!--end::Header Nav-->
                            </div>
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->
                        <div class="topbar">

                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                        @if (app()->getLocale() == 'en')
                                            <?php
                                            $lang = LaravelLocalization::getSupportedLocales()['ar'];
                                            ?>
                                            <img class="h-20px w-20px rounded-sm"
                                                src="{{ url('admin_assets/media/svg/flags/012-uk.svg') }}"
                                                alt="">
                                        @else
                                            <?php
                                            $lang = LaravelLocalization::getSupportedLocales()['en'];
                                            ?>
                                            <img class="h-20px w-20px rounded-sm"
                                                src="{{ url('admin_assets/media/svg/flags/107-kwait.svg') }}"
                                                alt="">
                                        @endif
                                    </div>
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Dropdown-->
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Nav-->
                                    <ul class="navi navi-hover py-4">
                                        <!--begin::Item-->
                                        @if (app()->getLocale() == 'ar')
                                            <li class="navi-item active">
                                                <?php
                                                $lang = LaravelLocalization::getSupportedLocales()['en'];
                                                ?>
                                                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                                    class="navi-link">
                                                    <span class="symbol symbol-20 mr-3"><img
                                                            src="{{ url('admin_assets/media/svg/flags/012-uk.svg') }}"
                                                            alt=""></span>
                                                    <span class="navi-text">{{ $lang['native'] }}</span>
                                                </a>


                                            </li>
                                            <!--end::Item-->
                                        @else
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <?php
                                                $lang = LaravelLocalization::getSupportedLocales()['ar'];
                                                ?>
                                                <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"
                                                    class="navi-link">
                                                    <span class="symbol symbol-20 mr-3"><img
                                                            src="{{ url('admin_assets/media/svg/flags/107-kwait.svg') }}"
                                                            alt=""></span>
                                                    <span class="navi-text">{{ $lang['native'] }}</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                        @endif
                                        <!--begin::Item-->


                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Languages-->
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    {{-- <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"></span> --}}
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ auth()->guard('admin')->user()->name }}</span>
                                    <span class="symbol symbol-35 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            {{ mb_substr(auth()->guard('admin')->user()->name, 0, 1, 'utf-8') }}</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                @if (count($errors) > 0)
                    <div class="container pt30">
                        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                            <div class="alert-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24">
                                            </rect>
                                            <path
                                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                                fill="#000000" opacity="0.3"></path>
                                            <path
                                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>


                            <div class="alert-text" style="color:red">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }} </p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                @endif


                @if (session('status'))
                    <div class="container pt30">
                        <div class="alert alert-custom alert-white alert-shadow gutter-b" style="border-color:green"
                            role="alert">
                            <div class="alert-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24">
                                            </rect>
                                            <path
                                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                                fill="#000000" opacity="0.3"></path>
                                            <path
                                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>


                            <div class="alert-text" style="color:green">

                                <p>{{ session('status') }} </p>

                            </div>

                        </div>
                    </div>
                @endif


                @yield('content')
                <!--end::Content-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">{{ date('Y') }}
                                {{ __('cp.line') }}</span>
                            <a href="https://hexa.com/" target="_blank"
                                class="text-dark-75 text-hover-primary">hexa</a>
                        </div>
                    </div>
                </div>
                <!--end::Footer-->
            </div>


            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->






    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <!--<h3 class="font-weight-bold m-0">User Profile-->
            <!--<small class="text-muted font-size-sm ml-2">12 messages</small></h3>-->
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                {{--					<div class="symbol symbol-100 mr-5"> --}}
                {{--						<div class="symbol-label" style="background-image:url('{{auth()->guard('admin')->user()->image}}')"></div> --}}
                {{--						<i class="symbol-badge bg-success"></i> --}}
                {{--					</div> --}}
                <div class="d-flex flex-column">
                    <a href="#"
                        class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ auth()->guard('admin')->user()->name }}</a>
                    <!--<div class="text-muted mt-1">Admin</div>-->
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5"
                                                    r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span
                                    class="navi-text text-muted text-hover-primary">{{ auth()->guard('admin')->user()->email }}</span>
                            </span>
                        </a>
                        <a href="{{ url(getLocal() . '/admin/logout') }}"
                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">{{ __('cp.logout') }}</a>

                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="{{ url(getLocal() . '/admin/editMyProfile') }}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5"
                                                r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">{{ __('cp.edit_my_profile') }}</div>
                            <!--<div class="text-muted">Account settings and more-->
                            <!--<span class="label label-light-danger label-inline font-weight-bold">update</span></div>-->
                        </div>
                    </div>

                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="{{ url(getLocal() . '/admin/changeMyPassword') }}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <i class="la la-key"></i>
                                {{--									<span class="svg-icon svg-icon-md svg-icon-warning"> --}}
                                {{--										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg--> --}}
                                {{--										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> --}}
                                {{--											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> --}}
                                {{--												<rect x="0" y="0" width="24" height="24" /> --}}
                                {{--												<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" /> --}}
                                {{--												<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" /> --}}
                                {{--												<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" /> --}}
                                {{--												<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" /> --}}
                                {{--											</g> --}}
                                {{--										</svg> --}}
                                {{--										<!--end::Svg Icon--> --}}
                                {{--									</span> --}}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">{{ __('cp.Change_Password') }}</div>
                            <!--<div class="text-muted">Inbox and tasks</div>-->
                        </div>
                    </div>
                </a>



            </div>
            <!--end::Nav-->

        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->

    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog"
        data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-drop"></i>
                                                </span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-list-3"></i>
                                                </span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-primary label-inline font-weight-bold">new</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-bell-2"></i>
                                                </span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-gear"></i>
                                                </span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-separator my-3"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-magnifier-tool"></i>
                                                </span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-bell-2"></i>
                                                </span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="400" data-mobile-height="350">
                            <!--begin::Messages-->
                            <div class="messages">
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_12.jpg') }}" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        How likely are you to recommend our company to your friends and family?
                                    </div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_21.jpg') }}" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Hey there, we’re just writing to let you know that you’ve been subscribed to a
                                        repository on GitHub.
                                    </div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_21.jpg') }}" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_21.jpg') }}" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_12.jpg') }}" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        You can unwatch this repository immediately by clicking here:
                                        <a href="#">https://github.com</a>
                                    </div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_21.jpg') }}" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Discover what students who viewed Learn Figma - UI/UX Design. Essential Training
                                        also viewed
                                    </div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_12.jpg') }}" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic"
                                                src="{{ url('/admin_assets/media/users/300_21.jpg') }}" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                        provided
                                    </div>
                                </div>
                                <!--end::Message Out-->
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer align-items-center">
                        <!--begin::Compose-->
                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                    <i class="flaticon2-photograph icon-lg"></i>
                                </a>
                                <a href="#" class="btn btn-clean btn-icon btn-md">
                                    <i class="flaticon2-photo-camera icon-lg"></i>
                                </a>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                                    Send
                                </button>
                            </div>
                        </div>
                        <!--begin::Compose-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>


    <div id="deleteAll" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">{{ __('cp.delete') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ __('cp.confirmDeleteAll') }} </p>
                </div>
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal"
                        aria-hidden="true">{{ __('cp.cancel') }}</button>
                    <a href="#" class="confirmAll" data-action="delete">
                        <button class="btn btn-danger">{{ __('cp.delete') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">{{ __('cp.activation') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ __('cp.confirmActiveAll') }} </p>
                </div>
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal"
                        aria-hidden="true">{{ __('cp.cancel') }}</button>
                    <a href="#" class="confirmAll" data-action="active">
                        <button class="btn btn-success">{{ __('cp.Yes') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="cancel_activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">{{ __('cp.cancel_activation') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ __('cp.confirmNotActiveAll') }} </p>
                </div>
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal"
                        aria-hidden="true">{{ __('cp.cancel') }}</button>
                    <a href="#" class="confirmAll" data-action="not_active">
                        <button class="btn btn-success">{{ __('cp.Yes') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @yield('model')
    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->


    <script src="{{ asset('/admin_assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/admin_assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/ion-range-slider.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/editors/summernote.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
    <script src="{{ asset('/admin_assets/js/pages/crud/file-upload/image-input.js') }}"></script>
    <script src="{{ asset('/admin_assets/plugins/custom/uppy/uppy.bundle.js') }}"></script>
    <script src="{{ asset('/admin_assets/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('/admin_assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('/admin_assets/js/pages/crud/forms/validation/form-controls.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <!--<script src="{{ asset('/admin_assets/js/pages/crud/file-upload/uppy.js') }}"></script>-->

    <!--<script src="{{ asset('/admin_assets/js/pages/crud/datatables/basic/basic.js') }}"></script>-->


    @yield('js')
    @yield('script')
    <script>
        var FormValidation = function() {

            // basic validation
            var handleValidation1 = function() {
                // for more info visit the official plugin documentation:
                // http://docs.jquery.com/Plugins/Validation

                var form1 = $('#form');
                var error1 = $('.alert-danger', form1);
                var success1 = $('.alert-success', form1);

                form1.validate({
                    errorElement: 'span', //default input error message container
                    errorClass: 'help-block help-block-error text-danger', // default input error message class
                    focusInvalid: false, // do not focus the last invalid input
                    ignore: ".ignore", // validate all fields including form hidden input
                    messages: {
                        select_multi: {
                            maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                            minlength: jQuery.validator.format("At least {0} items must be selected"),
                        },
                    },
                    rules: {


                    },

                    invalidHandler: function(event, validator) { //display error alert on form submit
                        success1.hide();
                        error1.show();
                        scrollTo(error1, -200);
                        // App.scrollTo(error1, -200);
                    },


                    highlight: function(element) { // hightlight error inputs

                        $(element)
                            .closest('.form-group').addClass(
                                'has-error'); // set error class to the control group
                    },

                    unhighlight: function(element) { // revert the change done by hightlight
                        $(element)
                            .closest('.form-group').removeClass(
                                'has-error'); // set error class to the control group
                    },

                    success: function(label) {
                        label
                            .closest('.form-group').removeClass(
                                'has-error'); // set success class to the control group
                    },

                    submitHandler: function(form) {
                        success1.show();
                        error1.hide
                        e.submit()
                    }
                });


            };


            return {
                //main function to initiate the module
                init: function() {

                    handleValidation1();

                }

            };

        }();

        jQuery(document).ready(function() {
            FormValidation.init();
        });


        $r = '{{ app()->getLocale() }}';
        if ($r == 'ar') {


            //overright messsages
            $.extend($.validator, {

                defaults: {
                    messages: {},
                    groups: {},
                    rules: {},
                    errorClass: "error",
                    validClass: "valid",
                    errorElement: "label",
                    focusCleanup: false,
                    focusInvalid: true,
                    errorContainer: $([]),
                    errorLabelContainer: $([]),
                    onsubmit: true,
                    ignore: ":hidden",
                    ignoreTitle: false,
                    onfocusin: function(element) {
                        this.lastActive = element;

                        // Hide error label and remove error class on focus if enabled
                        if (this.settings.focusCleanup) {
                            if (this.settings.unhighlight) {
                                this.settings.unhighlight.call(this, element, this.settings.errorClass, this
                                    .settings.validClass);
                            }
                            this.hideThese(this.errorsFor(element));
                        }
                    },
                    onfocusout: function(element) {
                        if (!this.checkable(element) && (element.name in this.submitted || !this.optional(
                                element))) {
                            this.element(element);
                        }
                    },
                    onkeyup: function(element, event) {
                        // Avoid revalidate the field when pressing one of the following keys
                        // Shift       => 16
                        // Ctrl        => 17
                        // Alt         => 18
                        // Caps lock   => 20
                        // End         => 35
                        // Home        => 36
                        // Left arrow  => 37
                        // Up arrow    => 38
                        // Right arrow => 39
                        // Down arrow  => 40
                        // Insert      => 45
                        // Num lock    => 144
                        // AltGr key   => 225
                        var excludedKeys = [
                            16, 17, 18, 20, 35, 36, 37,
                            38, 39, 40, 45, 144, 225
                        ];

                        if (event.which === 9 && this.elementValue(element) === "" || $.inArray(event.keyCode,
                                excludedKeys) !== -1) {

                        } else if (element.name in this.submitted || element === this.lastElement) {
                            this.element(element);
                        }
                    },
                    onclick: function(element) {
                        // click on selects, radiobuttons and checkboxes
                        if (element.name in this.submitted) {
                            this.element(element);

                            // or option elements, check parent select in that case
                        } else if (element.parentNode.name in this.submitted) {
                            this.element(element.parentNode);
                        }
                    },
                    highlight: function(element, errorClass, validClass) {
                        if (element.type === "radio") {
                            this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                        } else {
                            $(element).addClass(errorClass).removeClass(validClass);
                        }
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        if (element.type === "radio") {
                            this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                        } else {
                            $(element).removeClass(errorClass).addClass(validClass);
                        }
                    }
                },

                // http://jqueryvalidation.org/jQuery.validator.setDefaults/
                setDefaults: function(settings) {
                    $.extend($.validator.defaults, settings);
                },


                messages: {

                    required: "هذا الحقل مطلوب",
                    remote: "Please fix this field.",
                    email: "الرجاء ادخال عنوان بريد الكتروني صحيح .",
                    date: "الرجاء ادخال تاريخ صحيح.",
                    dateISO: "Please enter a valid date ( ISO ).",
                    number: "Please enter a valid number.",
                    digits: "Please enter only digits.",
                    creditcard: "Please enter a valid credit card number.",
                    equalTo: "الرجاء ادخال نفس قيمة الباسوورد.",
                    maxlength: $.validator.format("Please enter no more than {0} characters."),
                    minlength: $.validator.format("Please enter at least {0} characters."),
                    rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
                    range: $.validator.format("Please enter a value between {0} and {1}."),
                    max: $.validator.format("الرجاء ادخال قيمة اقل او تساوي {0}."),
                    min: $.validator.format("الرجاء ادخال قيمة اكبر او تساوي {0}."),
                    category_id: "حقل التصنيف مطلوب"
                },

            });
        }
    </script>
    <script>
        $(document).on('click', '#submitButton', function() {
            // $('#submitButton').addClass('spinner spinner-white spinner-left');
            $('#submitForm').click();
        });

        $('#edit_image').on('change', function(e) {

            readURL(this, $('#editImage'));

        });
    </script>

    <script>
        $('#kt_datatable').DataTable({
            dom: 'Bfrtip',
            searching: false,
            "oLanguage": {
                "sSearch": "{{ __('cp.search') }}"
            },
            bInfo: false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
            paging: false, //Dont want paging
            bPaginate: false, //Dont want paging
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],
            exportOptions: {
                modifier: {
                    page: 'all'
                },
                columns: [0, 2, 3, 4]
            }
        });


        $('.btn--filter').click(function() {
            $('.box-filter-collapse').slideToggle(500);
        });
        var IDArray = [];
        $("input:checkbox[name=chkBox]:checked").each(function() {
            IDArray.push($(this).val());
        });
        if (IDArray.length == 0) {
            $('.event').attr('disabled', 'disabled');
        }
        $('.chkBox').on('change', function() {
            var IDArray = [];
            $("input:checkbox[name=chkBox]:checked").each(function() {
                IDArray.push($(this).val());
            });
            if (IDArray.length == 0) {
                $('.event').attr('disabled', 'disabled');
            } else {
                $('.event').removeAttr('disabled');
            }
        });
        $('.confirmAll').on('click', function(e) {
            e.preventDefault();
            var action = $(this).data('action');

            var url = "{{ url(getLocal() . '/admin/changeStatus/' . Request::segment(3)) }}";
            var csrf_token = '{{ csrf_token() }}';
            var IDsArray = [];
            $("input:checkbox[name=chkBox]:checked").each(function() {
                IDsArray.push($(this).val());
            });

            if (IDsArray.length > 0) {
                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf_token
                    },
                    url: url,
                    data: {
                        action: action,
                        IDsArray: IDsArray,
                        _token: csrf_token
                    },
                    success: function(response) {
                        if (response === 'active') {
                            //alert('fsvf');
                            $.each(IDsArray, function(index, value) {
                                $('#label-' + value).removeClass('badge-danger');
                                $('#label-' + value).addClass('badge-info');
                                $r = '{{ app()->getLocale() }}';
                                if ($r == 'ar') {
                                    $('#label-' + value).text('فعال ');
                                } else {
                                    $('#label-' + value).text('Active');

                                }
                            });
                            $('#activation').modal('hide');
                        } else if (response === 'not_active') {
                            //alert('fg');
                            $.each(IDsArray, function(index, value) {
                                $('#label-' + value).removeClass('badge-info');
                                $('#label-' + value).addClass('badge-danger');
                                $r = '{{ app()->getLocale() }}';
                                if ($r == 'ar') {
                                    $('#label-' + value).text('غير فعال');
                                } else {
                                    $('#label-' + value).text('Not Active');

                                }
                            });
                            $('#cancel_activation').modal('hide');
                        } else if (response === 'delete') {
                            $.each(IDsArray, function(index, value) {
                                $('#tr-' + value).hide(2000);
                            });
                            $('#deleteAll').modal('hide');
                        }

                        IDArray = [];
                        $("input:checkbox[name=chkBox]:checked").each(function() {
                            $(this).prop('checked', false);
                        });
                        $("input:checkbox[name=checkAll]:checked").prop('checked', false);
                        $('.event').attr('disabled', 'disabled');

                    },
                    fail: function(e) {
                        alert(e);
                    }
                });
            } else {
                alert('{{ __('cp.not_selected') }}');
            }
        });
    </script>
    <script>
        function readURL(input, target) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    target.attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLMultiple(input, target) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (var i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        target.append(
                            '<div class="imageBox text-center" style="width:150px;height:190px;margin:5px"><img src="' +
                            event.target.result +
                            '" style="width:150px;height:150px"><button class="btn btn-danger deleteImage" type="button">{{ __('cp.remove') }}</button><input class="attachedValues" type="hidden" name="filename[]" value="' +
                            event.target.result + '"></div>');
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }

        $(document).on("click", ".deleteImage", function() {
            $(this).parent().remove();
        });

        $(function() {

            $('#kt_quick_user_toggle').click(function(e) {
                if ($('.offcanvas-right').hasClass('offcanvas-on')) {
                    $('.offcanvas-right').removeClass('offcanvas-on');
                } else {
                    $('.offcanvas-right').addClass('offcanvas-on');
                }
                // 			event.stopPropagation();
            });
        });

        $(function() {

            $('#kt_quick_user_close').click(function(e) {
                $('.offcanvas-right').removeClass('offcanvas-on');
            });
        });

        $('.select2').select2({
            width: '100%'
        });


        $(document).on('change', '.country', function(e) {
            var country_id = $(this).val();
            var url = "{{ url(app()->getLocale() . '/getCities/') }}";
            if (country_id) {
                $.ajax({
                    type: "GET",
                    url: url + '/' + country_id,
                    success: function(response) {
                        if (response) {
                            $(".city").empty();
                            $(".city").append(
                                '<option value="">{{ __('website.choose_city') }}</option>');
                            $.each(response, function(index, value) {
                                $(".city").append('<option value="' + value.id + '">' + value
                                    .name + '</option>');
                                $(".city").append('</optgroup>');
                            });
                        }
                    }
                });
            } else {
                $(".city").empty();
            }
        });

        $("[name=checkAll]").click(function() {
            $('.event').removeAttr('disabled');
            $('.checkboxes').not(this).prop('checked', this.checked);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>

    <script>
        window.addEventListener('swal:success', event => {
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.icon,
                confirmButtonText: 'حسنًا'
            });
        });

        window.addEventListener('swal:error', event => {
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.icon,
                confirmButtonText: 'حسنًا'
            });
        });


        window.addEventListener('openModal', event => {
            const modalId = event.detail.modalId;
            $(`#${modalId}`).modal('show');
        });

        window.addEventListener('closeModal', event => {
            const modalId = event.detail.modalId;
            $(`#${modalId}`).modal('hide');
        });

        $('#modalWritersCreate').on('hidden.bs.modal', function() {
            Livewire.emit('resetValidation'); // يستدعي إعادة تعيين الأخطاء
            Livewire.emit('resetForm'); // يستدعي إعادة تعيين الحقول
        });


        document.addEventListener('livewire:load', function() {
            Livewire.on('closeModal', modalId => {
                $('#' + modalId).modal('hide'); // إغلاق المودال باستخدام jQuery
            });
        });
    </script>

</body>
<!--end::Body-->

</html>
