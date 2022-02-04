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
                        <h3>PRESSURE WASHING.</h3>
                        <p>Pressure washing can give a dramatic lift to the appearance and value of your commercial, industrial and residential properties. Customers, clients and tenant are going to judge the overall condition of your property by the cleanliness of the walkways and surface areas of your building. Our rope access technician team has many years of experience in pressure washing of commercial, industrial, residential building, farm tank and many other surfaces. Many property owners cannot afford a complete building makeover, but pressure washing on buildings and surfaces are more affordable method of revitalizing the structure.</p>
                        <p>We specialize in all types of pressure washing including:</p>
                        <ul class="s__list">
                           <li>Exterior building cleanin</li>
                           <li>Farm Tan</li>
                           <li>Debris remova</li>
                           <li>Painting preparation cleanin</li>
                           <li>Parking lo</li>
                           <li>Roof</li>
                           <li>Brick wor</li>
                           <li>Stain Removal</li>
                        </ul>
                        <p>Flexible cleaning services to fit your needs. We offer special services for our clients; we arrange in advance on-site cleaning crews to provide window cleaning/ pressure washing services at any time of the day to fit your unique property needs. These types of services are a help to minimize disruption to customers, tenant and employees. Needing a last-minute service? Our experienced staff is well equipped to handle any situation that may arise, with the utmost professionalism and minimal response time.</p>
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