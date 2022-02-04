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
                        <h3>FABRIC MAINTENANCE:</h3>
                        <p>Neglected fabric maintenance often leads to more serious corrosion problems. Our integrated approach to fabric maintenance is what differentiate us in the market. Our approach delivers huge safe in cost and time to our customers through the utilization of our versatile Rope access technique. Our fabric maintenance services incorporate activities that maximize your asset uptime and prolong the useful life of the asset through intervention such as:</p>
                        <p>SURFACE PREPARATION</p>
                        <ul class="s__list">
                            <li>Manual preparation</li>
                            <li>Power tool preparation</li>
                            <li>Ultra-hydro-pressure blasting</li>
                            <li>Hydro-blasting system</li>
                            <li>Abrasive blasting system.</li>
                        </ul>
                        <p>COATING/PAINTING APPLICATION</p>
                         <ul class="s__list">
                            <li>Multi-component system application</li>
                            <li>Single component</li>
                            <li>Tank and vessel linings</li>
                            <li>Non-skid deck and helideck coating</li>
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