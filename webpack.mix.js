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

mix.js('resources/js/main.js', 'public/js').extract();;

mix.js('resources/js_view/recipe_ingredients.js', 'public/js/').extract();

mix.sass('resources/sass/bootstrap.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
