<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $collection=collect([1,2,3,4,5,6,7,8,9]);
        // dd($collection);
        // Apply collection methods
        // 1)all():-it return all arrays represented by collection 
        // $data=$collection->all();

        // 2)avg():-it gives average items  vale
        // $data=$collection->avg();

        // 3)chunk():-it gives no of arrays containing 2 items
        // $data=$collection->chunk(2);

        // 4)reverse():-it reverse the items
        // $data=$collection->reverse();

        // 5)map():-it allow to traverse every item of the array
        // $data=$collection->map(function($item, $key){
        //     return $item + 2;
        // });

        $data=$collection->map(function($item, $key){
            return $item + 2;
        })->all();



        dd($data);

    }
}
