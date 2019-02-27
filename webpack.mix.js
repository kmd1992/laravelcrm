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
//Move Global JS
mix.copyDirectory('resources/assets','public/assets');


/*mix.js('resources/assets/js/app.js', 'public/js')
   .styles([
	    'resources/asset/css/',
	], 'public/css');*/
/*.sass('resources/assets/sass/app.scss', 'public/css');*/