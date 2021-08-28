<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Controller Returning Views
    function show(){
        // return view('aboutme');
        return view('admin.profile');
    }

}
