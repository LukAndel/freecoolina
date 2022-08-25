require("dotenv").config();
const mix = require('laravel-mix');

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

if (!mix.inProduction()) {
    // development settings:
    //     add source maps
    mix.webpackConfig({
        devtool: "source-map",
    }).sourceMaps();
}

mix
    // don't rewrite URLs in CSS files
    .options({
        processCssUrls: false,
    })

    // open and serve with browsersync
    .browserSync({
        host: "test",
        port: 3000,
        proxy: {
            target: process.env.APP_URL, // don't forget to set APP_URL in .env
        },
    })

    // add versioning
    .version();

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');
mix.js("resources/js/blog.js", "public/js").react();
mix.sass("resources/css/admin.scss", "public/css");
mix.sass("resources/css/blog.scss", "public/css");
mix.sass("resources/css/datepicker/cdnjs.scss", "public/css/datepicker");
mix.sass("resources/css/datepicker/cdnjs2.scss", "public/css/datepicker");