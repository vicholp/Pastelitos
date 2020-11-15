const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
            ],
    'public/js/all.js');

mix.copyDirectory('resources/js_view/', 'public/js')

mix.styles([
      'resources/css/main.css',
      'resources/css/rfs.css',
      'resources/css/mdi.css'],
    'public/css/app.css');

mix.browserSync('localhost:80');
