<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mugli">
    <meta name="description" content="My Tech Child - Catch them young">
    <!-- ======== Page title ============ -->
    <title>My Tech Child - Catch them young</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('ascent/assets/img/logo/favicon_io/android-chrome-512x512.png') }}">
    <!--<< Bootstrap min.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/all.min.css') }}">
    <!--<< Animate.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/animate.css') }}">
    <!--<< Icomoon.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/icomoon.css') }}">
    <!--<< Magnific Popup.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/nice-select.css') }}">
    <!--<< Main.css') }} >>-->
    <link rel="stylesheet" href="{{ asset('ascent/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <span></span>
        <span></span>
        <span class="man-pre">
            <im g src="{{ asset('ascent/assets/img/aservices/sertd-shape.png') }}" alt="img">
        </span>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                <img src="{{ asset('ascent/assets/img/logo/techlogo1.png') }}" width="150" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#"> Central Business District Area, Abuja.</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@mytechchild.com"><span
                                            class="mailto:info@mytechchild.com">info@mytechchild.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 06am -02pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">(+234) 813 710 7913</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="{{ route('login') }}" class="theme-btn p2-bg text-center">
                                <span>
                                    Login
                                    <span class="ani-arrow">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        {{-- <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Top Section Start -->
    <div class="header-top-section d-lg-block d-none bg-success">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>Hi, {{ auth()->user()->name }}</li>
                </ul>
                <div class="social-wrapper d-flex align-items-center">
                    <p class="text-white text-bold">Logged in!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 white-bg">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route(auth()->user()->role.'.dashboard') }}" class="header-logo">
                                <img src="{{ asset('ascent/assets/img/logo/techlogo.png') }}" width="200" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        @if(auth()->user()->role == 'admin')
                                            <li>
                                                <a href="{{ route('admin.schedules') }}">Manage Schedules</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('admin.courses') }}">Manage Classes</a>
                                            </li>

                                            <li>
                                                <a href="#">Manage Teachers</a>
                                            </li>
                                        @endif

                                        @if(auth()->user()->role !== 'admin')
                                            <li>
                                                <a href="{{ route(auth()->user()->role.'.dashboard')}}">My Classes</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('profile') }}">Profile</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header-button d-sm-block d-none">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="theme-btn p3-bg">
                                <span>
                                    Logout
                                    <i class="fa-solid fa-arrow-left-long"></i>
                                </span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @yield('content')

    <!--<< Footer Section Start >>-->
    <footer class="footer-section overflow-hidden position-relative footer-style1 white-bg">
        @if(!Auth::check())
        <div class="footer-widgets-wrapper">
            <div class="container">
                <div class="row g-md-4 g-4 justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget">
                            <div class="widget-heads">
                                <a href="index.html" class="footer-logo">
                                    <img src="{{ asset('ascent/assets/img/logo/techlogo.png') }}" width="200" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p class="pre-pragraph">
                                    Yes, there are many notable ma corporate the a od businesses Informati worldwide
                                </p>
                                <div class="social-wrapper d-flex align-items-center">
                                    <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                                    <a href="#" class="white">
                                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    <a href="#" class="white"><i class="white fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="white"><i class="white fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4 class="white">Pages</h4>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4 class="white">Contact Us</h4>
                            </div>
                            <ul class="list-area list-contact">
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span class="lited">
                                        Central Business District Area, Abuja.
                                    </span>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="info@example.com" class="link">info@mytechchild.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="#" class="link">(+234) 813 710 7913</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="footer-bottom">
            <div class="container">
                <div
                    class="footer-wrapper d-md-flex d-grid gap-md-0 gap-2 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                    <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                        &copy; mytechchild 2024 | All Rights Reserved
                    </p>
                    <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a href="#">
                                Trams & Condition
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" id="scrollUp" class="scroll-icon">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- Element -->
        <img src="{{ asset('ascent/assets/img/footer/f-apple.png') }}" alt="img" class="footer-apple position-absolute">
        <img src="{{ asset('ascent/assets/img/footer/f-cut.png') }}" alt="img" class="footer-cut position-absolute">
        <!-- Element -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('ascent/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('ascent/assets/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('ascent/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('ascent/assets/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('ascent/assets/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('ascent/assets/js/jquery.counterup.min.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('ascent/assets/js/swiper-bundle.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('ascent/assets/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('ascent/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('ascent/assets/js/wow.min.js') }}"></script>
    <!--<< Main.js') }} >>-->
    <script src="{{ asset('ascent/assets/js/main.js') }}"></script>

    @livewireScripts
</body>

</html>
