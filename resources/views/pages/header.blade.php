<!doctype html>

<html lang="en" class="dark-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="{{ $content }}" />
    <title>{{ $pagetitale }}</title>


    <link rel="icon" type="image/x-icon" href="{{ asset('public/img/faviconnew.svg')}}" />
    <meta name="robots" content="noindex, nofollow">

    <meta name="google-site-verification" content="YLCayHYkKvCKvayPOUHJnQ43h6I2p0IEf35uBwX7iQo" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset_url('css/fonts/tabler-icons.eot') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset_url('css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset_url('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/pages/front-page.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/pages/front-page-landing.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('libs/node-waves/node-waves.css') }}" />
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/img/favicon.svg')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset_url('fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset_url('css/pages/front-page-landing.css') }}" />
    <script src="{{ asset_url('js/helpers.js') }}"></script>
    <script src="{{ asset_url('js/template-customizer.js') }}"></script>
    <script src="{{ asset_url('js/front-config.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B59LHVYPW3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B59LHVYPW3');
    </script>

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle JS (includes Modal + Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<script src=" {{ asset_url('js/dropdown-hover.js') }}"></script>
<script src="{{ asset_url('js/mega-dropdown.js') }}"></script>
<nav class="layout-navbar custom-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-xl landing-navbar">
            <div class="navbar-brand app-brand demo d-flex  me-4">
                <button class="navbar-toggler text-light border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-menu-2 ti-sm align-middle"></i>
                </button>
                <a href="{{ route('home') }}" class="app-brand-link">
                    <div class="logo-wrap">
                        <img src="{{ asset_url('img/header-logo.png') }}" alt="logo">
                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-light position-absolute end-0 top-0 scaleX-n1-rtl"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="ti ti-x ti-sm"></i>
                </button>
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item mega-dropdown">
                        <a
                            class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                            aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                            Service
                        </a>
                        <div class="dropdown-menu custom-menu p-3 p-md-4">
                            <div class="row gy-4">

                                <div class="col-12 col-lg">

                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('guest-posting-services') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                Guest Posting </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('link-building-services') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                Link Building
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('content-writing-services') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                Content Writing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('seo-reseller-services') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                SEO Reseller
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('content-marketing-services') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                Content Marketing </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mega-dropdown">
                        <a
                            class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                            aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                            Tools
                        </a>
                        <div class="dropdown-menu custom-menu p-3 p-md-4">
                            <div class="row gy-4">

                                <div class="col-12 col-lg">

                                    <ul class="nav flex-column">


                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/free-broken-links-checker">
                                                <i class="ti ti-circle me-1"></i>
                                                Broken Links Finder </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/google-index-checker">
                                                <i class="ti ti-circle me-1"></i>
                                                Google Index Checker </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/free-robots-txt-generator">
                                                <i class="ti ti-circle me-1"></i>
                                                Robots.txt Generator
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/free-xml-sitemap-generator-tool">
                                                <i class="ti ti-circle me-1"></i>
                                                XML Sitemap Generator
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/google-malware-checker-tool">
                                                <i class="ti ti-circle me-1"></i>
                                                Google Malware Checker
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-12 col-lg">

                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/free-seo-plagiarism-checker-tool">
                                                <i class="ti ti-circle me-1"></i>
                                                Free Plagiarism Checker </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/free-word-counter-tool">
                                                <i class="ti ti-circle me-1"></i>

                                                Word Counter </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link" target="_blank"
                                                href="https://freebestseotools.com/domain-whois-checker-tool">
                                                <i class="ti ti-circle me-1"></i>
                                                Whois Checker </a>
                                        </li>
                                        <li class="nav-item">
                                            <button class="py-1 px-2 outlined-btn w-50 fs-6 mt-3"
                                                onclick="window.open('https://freebestseotools.com/domain-whois-checker-too', '_blank')">
                                                View
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item mega-dropdown">
                        <a
                            class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                            aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                            Company
                        </a>
                        <div class="dropdown-menu custom-menu p-3 p-md-4">
                            <div class="row gy-4">
                                <div class="col-12 col-lg">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('about-us') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                About Us </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('contact-us') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mega-dropdown">
                        <a 
                            class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                            aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                            Resources
                        </a>
                        <div class="dropdown-menu custom-menu p-3 p-md-4">
                            <div class="row gy-4">

                                <div class="col-12 col-lg">

                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('blog') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                Blogs </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="{{ route('faq') }}">
                                                <i class="ti ti-circle me-1"></i>
                                                FAQs
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mega-dropdown-link"
                                                href="#">
                                                <i class="ti ti-circle me-1"></i>
                                                Help Center
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-xl-none">
                        <a class="nav-link fw-medium" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item d-xl-none">
                        <a class="nav-link fw-medium" href="{{ route('register') }}">Sign Up for free</a>
                    </li>

                </ul>
            </div>
            <div class="landing-menu-overlay d-xl-none"></div>
            <div class="navbar-nav flex-row gap-2 align-items-center ms-auto d-none d-xl-flex">
                @if (Auth::check())

                <a class="outlined-btn" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="align-middle">{{ __('Log Out') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <a href="{{ route('dashboard') }}" class="filled-btn">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="outlined-btn">
                    Login
                </a>
                <a href="{{ route('register') }}" class="filled-btn">
                    Sign Up for free
                </a>
                @endif
            </div>

        </div>
    </div>
</nav>
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6784e3bd49e2fd8dfe069a7c/1ihfhj7t5';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>