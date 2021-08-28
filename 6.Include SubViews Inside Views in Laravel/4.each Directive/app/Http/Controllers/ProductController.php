<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Controller Function
    function show()
    {       
        $students=['Rahul','Sonam','Sumit','Firdaus'];
        $empty_stdnt=[];
        return view('product',['students'=>$students,'es'=>$empty_stdnt]);
    }
}
