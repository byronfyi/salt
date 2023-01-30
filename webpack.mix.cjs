let mix = require('laravel-mix');

mix.js('main.js', 'dist')
    .sass('style.scss', 'style.css')
    .setPublicPath('dist');
