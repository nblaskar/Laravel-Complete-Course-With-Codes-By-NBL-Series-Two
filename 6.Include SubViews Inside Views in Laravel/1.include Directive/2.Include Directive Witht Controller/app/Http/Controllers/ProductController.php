<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Controller Function
    function show()
    {
        // Return View With passing Data
        $websitename='FlipKart';
        return view('product',['wn'=>$websitename]);
    }
}
