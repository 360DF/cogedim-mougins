const mix = require('laravel-mix');

mix.options({
    postCss: [
        require('postcss-discard-comments')({
            removeAll: true
        })
    ],
    uglify: {
        uglifyOptions: {
            comments: false
        },
    }
});

mix.js(['resources/js/app.js'], 'public/js/app.js')
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/img/', 'public/img/')
   .sourceMaps();
   
if (mix.inProduction()) {
    mix.version();
}