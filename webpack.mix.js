let mix = require('laravel-mix');


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

mix.js([
		'resources/assets/js/app.js',
		'resources/assets/js/spa.js',
	], 'public/js/app.js')
   .sass('resources/assets/sass/app.scss', 'public/css/app.css');



/* LiveReload */
mix.browserSync({
	host:	'laravel-fresh',
	proxy:	'laravel-fresh',
	files:[
		'resources/views/**/*.php',
		'app/**/*.php',
		'routes/**/*.php',
	]
});