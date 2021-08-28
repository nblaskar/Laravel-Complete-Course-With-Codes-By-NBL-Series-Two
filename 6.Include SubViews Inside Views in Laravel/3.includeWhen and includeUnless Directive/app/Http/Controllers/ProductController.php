<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Controller Function
    function show()
    {
        $user='Admin';
        $userType1= $user == 'Admin' ? true: false;
        $userType2= $user == 'Guest' ? true: false;
        return view('product',['uT1'=>$userType1,'uT2'=>$userType2]);
    }
}
