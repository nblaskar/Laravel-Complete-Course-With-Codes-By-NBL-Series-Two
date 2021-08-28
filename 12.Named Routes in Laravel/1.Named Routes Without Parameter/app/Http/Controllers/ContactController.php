<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Controller Function returning Contact View
    function show(){
        return view('contact');
    }
}
