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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/auth/register.js', 'public/js/auth')
   .js('resources/js/auth/login.js', 'public/js/auth')
   .js('resources/js/auth/logout.js', 'public/js/auth')
   .js('resources/js/users/user.js', 'public/js/users')
   .js('resources/js/users/top.js', 'public/js/users')
   .js('resources/js/users/edit.js', 'public/js/users')
   .js('resources/js/devices/devices.js', 'public/js/devices')
   .js('resources/js/devices/genre.js', 'public/js/devices')
   .js('resources/js/devices/edit.js', 'public/js/devices')
   .js('resources/js/devices/product.js', 'public/js/devices')
   .js('resources/js/devices/add.js', 'public/js/devices')
   .js('resources/js/makers/makers.js', 'public/js/makers')
   .js('resources/js/makers/add.js', 'public/js/makers')
   .js('resources/js/makers/edit.js', 'public/js/makers')
   .js('resources/js/statics/about.js', 'public/js/statics')
   .js('resources/js/statics/policy.js', 'public/js/statics')
   .js('resources/js/statics/contact.js', 'public/js/statics')
   .js('resources/js/statics/terms.js', 'public/js/statics')
   .sass('resources/sass/app.scss', 'public/css');
