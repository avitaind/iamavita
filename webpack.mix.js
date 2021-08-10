const mix = require('laravel-mix');
<<<<<<< HEAD
require('laravel-mix-scrollmagic-gsap');

mix.scrollmagicGSAP();
=======

>>>>>>> d476bcc85577485d7ae783a8d52b455df6b06570
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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
