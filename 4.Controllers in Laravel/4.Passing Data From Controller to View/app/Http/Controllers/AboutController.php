<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Passing Data From Controller to View
    function show(){
        $name="Laravel";
        return view('aboutme',['nm'=>$name]);
    }

}
