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
                        <h3>STRUCTURAL BUILDING REPAIRS AND MAINTENANCE</h3>
                        <p>We do all industrial, building maintenance and inspections by means of Rope Access. Rope access has been in the structural building and inspection longer than it has been in any other sector. This is because no machine or cradle can carry out repair or maintenance on the high rise building better than rope access technicians.</p>
                        <p>hrough rope access we are able to offer our clients a thorough means of building repairs and maintenance due to the ability to closely access and inspect the areas of a building. With responsibilities on building insurance required that buildings should be adequately maintained. There is a growing need for periodical maintenance on commercial and industrial buildings. We also provide our clients with feedback via digital video and pictures, as well as report form.</p>
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