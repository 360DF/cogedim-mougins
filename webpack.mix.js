const mix = require('laravel-mix');

mix.js(['resources/js/slick.js', 'resources/js/scrollPosStyler.js', 'resources/js/app.js'], 'public/js/app.js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
   .copy('resources/js/jquery.sticky.js', 'public/js/jquery.sticky.js')
   .copyDirectory('resources/img/', 'public/img/')
   .sourceMaps();