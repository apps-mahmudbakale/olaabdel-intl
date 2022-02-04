@extends('layouts.app')

@section('content')
            <!-- page title start -->
            <section class="page__title pt-100 pb-100" data-background="{{ asset('/img/bg/page-title.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page__title-content text-center">
                                <h2>About us</h2>
                                <div class="breadcrumb-list">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li>About</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- about start -->
            <section class="about__area about__4 pt-120 pb-90">
                <div class="container">
                    <div class="about__content-wrapper">
                        {{-- <div class="row"> --}}
                       {{--      <div class="col-lg-6">
                                <div class="at__left mb-30">
                                    <div class="at__big-img wow fadeInLeft" data-wow-delay=".2s" style="max-width:900px;">
                                        <img src="{{ asset('img/about/about-img-01.jpg') }}" alt="">
                                    </div>
                                    <div class="at__smll-img wow fadeInLeft" data-wow-delay=".4s">
                                        <img src="{{ asset('img/about/about-img-02.jpg') }}" alt="">
                                        <a class="popup-video video__icon" href="{{ asset('https://www.youtube.com/watch?v=cRXm1p-CNyk') }}"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="at-right mb-30">
                                    <div class="sec__title sec__title-2 wow fadeInUp" data-wow-delay=".2s">
                                        <span>ABOUT OLAABDEL INTERNATIONAL LIMITED</span>
                                        <h3>INTRODUCTION</h3>
                                        <p class="text-justify">
                                            OLAABDEL INTERNATIONAL LIMITED is an established indigenous company which was incorporated in 2012. With a mission to serve as a general faciity maintenance firm for oil and gas industry/building construction industry and work-at-height access provider with specialty in carrying out work at height at various level, such as inspection, installation, repairs and maintenance using rope access system as our primary means of access.
                                        </p>
                                        <p class="text-justify">
                                            Our ability to deliver quality services is based on the extensive knowledge and working experience acquired by our technicians. Each of our principal engineers, rope access technicians and management team members have more years of experience. We have also acquired the best equipment and developed standard procedures that are known to deliver reliable results within stipulated period of time.
                                        </p>
                                        <p class="text-justify">
                                            Our commitment to growth and improvement enables us to provide services which are cost effective to clients
                                            ROPE ACCESS SYSTEM is a safe method of working at height where ropes and associated equipment are used to gain access to desired work position and to provide supports.
                                        </p>
                                        <p><br></p>
                                          <h3>WHY ROPE ACCESS SYSTEM</h3>
                                          <p class="text-justify">
                                              Using Rope Access methods mainly lies in the safety and speed of which workers can get to or from difficult locations in order to carry out their work efficiently. Often with minimal impact on other operations, avoiding damage to property, or harm to environment.It highly cost effective.
                                          </p>
                                           <p><br></p>
                                           <h3>VISION</h3>
                                           <p class="text-justify">
                                               Our vision is to be a world class company providing unparalleled services to reputable companies in construction, oil and gas industries in Nigeria and sub – Saharan Africa. 
                                           </p>
                                           <p><br></p>
                                           <h3>MISSION</h3>
                                           <p class="text-justify">
                                               Our mission is to continually reciprocate our client’s trust in us by always providing the utmost quality service within stipulated time. 
                                           </p>
                                           <p><br></p>
                                           <h3>GOALS</h3>
                                           <ul>
                                               <li>
                                               * To provide the client with accurate information on their asset/equipment's performance over time allowing them to take perfect decisions.
                                               </li>
                                               <li>
                                                   * To provide our clients with reliable services by strictly adhering to international standards and practices to ensure continuous safety operations to lives and properties

                                               </li>
                                           </ul>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </section>
            <!-- about end -->

            <!-- brand start -->
            <section class="brand__area brand__3 pb-120">
                <div class="container">
                    <div class="sec__title text-center">
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

            <!-- story start -->
           {{--  <section class="story__area gray-bg pt-120 pb-120">
                <div class="container">
                    <div class="sec__title text-center wow fadeInUp" data-wow-delay=".2s">
                        <h2>Company Happy Story</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi accumsan arcu massa erat. Lorem sit rutrum eget viverra. Aliquet laoreet egestas nunc,</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="story__wrapper">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="story__left">
                                            <ul>
                                                <li class="story__single">
                                                    <div class="s__box">
                                                        <h3>Company Starting</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida interdum</p>
                                                    </div>
                                                </li>
                                                <li class="story__single">
                                                   <div class="s-date">
                                                        <h2>2012</h2>
                                                   </div>
                                                </li>
                                                <li class="story__single">
                                                    <div class="s__box s__box-2">
                                                        <h3>National Award</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida interdum</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="story__right">
                                            <ul>
                                                <li class="story__single">
                                                   <div class="s-date">
                                                        <h2>2008</h2>
                                                   </div>
                                                </li>
                                                <li class="story__single">
                                                    <div class="s__box">
                                                        <h3>Successfull</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida interdum</p>
                                                    </div>
                                                </li>
                                                <li class="story__single">
                                                   <div class="s-date">
                                                        <h2>2016</h2>
                                                   </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- story end -->

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
                                <img src="{{ asset('img/bg/video-bg.jpg') }}" alt="">
                                <a class="popup-video video__icon" href="{{ asset('https://www.youtube.com/watch?v=cRXm1p-CNyk') }}"><i class="fas fa-play"></i></a>
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
                        <img src="{{ asset('img/icon/bi-01.png') }}" alt="">
                    </div>
                    <div class="shape shape-6">
                        <img src="{{ asset('img/icon/bi-02.png') }}" alt="">
                    </div>
                    <div class="shape shape-7"></div>
                </div>
            </section>
            <!-- process end -->

            <!-- testimonial start -->
            <section class="testimonial__area pt-130 pb-120">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-xl-6 offset-xl-1 col-lg-6">
                            <div class="testimonial__right mb-30 wow fadeInRight" data-wow-delay=".2s">
                                <img src="{{ asset('img/bg/testimonial-bg.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="testimonial__left mb-30">
                                <div class="testimonial__head">
                                    <img src="{{ asset('img/icon/tm.png') }}" alt="">
                                    <h2>What say our Client</h2>
                                </div>
                                <div class="testimonial__active owl-carousel">
                                    <div class="testimonial__single">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis facilisi morbi volutpat ipsum sed ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis facilisi morbi volutpat ipsum sed ornare.</p>
                                        <h4>Megan Ava</h4>
                                        <span>Senior Member</span>
                                    </div>
                                    <div class="testimonial__single">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis facilisi morbi volutpat ipsum sed ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis facilisi morbi volutpat ipsum sed ornare.</p>
                                        <h4>Megan Ava</h4>
                                        <span>Senior Member</span>
                                    </div>
                                    <div class="testimonial__single">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis facilisi morbi volutpat ipsum sed ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis facilisi morbi volutpat ipsum sed ornare.</p>
                                        <h4>Megan Ava</h4>
                                        <span>Senior Member</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial end -->
@endsection