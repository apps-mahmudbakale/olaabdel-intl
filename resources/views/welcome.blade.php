@extends('layouts.app')

@section('content')

<section class="hero__area">
    <div class="hero__shape">
        <div class="circle__shape-01"></div>
        <div class="circle__shape-02"></div>
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4">
            <img src="assets/img/icon/bi-01.png" alt="">
        </div>
        <div class="shape shape-5">
            <img src="assets/img/icon/bi-02.png" alt="">
        </div>
        <div class="shape shape-6"></div>
    </div>
    <div class="hero__height d-flex align-items-center" data-background="{{ asset('img/team/team.jpeg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="slider__content">
                        <!--<div class="jumbotron" style=" background: #000000bf; border: 2px solid #44c2fd;">-->
                        <!--    <h2 style="text-align: center;">Olaabdel International Limited</h2>-->
                        <!--    <hr style="border-top: 1px solid rgb(68 194 253);">-->
                        <!--    <p style="text-align: justify;">   OLAABDEL INTERNATIONAL LIMITED is an established indigenous company which was incorporated in 2012. With a mission to serve as a project management firm for oil and gas industries and high-rise structural building. With specialty in building, installation, repairs and maintenance, using the rope access technology system as our primary means.</p>-->
                        <!--    <div class="slider__btn wow fadeInLeft" data-wow-delay=".8s">-->
                        <!--                                <a class="thm-btn thm-btn-fill" href="">Get a Quote </a>-->
                        <!--                            </div>-->
                        <!--</div>-->
                        
                    </div>
                </div>
            </div>
           {{--  <div class="hero__right d-none d-lg-block wow fadeInRight" data-wow-delay=".6s">
                <img src="{{ asset('img/team/team.png') }}" alt="">
                <p></p>
                <a href="#team" class="btn btn-info btn-block btn-sm">Meet Our Team</a>
            </div> --}}
        </div>
    </div>
</section>
<!-- hero end -->

<!-- about start -->
<section class="about__area about__3 gray-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="at__left mb-30">
                    <div class="sec__title sec__title-2 wow fadeInUp" data-wow-delay=".2s">
                        <span>About</span>
                        <h6>Professional Rope Access Activity Services Company</h6>
                        <p class="text-justify">OLAABDEL INTERNATIONAL LIMITED is an established indigenous company which was incorporated in 2012. With a mission to serve as a general faciity maintenance firm for oil and gas industry/building construction industry.</p>
                    </div>
                    <a class="thm-btn wow fadeInUp" data-wow-delay=".4s" href="{{ route('about') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="at__right pos-rel mb-30">
                    <div class="at__thumb wow fadeInRight" data-wow-delay=".2s">
                        <img src="{{ asset('/img/about/About.jpg') }}" alt="">
                    </div>
                    <div class="at__text wow fadeInRight" data-wow-delay=".4s">
                        <h3>7+</h3>
                        <span>Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- services start -->
<section class="services__area pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="services__left">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="services__box mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="s__icon">
                                    <img src="{{ asset('img/icon/s-01.png') }}" alt="">
                                    <img src="{{ asset('img/icon/sh-01.pn') }}" alt="">
                                </div>
                                <h6>STRUCTURAL BUILDING REPAIRS AND MAINTENANCE</h6>
                                <p>We do all industrial, building maintenance and inspections by means of Rope Access.</p>
                            </div>
                            <div class="services__box services__box-2 mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="s__icon">
                                    <img src="{{ asset('img/icon/s-02.png') }}" alt="">
                                    <img src="{{ asset('img/icon/sh-02.png') }}" alt="">
                                </div>
                                <h6>FABRIC MAINTENANCE:</h6>
                                <p>Neglected fabric maintenance often leads to more serious corrosion problems. Our integrated approach to fabric maintenance is what differentiate us in the market.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="services__box services__box-3 mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="s__icon">
                                    <img src="{{ asset('img/icon/s-03.png') }}" alt="">
                                    <img src="{{ asset('img/icon/sh-03.png') }}" alt="">
                                </div>
                                <h6>PRESSURE WASHING.</h6>
                                <p>Pressure washing can give a dramatic lift to the appearance and value of your commercial, industrial and residential properties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="services__right mb-30">
                    <div class="sec__title sec__title-2 wow fadeInUp" data-wow-delay=".4s">
                        <span>Services</span>
                        <h5>Best Rope Access Activity Services</h5>
                        <p class="text-justify">Our rope access practice service covers a board range across high rise structural buildings, steel companies, telecommunication companies, power companies, oil and gas domains where we carry-out inspection, installation, repairs and maintenance and lots of more.</p>
                    </div>
                    <a class="thm-btn wow fadeInUp" data-wow-delay=".6s" href="{{ route('services') }}">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services end -->

