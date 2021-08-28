<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// import Model Classes
use App\Models\Mobile;

class MobileController extends Controller
{
      // Show Customer Data Based on Mobile's id for Inverse Mobile to Customer Relation
      public function show_customer_data($id){
        $customer= Mobile::find($id)->customer;
        // return $customer;
        return view('customer', ['customer'=>$customer]);
    }
}
