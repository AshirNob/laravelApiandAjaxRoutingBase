<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home | SHARJAELEVEN</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="description" content="Page Titile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/vendors.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/app.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/theme-demo.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/formplugins/select2/select2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/statistics/chartjs/chartjs.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/fa-brands.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/fa-solid.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('font/font-awesome.min.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/miscellaneous/jqvmap/jqvmap.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/miscellaneous/fullcalendar/fullcalendar.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/statistics/chartist/chartist.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/statistics/c3/c3.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ URL::asset('css/formplugins/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/notifications/toastr/toastr.css')}}">
    <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
  
</head>
<body class="mod-bg-1 ">
    <script>
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],
            /**
             * Load from localstorage
             **/
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        /**
         * Load theme options
         **/
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);
        }
        /**
         * Save to localstorage
         **/
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        /**
         * Reset settings
         **/
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>
    <div class="page-wrapper">
        <div class="page-inner">
            <aside class="page-sidebar">
                <div class="page-logo">
                    <a href="#"
                        class="page-logo-link press-scale-down d-flex align-items-center position-relative"
                        data-toggle="modal" data-target="#modal-shortcut">
                        <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">Sharjah Eleven</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <nav id="js-primary-nav" class="primary-nav" role="navigation">
                    <div class="nav-filter">
                        <div class="position-relative">
                            <input type="text" id="nav_filter_input" placeholder="Filter menu"
                                class="form-control" tabindex="0">
                            <a href="#" onclick="return false;"
                                class="btn-primary btn-search-close js-waves-off" data-action="toggle"
                                data-class="list-filter-active" data-target=".page-sidebar">
                                <i class="fal fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info-card">
                        <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle"
                            alt="Dr. Codex Lantern">
                        <div class="info-card-text">
                            <a href="#" class="d-flex align-items-center text-white">
                                <span class="text-truncate text-truncate-sm d-inline-block">
                                {{Auth::user()->username}}
                                </span>
                            </a>
                        </div>
                        <img src="img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle"
                            data-class="list-filter-active" data-target=".page-sidebar"
                            data-focus="nav_filter_input">
                            <i class="fal fa-angle-down"></i>
                        </a>
                    </div>
                    <ul id="js-nav-menu" class="nav-menu">
                        
                        @foreach ($menus as $item)
                            <li>
                                @if ($item->is_parent == 1 && $item->parent_id == 0 && $item->route == '0')
                                    <a>
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span class="nav-link-text"
                                            data-i18n="nav.font_icons">{{ $item->title }}</span>
                                    </a>
                                    <ul>
                                        @foreach ($menus as $sub_item)
                                            @if ($sub_item->is_parent == 1 && $sub_item->parent_id == $item->id && $sub_item->route == '0')
                                                <li>
                                                    <a href="javascript:void(0);" title="FontAwesome"
                                                        data-filter-tags="font icons fontawesome">
                                                        <span class="nav-link-text"
                                                            data-i18n="nav.font_icons_fontawesome">{{ $sub_item->title }}</span>
                                                    </a>
                                                    <ul>
                                                        @foreach ($menus as $page)
                                                            @if ($page->parent_id == $sub_item->id && $page->parent_id == $sub_item->id)
                                                                <li onclick="LoadPage('{{$page->route}}')">
                                                                    <a title="Light"
                                                                        data-filter-tags="font icons fontawesome light">
                                                                        <span class="nav-link-text no-gutters"
                                                                            data-i18n="nav.font_icons_fontawesome_light">{{ $page->title }}</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endforeach
                                        @foreach ($menus as $page2)
                                            @if ($page2->parent_id == $item->id && $page2->route != '0')
                                                <li onclick="LoadPage('{{$page2->route}}')" >
                                                    <a title="Light" data-filter-tags="font icons fontawesome light">
                                                        <span class="nav-link-text no-gutters"
                                                            data-i18n="nav.font_icons_fontawesome_light">{{ $page2->title }}</span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif

                                @if ($item->is_parent == 1 && $item->parent_id == 0 && $item->route != '0')
                                <a onclick="LoadPage('{{$item->route}}')" >
                                    <i class="fal fa-bullseye"></i>
                                    <span class="nav-link-text "
                                        data-i18n="nav.font_icons">{{ $item->title }}</span>
                                </a>
                                @endif
                        
                            </li>
                        @endforeach
                    </ul>
                    <div class="filter-message js-filter-message bg-success-600"></div>
                </nav>
            </aside>
            <div class="page-content-wrapper">
                <header class="page-header" role="banner">
                    <div class="page-logo">
                        <a href="#"
                            class="page-logo-link press-scale-down d-flex align-items-center position-relative"
                            data-toggle="modal" data-target="#modal-shortcut">
                            <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SFTS</span>
                            <span
                                class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- DOC: nav menu layout change shortcut -->
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
                            data-class="nav-function-hidden" title="Hide Navigation">
                            <i class="ni ni-menu"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle"
                                    data-class="nav-function-minify" title="Minify Navigation">
                                    <i class="ni ni-minify-nav"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle"
                                    data-class="nav-function-fixed" title="Lock Navigation">
                                    <i class="ni ni-lock-nav"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- DOC: mobile button appears during mobile width -->
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle"
                            data-class="mobile-nav-on">
                            <i class="ni ni-menu"></i>
                        </a>
                    </div>
                    <div class="search">
                    </div>
                    <div class="ml-auto d-flex">
                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="btn header-btn waves-effect waves-themed" title="Logout"><span><i
                                    class="fal fa-sign-out"></i></span></a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </header>
              <main id="js-page-content" role="main" class="page-content">
                   
                </main>
                <!-- this overlay is activated only when mobile menu is triggered -->
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
                <!-- END Page Content -->
            </div>
        </div>
    </div>
    <script src="{{URL::asset('js/vendors.bundle.js')}}"></script>
    <script src="{{URL::asset('js/app.bundle.js')}}"></script>
    <script src="{{URL::asset('js/notifications/toastr/toastr.js')}}"></script>
    <script src="{{URL::asset('js/datagrid/datatables/datatables.bundle.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    {{-- <script type="application/javascript" src="{{URL::asset('js/secure-webstore.js')}}"></script> --}}
    {{-- <script type="module" src="{{URL::asset('js/devtommy.js')}}"></script> --}}
 
</body>

</html>
