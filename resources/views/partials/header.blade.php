<!-- header start -->
<header class="header__area header__3 header__transparent">
    <div id="sticky-header" class="header__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="logo">
                        <a href="index.php">
                            <img src="{{ asset('img/logo/logo-white.png') }}" alt="logo">
                            <img src="{{ asset('img/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10 col-md-6 col-sm-6 col-6">
                    <div class="header__wrapper d-flex align-items-center justify-content-end">
                        <nav class="main__menu d-none d-lg-block">
                            <ul>
                                <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="fa fa-question-circle"></i> About</a></li>
                                <li><a href="{{ route('services') }}"><i class="fa fa-cogs"></i> Services </a></li>
                                <li><a href="{{ route('gallery') }}"><i class="fa fa-image"></i> Gallery </a></li>
                                <li><a href="{{ route('contact') }}"><i class="fa fa-phone-square"></i> Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__btn d-none d-lg-block ml-20">
                            <a class="thm-btn" href="{{ route('contact') }}">Get a Quote</a>
                        </div>
                        <div class="hamburger-menu d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0);">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->


<!-- slide bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="ti-close"></i></a>
    </div>

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>