<!-- process start -->
<section class="process__area process__2 pt-120">
    <div class="container">
        <div class="sec__title text-center wow fadeInUp" data-wow-delay=".2s">
            <h2>Let's see our work process</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum pulvinar suspendisse vel eleifend sodales nibh. Mauris urna vel vitae, at vel. Aliquam id scelerisque</p>
        </div>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="process__video wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('/img/bg/video-bg.jpg') }}" alt="">
                    <a class="popup-video video__icon" href="{{ asset('media/clip.mp4') }}"><i class="fas fa-play"></i></a>
                </div>
            </div>

        </div>
    </div>
    <div class="section__shape">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5">
            <img src="{{ asset('/img/icon/bi-01.png') }}" alt="">
        </div>
        <div class="shape shape-6">
            <img src="{{ asset('/img/icon/bi-02.png') }}" alt="">
        </div>
        <div class="shape shape-7"></div>
    </div>
</section>
<!-- process end -->

<!-- team start -->
<section class="team__area pt-120 pb-90" id="team">
    <div class="container">
        <div class="sec__title text-center wow fadeInUp" data-wow-delay=".2s" style="max-width: 900px;">
            <h2>Our Experienced Team</h2>
            <p class="text-justify">
                Our team of experts, combined with diligent and competence to provide exceptional results. We live by a set of guided rules where safety of lives and properties is our major priority. Every field staff has completed training in rope access system, including safety, technical and leadership modules. Our rope access technicians are satisfied by IRATA (Industrial Rope Access Trade Association). Annual refresher training is designed to help create an environment of continuous learning and improvement keep us on track. 
                Our team work ethic, leadership and commitment is what make us exceptional.
            </p>
        </div>
        <div class="row justify-content-center">
           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="team__single text-center mb-30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team__top pos-rel">
                        <div class="team__thumb">
                            <img src="{{ asset('/img/team/avatar.png') }}" alt="">
                        </div>
                        <ul class="team__social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team__content">
                        <h3>Abdel Hafeez</h3>
                        <span>CEO</span>
                    </div>
                </div>
           </div>
           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="team__single text-center mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="team__top pos-rel">
                        <div class="team__thumb">
                            <img src="{{ asset('/img/team/avatar.png') }}" alt="">
                        </div>
                        <ul class="team__social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team__content">
                        <h3>Abdul Azeez</h3>
                        <span>Manager</span>
                    </div>
                </div>
           </div>
           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="team__single text-center mb-30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="team__top pos-rel">
                        <div class="team__thumb">
                            <img src="{{ asset('/img/team/avatar.png') }}" alt="">
                        </div>
                        <ul class="team__social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team__content">
                        <h3>David</h3>
                        <span>Marketer</span>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
<!-- team end -->

<!-- brand start -->
<section class="brand__area brand__2 pt-100">
    <div class="container">
        <div class="sec__title text-center wow fadeInUp" data-wow-delay=".2s">
            <h2>Our Awesome Clients</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="brand__active owl-carousel">
                    <div class="brand__single">
                        <img class="before-image" src="{{ asset('img/brand/brand-01.png') }}" alt="image_not_found">
                    </div>
                    <div class="brand__single">
                        <img class="before-image" src="{{ asset('img/brand/brand-02.png') }}" alt="image_not_found">
                    </div>
                    <div class="brand__single">
                        <img class="before-image" src="{{ asset('img/brand/brand-03.png') }}" alt="image_not_found">
                    </div>
                    <div class="brand__single">
                        <img class="before-image" src="{{ asset('img/brand/brand-04.png') }}" alt="image_not_found">
                    </div>
                    <div class="brand__single">
                        <img class="before-image" src="{{ asset('img/brand/brand-05.png') }}" alt="image_not_found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand end -->

<p><br></p>

<!-- testimonial start -->
{{-- <section class="testimonial__area testimonial__3 gray-bg pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8">
                <div class="sec__title sec__title-2 wow fadeInUp" data-wow-delay=".2s">
                    <h2>What our clients say</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mi feugiat proin ornare elementum parturient nibh.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial__active-3 owl-carousel">
                    <div class="tm__item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, </p>
                        <h3>Wasim Mia</h3>
                        <span>Web Designer</span>
                    </div>
                    <div class="tm__item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, </p>
                        <h3>Wasim Mia</h3>
                        <span>Web Designer</span>
                    </div>
                    <div class="tm__item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, </p>
                        <h3>Wasim Mia</h3>
                        <span>Web Designer</span>
                    </div>
                    <div class="tm__item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie Lorem ipsum dolor sit amet, </p>
                        <h3>Wasim Mia</h3>
                        <span>Web Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- testimonial end -->
@endsection