@extends('layouts.app')

@section('content')


<!-- page title start -->
<section class="page__title pt-100 pb-100" data-background="{{ asset('img/bg/page-title.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page__title-content text-center">
                    <h2>Gallery</h2>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title end -->

<!-- portfolio start -->
<section class="portfolio__area pt-120 pb-120">
    <div class="container">
        <div class="row grid">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat4 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4318.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4318.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                       {{--  <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat5 cat2 cat4">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4319.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4319.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                       {{--  <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat1">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4325.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4325.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat1 cat4">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4326.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4326.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                       {{--  <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat4 cat-2 cat5">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_5407.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_5407.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                       {{--  <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat5 cat1 cat4">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4276.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4276.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat2 cat4 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4282.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4282.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat1 cat3 cat4">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4303.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4303.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                       {{--  <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4305.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4305.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_0450.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_0450.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4194.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4194.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_0388.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_0388.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_0452.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_0452.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/T 3 Coating process.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/T 3 Coating process.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/T 3 Washing process.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/T 3 Washing process.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/DSC03879.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/DSC03879.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4999.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4999.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_5005.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_5005.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/DSC02134.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/DSC02134.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/DSC03142.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/DSC03142.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/DSC03869.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/DSC03869.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG-20200426-WA0033.jpg') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG-20200426-WA0033.jpg') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4376.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4376.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_5352.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_5352.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_5384.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_5384.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_5404.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_5404.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4261.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4261.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4294.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4294.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4211.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4211.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/IMG_4212.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/IMG_4212.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-12 grid-item cat3 cat5 cat2">
                <div class="portfolio__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="portfolio__thumb">
                        <img src="{{ asset('img/portfolio/T9040 W.JPG') }}" alt="">
                    </div>
                    <div class="portfolio__content">
                        <div class="content-view">
                            <a class="popup-image" href="{{ asset('img/portfolio/T9040 W.JPG') }}"><i class="ti-plus"></i></a>
                        </div>
                        {{-- <div class="port-text">
                           <h3><a href="portfolio-details.html">Portfolio Center</a></h3>
                            <span>Office Cleaning</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2 align="center">Video Clips</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="process__video wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('/img/bg/video-bg.jpg') }}" alt="">
                    <a class="popup-video video__icon" href="{{ asset('media/clip.mp4') }}"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="process__video wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('/img/bg/video-bg.jpg') }}" alt="">
                    <a class="popup-video video__icon" href="{{ asset('media/clip.mp4') }}"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <p><br><br></p>
            </div>
            <div class="col-md-6 ">
                <div class="process__video wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('/img/bg/video-bg.jpg') }}" alt="">
                    <a class="popup-video video__icon" href="{{ asset('media/clip.mp4') }}"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio end -->
@endsection
