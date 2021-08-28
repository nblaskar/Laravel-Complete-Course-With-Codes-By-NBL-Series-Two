<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // A) Get Information About Request
    // public function index(Request $request){
    //     // 1)To know all information about Request
    //     // dd($request);

    //     // 2)To know request path
    //     // dd($request->path());

    //     // 3)To know request url
    //     // dd($request->url());

    //     // 4)To know request full url 
    //     // dd($request->fullurl());

    //     // 5)To know request methods
    //     // dd($request->method());

    //     // 6)To check perticular request methods
    //     // if($request->isMethod('GET')){
    //     //     dd("Yes it is GET Method");
    //     // }
        
    //     // 7)To know all request headers
    //     // dd($request->header());
        
    //     // 8)To know Specific request header
    //     // dd($request->header('X-Header-Name'));
        
    //     // 9)To know Specific request header with default Value
    //     // dd($request->header('X-Header-Name', 'default'));
        
    //     // 10)To determine the existance of Specific request header 
    //     // if($request->header('X-Header-Name')){
    //     //     dd("Yes Header Present");
    //     // }
        
    //     // 11)To know request Tokens
    //     // dd($request->bearerToken());
        
    //     // 12)To know request ip
    //     // dd($request->ip());
        
    //     // 13)To know request Acceptable Content Type
    //     // dd($request->getAcceptableContentTypes());

    //     // 14)To Determine Specific Content Type Acceptance
    //     // if($request->accepts(['text/html', 'application/json'])){
    //     //     dd("Yes Accepted");
    //     // }

    //     // 15)To access all request query string
    //     // dd($request->query());
    //     // OP url->127.0.0.1:800/?name=nurbahar

    //     // 16)To access the Specific request query string
    //     // dd($request->query('name'));
    //     // OP url->127.0.0.1:800/?name=nurbahar

    //     // 17)To access the Specific request query string with default value
    //     dd($request->query('name', 'nurbahar'));
    //     // OP url->127.0.0.1:800/?name=nurbahar

    //     return view('welcome');
    // }

    //B) Receive Data from Route to Controller
    // public function index1(Request $request, $id){
    //     dd($id);
    //     return view('welcome');
    // }

    //C) To Check the Perticular Path
    // public function index2(Request $request){
    //     if($request->is('admin/*')){
    //         dd('Yes it is Admin Area');
    //     }else{
    //         dd('No its not Admin Area');
    //     }
    //     return view('welcome');
    // }

    //D) To Check the Perticular Name Route
    public function index3(Request $request){
        if($request->routeIs('admin.*')){
            dd('Yes it is Admin Route Area');
        }else{
            dd('No its not Admin Route Area');
        }
        return view('welcome');
    }
}
