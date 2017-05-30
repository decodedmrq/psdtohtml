const {mix} = require('laravel-mix');

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
const sourceVendor = 'resources/assets/vendor/';
const sourceSassFolder = 'resources/assets/sass/';
const sourceJsFolder = 'resources/assets/js/';
const publicVendor = 'public/vendor/';
const publicCssDir = 'public/css/';
const publicJsDir = 'public/js/';
const publicFontDir = 'public/fonts/';

mix.js(sourceJsFolder + 'index.js', publicJsDir)
 .sass(sourceSassFolder + 'app.scss', publicCssDir);
// mix.copy(sourceVendor + 'bootstrap/dist/css/bootstrap.min.css', publicVendor + 'bootstrap');
// mix.copy(sourceVendor + 'bootstrap/dist/js/bootstrap.min.js', publicVendor + 'bootstrap');

mix.copy(publicVendor + 'gotham-fonts/fonts/GothamRounded-Bold.*', publicFontDir);
mix.copy(publicVendor + 'gotham-fonts/fonts/GothamRounded-Book.*', publicFontDir);
mix.copy(publicVendor + 'gotham-fonts/fonts/GothamRounded-Light.*', publicFontDir);
mix.copy(publicVendor + 'gotham-fonts/fonts/GothamRounded-Medium.*', publicFontDir);