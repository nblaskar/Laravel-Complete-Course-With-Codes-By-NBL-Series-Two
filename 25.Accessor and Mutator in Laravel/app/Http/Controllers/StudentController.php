<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Import Model Class
use App\Models\Student;

class StudentController extends Controller
{
    // Insert Data into Student Table
    public function add_student(){
        $student=new Student();
        $student->name='rajib';
        $student->city='hyderabad';
        $student->save();
    }



    //Retrieve all data from database
    public function show(){
        return Student::all();
    }
}
