const mix = require('laravel-mix');

// Mixing Setup for Files Inside Resources Folder
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/myscript.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css',[])
    .postCss('resources/css/style.css', 'public/css');
