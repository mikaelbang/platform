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

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/public.js', 'public/js')
    //Creates vendor.js only if it doesnt exist
    // .js('resources/assets/js/vendor.js', 'public/js', {
    //    includePaths: ['node_modules']
    // })
    .sass('resources/assets/sass/app.scss', 'public/css');
