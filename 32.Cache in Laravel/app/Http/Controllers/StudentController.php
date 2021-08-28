<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    //
    public function index(){

        // 1)Storing Items in Cache
        // // a)By Cache Facades
        // Cache::put('email','admin@gmail.com', $seconds=10);
        // Cache::put('roll',101);
        // Cache::put('state', 'Jharkhand', now()->addMinutes(1));
        
        // // ->Store item if data not present on that key
        // Cache::remember('city', 5, function () {
        //     return 'Silchar';
        // });
        // // Note:If city key is empty then it will store the returned data on that key
        
        // // ->Storing Item if not Present
        // // dd(Cache::add('total', 10, 5));
        
        // // ->Storing Item in Cache Forever
        // Cache::forever('product', 'Laptop');

        // OR

        // b)By Global Cache Helper
        // cache(['email'=>'admin@gm,ail.com'], $seconds=10);
        // cache(['roll'=>101]);
        // cache(['state'=>'Jharkhand'], now()->addMinutes(1));
        
        // // ->Store item if data not present on that key
        // cache()->remember('city', 5, function () {
        //     return 'Silchar';
        // });
        // Note:If city key is empty then it will store the returned data on that key
        
        // ->Storing Item if not Present
        // dd(cache()->add('total', 10, 5));
        
        // ->Storing Item in Cache Forever
        // cache()->forever('product', 'Laptop');
        
        
        //Test Output
        // dd(Cache::get('email'));
        // dd(Cache::get('roll'));
        // dd(Cache::get('state'));
        // dd(Cache::get('city'));
        // dd(Cache::get('product'));


        // 2)Retrieving Items From Cache
        // // a)By Cache Facades
        // $product=Cache::get('product');
        // // ->Use Default Value
        // $quantity=Cache::get('quantity',12);
        // // ->Use Closure Function to retrieve data and assign if no data
        // $cart=Cache::get('cart', function(){
        //     return 2;
        // });

        // OR

        // b)By Global Cache Helper
        // $product=cache()->get('product');
        // // ->Use Default Value
        // $quantity=cache()->get('quantity',12);
        // // ->Use Closure Function to retrieve data and assign if no data
        // $cart=cache()->get('cart', function(){
        //     return 2;
        // });
        

        // 3)Determine Item Exists In Cache or Not
        // a)By Cache Facades
        // if(Cache::has('product')){
        //     $status="Yes";
        // }

        // OR

        // b)By Global Cache Helper
        // if(cache()->has('product')){
        //     $status="Yes";
        // }

     
        // 4)Removing Items From Cache
        // // a)By Cache Facades
        // // ->process-1
        // Cache::forget('product');
        // // ->Process-2
        // Cache::put('product','laptop', 0);
        // // ->Process-3
        // Cache::put('product','laptop', -5);
        // // Output
        // dd(Cache::get('product'));

        // OR

        // b)By Global Cache Helper
        // // ->process-1
        // cache()->forget('product');
        // // ->Process-2
        // cache()->put('product','laptop', 0);
        // // ->Process-3
        // cache()->put('product','laptop', -5);
        // // Output
        // dd(cache()->get('product'));

        // 5)Clear All Cache
        // a)By Cache Facades
        // Cache::flush();

        // OR

        // b)By Global Cache Helper
        // cache()->flush();

        // 6)Retrieving And Storing Items
        // // a)By Cache Facades
        // $value=Cache::rememberForever('shirt', function () {
        //     return 18;
        // });
        // // Note:if shirt key has no value then it will store the return value
        // dd($value); 
        
        // OR

        // b)By Global Cache Helper
        // $value=cache()->rememberForever('shirt', function () {
        //     return 18;
        // });
        // // Note:if shirt key has no value then it will store the return value
        // dd($value);       

        // 7)Retrieving And Deleting Items
        // a)By Cache Facades
        // $value=Cache::pull('product');
        // // Note:it retrieved that value and then delete that value
        // dd($value);  

        // OR

        // b)By Global Cache Helper
        $value=cache()->pull('product');
        // Note:it retrieved that value and then delete that value
        dd($value);  

        




        $data=['product'=>$product, 'quantity'=>$quantity, 'cart'=>$cart, 'status'=>$status];
        return view('student',$data);



    }
}
