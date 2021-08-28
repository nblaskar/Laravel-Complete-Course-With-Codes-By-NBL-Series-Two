<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import DB Class
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showData()
    {
        // 1)Retrieve Data With Pagination
        // $students=DB::table('student')->paginate(3);

        // 2)Customizing Pagination URLs
        // $students->withPath('/cs/students');

        // 3)Retrieve Data With SimplePagination
        $students=DB::table('student')->simplePaginate(3);



        return view('student', ['students'=>$students]);
    }
}