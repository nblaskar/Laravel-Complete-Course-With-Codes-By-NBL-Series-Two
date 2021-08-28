<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        // 1)To Return a Simple response
        // return "Hello";

        // 2)To Return response by response() method
        // return response("Hello");

        // 3)To Return response with status code
        // return response("Hello", 200);

        // 4)To Return response with status code and header
        // return response("Hello", 200)->header('content-type','text/plain');

        // 5)To Return response with Cookie to set a Cookie
        // return response("Hello", 200)->cookie('name', 'Sonam', 5);

        // 6)To Return response with Cookie Expiring
        // return response("Hello", 200)->withoutCookie('name');

        // 7)To Return Simple view
        // return view('welcome');

        // 8)To Return View As a Response
        // return response()->view('welcome');

        // 9)To Return View As Response with some extra information
        // return response()->view('welcome')->header('content-Type', 'text/html');

        // 10)To Return Json Response
        return response()->json([
            'name'=>'Sonam',
            'email'=>'sonam@gmail.com',
        ]);

    }

}
