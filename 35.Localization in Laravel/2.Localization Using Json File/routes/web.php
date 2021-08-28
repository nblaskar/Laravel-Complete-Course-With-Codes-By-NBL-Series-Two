
<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// Route To View Home Page
Route::get('/', function () {
    return view('home');
});

// 3)To Change localization language with url parameter
Route::get('/{locale}', function ($locale) {
    // Set the Localization on run time
    App::setLocale($locale);
    return view('home');
});