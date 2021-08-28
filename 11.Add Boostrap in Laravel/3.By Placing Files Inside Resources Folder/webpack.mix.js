const mix = require('laravel-mix');


// Setup Mixing for Boostrap CSS and JS files
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css',)
    .postCss('resources/css/style.css', 'public/css',)
    .js('resources/js/myscript.js', 'public/js');
