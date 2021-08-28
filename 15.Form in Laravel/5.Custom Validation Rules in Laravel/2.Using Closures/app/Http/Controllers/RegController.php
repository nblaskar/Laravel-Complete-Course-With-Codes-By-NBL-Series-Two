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
        $validation=$req->validate([           
            'name'=>['required',

             // Apply Custom Rule Here as
            function($attribute, $value, $fail){
                if($value === 'Nur'){
                    $fail('The '.$attribute.' field should not be Nur');
                }
            }         
        ],

            'email'=>'required|min:15',
            'password'=>'required',
        ]);
        print_r('Form Validated');
        // $input = $req->except('_token');
        // OR
        
        // To return only validated Data as
        $input=$validation;

        return view('registration',['data'=>$input]);
    }
}
