<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public  function index(Request $request){

        //1)Storing Session Data 
        // a)By Request Instance
        // $request->session()->put('name','Sonam');
        // $request->session()->put('city','Karnataka');
        // OR
        // b)By Global Request Helper
        // session(['name'=>'Rahul']);

        //2)Retrieving Session Data 
        // a)By Request Instance
        // $name=$request->session()->get('name');
        // // When session data is not present then it print nothing
        // $roll=$request->session()->get('roll');
        // //Use Default Value
        // $city=$request->session()->get('city','Bangalore');
        // // Use Closure Function as Default Value
        // $price=$request->session()->get('price', function(){
        //     return 102;
        // });
        // OR
        // b)By Global Request Helper
        $name=session('name');
        // When session data is not present then it print nothing
        $roll=session('roll');
        //Use Default Value
        $city=session('city','Bangalore');
        // Use Closure Function as Default Value
        $price=session('price', function(){
            return 102;
        });
    


        // 3)Retrieving All Session Data
        // a)By Request Instance
        // $alldata=$request->session()->all(); 
        
        // OR

        // b)By Global Request Helper
        $alldata=session()->all(); 

        // 4)Check if Item is Exists in Session or Not
        // if($request->session()->has('name')){
        //     $status='Yes';
        // }
        // Note: You can remove the $request to use as Global Request Helper

        // OR

        // 5)Check if Item is Present in Session or Not
        // if($request->session()->exists('name')){
        //     $status='Yes';
        // }
         // Note: You can remove the $request to use as Global Request Helper
        
        // OR

        // 6)Check if Item is not Present in Session
        if($request->session()->missing('roll')){
            $status='Yes';
        }
         // Note: You can remove the $request to use as Global Request Helper
        
        // 7)Delete Single Session Data
        // echo($request->session()->get('name'));
        // $request->session()->forget('name');
        // echo($request->session()->get('name'));
         // Note: You can remove the $request to use as Global Request Helper
        
        // 8)Delete multiple Session Data
        // $request->session()->forget(['name','city']);
         // Note: You can remove the $request to use as Global Request Helper
        
        // 9)Delete All Session Data
        // $request->session()->flush();
         // Note: You can remove the $request to use as Global Request Helper

        // 10)Retrieving And then Deleting Session Item at a Time
        // $value=$request->session()->pull('name','default_data');
        // echo($value);
         // Note: You can remove the $request to use as Global Request Helper

        // 11)Flash Data
        $request->session()->flash('status','Task Successful');
        // Note: You can remove the $request to use as Global Request Helper

       
        $data=['name'=>$name, 'roll'=>$roll, 'city'=>$city, 'price'=>$price, 'alldata'=>$alldata, 'status'=>$status];  
        return view('welcome', $data);
    }
}
