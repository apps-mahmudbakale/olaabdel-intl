const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
 mix.styles([
     'public/css/bootstrap.min.css',
        'public/css/owl.carousel.min.css',
        'public/css/animate.min.css',
        'public/css/custom-animation.css',
        'public/css/fontawesome-all.min.css',
        'public/css/themify-icons.css',
        'public/css/magnific-popup.css',
        'public/css/metisMenu.css',
        'public/css/default.css',
        'public/css/style.css'
     ], 'public/css/all.css');

  mix.scripts([
      'public/js/jquery-3.5.1.min.js',
      'public/js/modernizr-3.8.0.min.js',
      'public/js/popper.min.js',
      'public/js/bootstrap.min.js',
      'public/js/jquery.magnific-popup.min.js',
      'public/js/jquery.scrollUp.min.js',
      'public/js/waypoints.min.js',
      'public/js/jquery.counterup.min.js',
      'public/js/isotope.pkgd.min.js',
      'public/js/imagesloaded.pkgd.min.js',
      'public/js/owl.carousel.min.js',
      'public/js/metisMenu.min.js',
      'public/js/wow.min.js',
      'public/js/plugins.js',
      'public/js/main.js',
    ], 'public/js/all.js');



