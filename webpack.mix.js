const mix = require('laravel-mix');

mix.babel('resources/js/app.js', 'public/js/app.js')
    .version();
   
mix .sass('resources/css/app.scss', 'public/css')
    .version();

mix.webpackConfig({
    output: {
        hashFunction: "md5"
    },
    stats: {
        children: true,
    }
});

mix.options({
    terser: {
        extractComments: false,
    }
});
