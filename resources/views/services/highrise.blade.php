@extends('layouts.app')

@section('content')
<!-- page title start -->
<section class="page__title pt-100 pb-100" data-background="{{ asset('img/bg/page-title.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page__title-content text-center">
                    <h2>Services Details</h2>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li>Services Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title end -->

<!-- services details start -->
<section class="services__details pt-120 pb-60">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-8">
                <div class="services__content-wrapper mb-30">
                    <div class="s__text">
                        <h3>HIGH RISE BUILDING GLASS CLEANING.</h3>
                        <p>Our crew members are experts in their industry and skilled masters at their craft. Every technician is trained following the IRATA and IWCA safety guidelines and methods with an overall emphasis on compliance with OSHA standards. This gives us a high reach cleaning system that eliminate the use of scaffolding and ladders and even reaching those places that you can't reach even with the use of pole washing system.</p>
                        <p>We also provide a cost-effective solution to alot of these tasks and also a solution that is less obstructive to daily business. In addition to this OLAABDEL INTERNATIONAL LTD Company are able to offer a number of specialized cleaning services which includes:</p>
                        <ul class="s__list">
                            <li>Exterior window cleaning</li>
                            <li>Exterior concrete and facade cleaning</li>
                            <li>Atrium and skylight cleaning</li>
                            <li>Solar panel cleaning</li>
                        </ul>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar__widget mb-30">
                    <div class="widget">
                        <h4 class="widget__title">Services</h4>
                     <ul class="widget__category">
                            <li><a href="{{ route('fabric') }}">Fabric Maintenance</a></li>
                            <li><a href="{{ route('structure') }}">Structural Building Repairs & Maintenance</a></li>
                            <li><a href="{{ route('highrise') }}">High Rise Building Glass Cleaning</a></li>
                            <li><a href="{{ route('pressure')}}">Pressure Washing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services details end -->
@endsection