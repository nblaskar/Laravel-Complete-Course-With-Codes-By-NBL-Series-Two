<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Controller Returning Views with Parameter
    function show($name){
        return view('aboutme',['nm'=>$name]);
    }

}
