let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js/v004.js')
.sass('resources/assets/sass/app.scss', 'public/css/v004.css')
.copyDirectory('resources/assets/images', 'public/images');
