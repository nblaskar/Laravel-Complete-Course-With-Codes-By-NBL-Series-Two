<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Rule Class
use App\Rules\UpperCase;

class RegController extends Controller
{
    // Controller Function to View Registration Page
    function showform(){
        return view('registration');
    }
    // Controller Function will Run after Form Submit
    function signup(Request $req){    
        $validation=$req->validate([
            // Apply Custom Rule Here as
            'name'=>['required' , new UpperCase],
            'email'=>'required|min:15',
            'password'=>'required',
        ]);
        print_r('Form Validated');
        $input = $req->except('_token');
        return view('registration',['data'=>$input]);
    }
    
}
