<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Controller Function
    function show()
    {   
        return view('product');
    }
}
