let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix
  .js('resources/assets/js/app.js', 'resources/dist/js/app.js')
  .sass('resources/assets/styles/main.scss', 'resources/dist/styles')
  .purgeCss({
    enabled: true,
    extend: {
      safelist: { deep: [/col/, /flex-buttons/, /spinner/, /bg-circle/] }
    }
  });