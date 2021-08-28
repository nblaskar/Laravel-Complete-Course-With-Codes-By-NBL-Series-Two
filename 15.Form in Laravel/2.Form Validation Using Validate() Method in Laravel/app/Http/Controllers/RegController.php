<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    // Controller Function to View Registration Page
    function showform(){
        return view('registration');
    }
    // Controller Function will Run after Form Submit
    function signup(Request $req){
        // 1)Single Rule
        // $validation=$req->validate([
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);


        // 2)Multiple Rules Specified as Array
        // $validation=$req->validate([
        //     'email'=>['required', 'min:15'],
        //     'password'=>['required'],
        // ]);


        // 3)Multiple Rule Specified using Single | delimited Sring
        $validation=$req->validate([
            'email'=>'required|min:15',
            'password'=>'required',
        ]);



        print_r('Form Validated');
        $input = $req->except('_token');
        return view('registration',['data'=>$input]);
    }
}
