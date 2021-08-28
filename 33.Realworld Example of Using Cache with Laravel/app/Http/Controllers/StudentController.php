<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{  
    //
    public function index(){
        // Improve performance
        // ->it first retrieve the data from database and store into cache for further access the data
        $students = Cache::rememberForever('students', function () {
            return Student::all();
        });
        return view('welcome', ['students'=>$students]);
    }
}
