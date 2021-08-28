<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Controller Returning String Without Parameter
    // function show(){
    //     return "Hello Controller";
    // }

    //Controller Returning String With Parameter
    function show($name){
        return "Hello Controller " . $name;
    }
}
