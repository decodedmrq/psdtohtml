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
const storageFontDir = 'storage/app/public/fonts/';

mix.copy(storageFontDir, publicFontDir);

mix.sass(sourceSassFolder + 'home.scss', publicCssDir);
// mix.sass(sourceSassFolder + 'contact.scss', publicCssDir);
// mix.sass(sourceSassFolder + 'article.scss', publicCssDir);
// mix.sass(sourceSassFolder + 'knowledge.scss', publicCssDir);
// mix.js(sourceJsFolder + 'contact.js', publicJsDir);
// mix.js(sourceJsFolder + 'home.js', publicJsDir);

mix.sass(sourceSassFolder + 'app.scss', publicCssDir).options({processCssUrls: false});
// mix.sass(sourceSassFolder + 'library.scss', publicCssDir).options({processCssUrls: false});
mix.js(sourceJsFolder + 'app.js', publicJsDir);

//
// //Admin
// const publicAdminDir = 'public/admin/';
// mix.js(sourceJsFolder + 'admin/app.js', publicAdminDir + 'js/')
//     .sass(sourceSassFolder + 'admin/library.scss', publicAdminDir + 'css/')
//     .js(sourceJsFolder + 'admin/bootstrap.js', publicAdminDir + 'js/')
//     .sass(sourceSassFolder + 'admin/app.scss', publicAdminDir + 'css/')
//     .sass(sourceSassFolder + 'admin/feedback.scss', publicAdminDir + 'css/');
//
//
// mix.copy(
//     sourceVendor + 'html5shiv/dist/html5shiv.min.js',
//     publicVendor + 'html5shiv/html5shiv.min.js'
// );
// mix.copy(
//     sourceVendor + 'respond/dest/respond.min.js',
//     publicVendor + 'respond/respond.min.js'
// );
// mix.copy(
//     sourceVendor + 'owl.carousel/dist/owl.carousel.min.js',
//     publicVendor + 'owl.carousel/owl.carousel.min.js'
// );
mix.sass(sourceSassFolder + 'about.scss', publicCssDir);
