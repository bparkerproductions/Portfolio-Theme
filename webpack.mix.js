let mix = require('laravel-mix');

mix
  .js('resources/assets/js/app.js', 'resources/dist/js/app.js')
  .sass('resources/assets/styles/main.scss', 'resources/dist/styles');