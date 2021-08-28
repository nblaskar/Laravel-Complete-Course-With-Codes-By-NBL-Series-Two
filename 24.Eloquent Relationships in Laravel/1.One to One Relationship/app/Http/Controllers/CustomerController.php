<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// import Model Class
use App\Models\Customer;
use App\Models\Mobile;

class CustomerController extends Controller
{
    //Insert data into Customer Table and Mobile Table
    public function add_customer_mobile_data(){
        // Customer Data Inbsertion
        $customer = new Customer();
        $customer->name = 'Sumit';
        $customer->email = 'sumit@gmail.com';
        $customer->save();

        // Mobile Data Inbsertion
        $mobile = new Mobile();
        $mobile->model = 'LG102';
        $customer->mobile()->save($mobile);
    }

    // Show Mobile Data Based on Customer's id for Customer to Mobile Relation
    public function show_mobile_data($id){
        $mobile= Customer::find($id)->mobile;
        // return $mobile;
        return view('mobile', ['mobile'=>$mobile]);
    }  
}
