<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Import Model Class
use App\Models\Student;

class StudentController extends Controller
{
    public function show_data(){
        // $students=Student::Paginate(2);
        // $students=Student::where('city','Mumbai')->Paginate(2);
        $students=Student::SimplePaginate(2);
        return view('home',['students'=>$students]);
    }

}
