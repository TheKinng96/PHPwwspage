let mix = require('laravel-mix');

mix.js('assets/js/index.js', 'dist/').sass('assets/css/source.scss', 'dist/').minify('dist/source.css');