let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js/v002.js')
.sass('resources/assets/sass/app.scss', 'public/css/v002.css')
.copyDirectory('resources/assets/images', 'public/images');
