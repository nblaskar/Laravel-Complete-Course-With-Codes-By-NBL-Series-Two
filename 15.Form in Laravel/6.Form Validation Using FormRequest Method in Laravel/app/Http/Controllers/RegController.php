<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import RegistrationRequest Class
use App\Http\Requests\RegistrationRequest;

class RegController extends Controller
{
     // Controller Function to View Registration Page
     function showform(){
        return view('registration');
    }
    // Controller Function will Run after Form Submit
    function signup(RegistrationRequest $req){  
        $validate=$req->validated();  
        $input=$validate;
        return view('registration',['data'=>$input]);
    }
}
