const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.setPublicPath('public')
    .setResourceRoot('../')
    .js('resources/js/app.js', 'public/js')
    .copy('resources/sass/fonts', 'public/css/fonts')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
      processCssUrls: false,
      postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();
