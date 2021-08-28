<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        //1)Redirect to a Specific Path
        return redirect('/about');

        //2)Redirect to a Name Route path
        // return redirect()->route('login');

        //3)Redirect to an External URL
        // return redirect()->away('https://nblaskar.live');
        // // Note: for this https::// should have to use

        //4)Redirect to a specific action of a controller
        // return redirect()->action([UserController::class,'submit']);
        

        //5)Redirect to a view with flash session data
        // return redirect('/profile')->with('status','Task Successfull');
        


    }

}
