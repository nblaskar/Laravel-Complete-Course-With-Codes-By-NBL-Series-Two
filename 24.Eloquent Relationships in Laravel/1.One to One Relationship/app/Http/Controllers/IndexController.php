<?php

namespace App\Http\Controllers;
// Import Models
use App\Models\Customer;
use App\Models\Mobile;

use Illuminate\Http\Request;
// Single Controller to fetch data of both Customer and Mobile table
class IndexController extends Controller
{
    //
    public function index($id){
        //1)Based on Customer id in Customer Table
        $customer = Customer::find($id);
        // Find Customer Data
        var_dump($customer->name);
        var_dump($customer->email);
        // Find Mobile data
        var_dump($customer->mobile->model);
        var_dump("<br>");

        // 2)Find Customer Data Based on Mobile id in Customer Table
        $customer = Mobile::find($id)->customer;
        dd($customer);

        // 3)Find Mobile Data Based on Customer id in Mobile Table
        $mobile = Customer::find($id)->mobile;
        dd($mobile);
    }
}
