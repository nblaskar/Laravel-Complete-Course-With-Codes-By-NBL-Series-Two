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
    // Here we will write all of our form accessing codes
    function signup(Request $req){
        // 1)Show A Message after Form Submit
        // print_r('This is Post method');

            // OR


        // 2)Show All Form Request Datas
        // dd($req);

            // OR


        // 3)Accessing All Input Data
        // print_r($req->all());


            // OR


        // 4)Accessing All Input Data as an associative array
        // print_r($req->input());

            // OR


        // 5)Accessing An input Data
        // print_r($req->input('name'));
        // print_r($req->input('email'));
        // print_r($req->input('password'));

            // OR

        // 6)Accessing Input Datas Via Dynamic Properties
        // print_r($req->name);
        // print_r($req->email);
        // print_r($req->password);

            // OR
        
        // 7)Accessing a Portion of Input Data
        // only():-it allow to access only the given fields data
        // Process-1        
        // print_r($req->only(['email', 'password']));
        // print_r($req->only('email', 'password'));
        // OR
        // Process-2
        // excepr():-it allow to access all input datas except the given name field
        // print_r($req->except(['email', 'password']));
        // print_r($req->except('email', 'password'));


            // OR


        // 8)Check and then Access Single Datas
        // if($req->has('name')){
        //     print_r($req->name);
        // }

            // OR


        // 9)Check and then Access Multiple Datas
        // has()-> it check all given fields are present or not
        // if($req->has(['name', 'email'])){
        //     print_r('inside has()');
        //     print_r($req->name);
        //     print_r($req->email);
        // }
    
            // OR


        // 10)Check any given filed is present or not
        // hasAny()-> it check any given fields is present or not
        // if($req->hasAny(['name', 'email'])){
        //     print_r('Inside hasAny()');
        //     print_r($req->name);
        //     print_r($req->email);
        // }

            // OR
            

        // 11)Check the given fields has any values or not
        // filled()->it allow to check the given fields has any values or not
        // if($req->filled('name')){
        //     print_r('inside filled()');
        //     print_r($req->name);
        // }
 
            // OR


        // 12)Check the Particullar missing filed
        // missing()->it allow to identify the missing fields
        // if($req->missing('username')){
        //     print_r('Yes! username is missing');
        // }


            // OR


        // 13)Check to when particular filed is present then run a function
        // whenHas()->it allow to check the condition that when perticular filed is present
    //    $req->whenHas('name', function(){
    //        print_r(' whenHas() Condition is True');
    //    });


            // OR


        // 14)Chect to when particular filed has values then run a function
        // whenFilled()->it allow to check the condition that when perticular filed has values
    //    $req->whenFilled('name', function(){
    //        print_r('Yes! Given field has value');
    //    });

            // OR

        // 15)Store and access all the datas from flash session
        // old()->it takes the saved data from Flash session by filed names
        // flash()->it stores all incomming request datas into flash session temporarily. After refresh it will be empty
        // it is bassically used to show any message after operation comlete
        // $req->flash();
        // print_r($req->old('name'));
        // print_r($req->old('email'));
        // print_r($req->old('password'));

            // OR

        // 16)Store some particular datas on flash session and access them
        // old()->it takes the saved data from Flash session by filed names
        // flashOnly()->it stores the given particular incomming request datas into flash session temporarily
        // $req->flashOnly(['name', 'email']);
        // print_r($req->old('name'));
        // print_r($req->old('email'));
        // print_r($req->old('password')); // it print nothing

            // OR


        // 17)Store all except some datas on flash session and access them
        // old()->it takes the saved data from Flash session by filed names
        // flashExcept()->it stores all except given named incomming request datas into flash session temporarily
        // $req->flashExcept('password');
        // print_r($req->old('name'));
        // print_r($req->old('email'));
        // print_r($req->old('password')); // it print nothing

            // OR


        // 18)Flash and redirect at a time
        // withInput()->is allow to flash all the forms data of current page into redirecled page. but both page must have same fileds and names
        // return redirect('olddata')->withInput();
        // For name Routes
        // return redirect()->route('old')->withInput();

            // OR


        // 19)Flash all except a perticular filed and then redirect at a time
        // withInput()->is allow to flash all the forms data of current page into redirecled page. but both page must have same fileds and names
        // except():- it remove the given filed from flashig
        // return redirect()->route('old')->withInput(
        //     $req->except('password')
        // );

            // OR


        // 20)Presearve the forms fields Data after also submit
        // $req->flash();
        // return view('registration');
        // now assign old values on that page by old() method





        // Stop it when you use redirection
        return view('registration');
 



    }
}
