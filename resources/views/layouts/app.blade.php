<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Olaabdel International Limited | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.png in the root directory -->

        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        
    </head>
    <body>

        <!-- start Preloader  -->
        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- End Preloader  -->
        @include('partials.header')
        <main>
        @yield('content')
        </main>
        @include('partials.footer')
        <script src="{{ asset('js/all.js') }}"></script>
    </body>
   </html>