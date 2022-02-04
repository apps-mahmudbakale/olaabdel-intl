@extends('layouts.app')

@section('content')
          <!-- page title start -->
            <section class="page__title pt-100 pb-100" data-background="{{ asset('img/bg/page-title.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page__title-content text-center">
                                <h2>Services</h2>
                                <div class="breadcrumb-list">
                                    <ul>
                                        <li><a href="{{ route('welcome') }}">Home</a></li>
                                        <li>Services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- features start -->
            <section class="features__area features__2 features__3 pt-110 pb-90">
                <div class="container">
                    <div class="sec__title text-center wow fadeInUp" data-wow-delay=".2s" style="max-width:900px">
                        <h2>Featured Services</h2>
                        <p>
                            Our rope access practice service covers a board range across high rise structural buildings, steel companies, telecommunication companies, power companies, oil and gas domains where we carry-out inspection, installation, repairs and maintenance and lots of more.
                        </p>
                        <p>
                            OLAABDEL INT'L LTD provides rope access inspection, maintenance, blasting, coating/painting, high-rise glass cleaning, jet washing and structural building repairs and services by using rope access instead of traditional means like scaffolding, lift and cranes. Our personnel are IRATA certified which enables them to conduct inspection activities at height.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features__single mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="features__thumb">
                                    <img src="{{ asset('img/icon/fs-01.png') }}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4>FABRIC MAINTENANCE</h4>
                                    <p>Neglected fabric maintenance often leads to more serious corrosion problems. Our integrated approach to fabric maintenance is what differentiate us in the market.Our approach delivers huge safe in cost and time to our customers through the utilization of our versatile Rope access technique.</p>
                                    <a href="{{ route('fabric') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features__single mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="features__thumb features__thumb-2">
                                    <img src="{{ asset('img/icon/fs-02.png') }}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4>STRUCTURAL BUILDING REPAIRS AND MAINTENANCE</h4>
                                    <p>We do all industrial, building maintenance and inspections by means of Rope Access. Rope access has been in the structural building and inspection longer than it has been in any other sector. This is because no machine or cradle can carry out repair or maintenance on the high rise building better than rope access technicians. </p>
                                    <a href="{{ route('structure') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="features__thumb features__thumb-3">
                                    <img src="{{ asset('img/icon/fs-03.png') }}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4>HIGH RISE BUILDING GLASS CLEANING</h4>
                                    <p>Our crew members are experts in their industry and skilled masters at their craft. Every technician is trained following the IRATA and IWCA safety guidelines and methods with an overall emphasis on compliance with OSHA standards. </p>
                                    <a href="{{ route('highrise') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features__single mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="features__thumb">
                                    <img src="{{ asset('img/icon/fs-04.png') }}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4>PRESSURE WASHING</h4>
                                    <p>ressure washing can give a dramatic lift to the appearance and value of your commercial, industrial and residential properties. Customers, clients and tenant are going to judge the overall condition of your property by the cleanliness of the walkways and surface areas of your building.</p>
                                    <a href="{{ route('pressure') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features__single mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="features__thumb features__thumb-2">
                                    <img src="{{ asset('img/icon/fs-05.png') }}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4>kitchen Cleaning</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                                    <a href="services-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features__single mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="features__thumb features__thumb-3">
                                    <img src="{{ asset('img/icon/fs-06.png') }}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4>Toilet Cleaning</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                                    <a href="services-details.html">Read More</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- features end -->
@endsection