<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Multiple Method Inside Controller
    function show1(){
        return view('aboutme');
    }
    function show2(){
        return view('aboutyou');
    }

}
