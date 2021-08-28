<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Function in Controller
    function show()
    {   
        // Returning View By Passing Some Data
        // For Output-1
            // ->Pass match Data
        // $data="Nur";

        // For Output-2
            // ->Pass 2nd Match Data
        // $data="Firdaus"; 

        // For Output-3
            // ->Pass Unmatch Data
        // $data="";

        // For Array Data
        $data=['Rahul','Sonam','Sumit','Firdaus'];

        // Empty Array
        // $data=[];
        
        return view('contact',['nm'=>$data]);
    }
}
