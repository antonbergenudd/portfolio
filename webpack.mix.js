const { mix } = require('laravel-mix');

const path = 'resources/assets/js/';

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

mix.sass('resources/assets/sass/ported-sass.scss', 'public/css');

mix.scripts([
    path + 'malarkey.min.js',
    path + 'smoothscroll.js',
    path + 'ported-js.js',
    path + 'ported-js-2.js',
    path + 'ported-js-3.js',
    path + 'animations.js',
    path + 'username.js',
], 'public/js/main.js').version();
