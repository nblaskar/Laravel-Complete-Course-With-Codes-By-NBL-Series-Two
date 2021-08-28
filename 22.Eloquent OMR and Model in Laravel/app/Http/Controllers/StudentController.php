<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// import Model Class
use App\Models\Student;

class StudentController extends Controller
{
    public function showData()
    {
        // ##### Retriving Data #####

        // take empty array so that no error comes
        $students = [];
        // 1)all() Method
        // ->To Rertrive all data by model and pass into view
        // $students=Student::all();

        // 2)Binding Queries to fetch the datas
        // it is same as Query Builder
        // $students = Student::where('city', 'delhi')->orderBy('name')->get();
        
        // 3)chunk() Method
        // ->To Fetch Data By Chunking Result Process
        // Student::chunk(2, function($student){
        //     echo 'Chunk of Data <br>';
        //     foreach ($student as $stu) {
        //         echo $stu->id;
        //         echo $stu->name;
        //         echo '<br>';
        //     }
        // });

        // 4)find() Method
        // ->To Retrieve A Data through Model By the Primary Key
        // $students = Student::find(2);


        // 5)where() and first() query with Model
        // $students = Student::where('city','delhi')->first();

        // 6)firstWhere() Method
        // ->The Alternative of where()->first() query with Model
        // $students = Student::firstWhere('city','delhi');


        // 7)firstOr() Method
        // ->To get where()->first() Data else execute a function to perform a task
        // $students = Student::where('marks','=',100)->firstOr(function(){
        //     echo "first not found so function executed";
        // });

        // 8)firstOrCreate() Method
        // ->To retrieve first matching data else create given data
        // $students = Student::firstOrCreate(
        //     ['name'=>'dell'],
        //     ['email'=>'dell@gmail.com', 'city'=>'Delhare', 'marks'=>75]
        // );
        // // Note:- For this you should enable fillable property inside model

        // 9)firstOrNow() Method
        // ->To Retrieve first matching data or return oly instance without saving in database
        // $students = Student::firstOrNew(
        //     ['name'=>'Hp'],
        //     ['email'=>'hp@gmail.com', 'city'=>'Hyper', 'marks'=>95]
        // );
        // // Note:- For this you should enable fillable property inside model
        // To Save this new Created Instance by calling save() method
        // $students->save();

        // 10)Use of Aggregate Methods like count(), min(), max(), avg()
        // $students=Student::where('city','delhi')->avg('marks');

        // ##### Inserting Data #####

        // 11)Insert New Records by Model Objects
        // $student= new Student;
        // $student->name='Jack';
        // $student->email='Jack@gmail.com';
        // $student->city='Bangalore';
        // $student->marks=88;
        // $student->save();

        // 12)create() Method 
        // ->To Insert New Records by create() Method
        // $students=Student::create([
        //     'name'=>'Mak',
        //     'email'=>'mak@gmail.com',
        //     'city'=>'Hyderabad',
        //     'marks'=>87,
        // ]);

        // ##### Updating Data #####

        // 13)Update Data by Model Object
        // $student=Student::find(8);
        // $student->name='Kunal';
        // $student->email='kunal@gmail.com';
        // $student->city='Guwahati';
        // $student->marks=95;
        // $student->save();
        
        // 14)update() Method
        // ->To Update Multimple data at a time
        // Student::where('city','Delhi')->update(['marks'=>100]);

        // 15)updateOrCreate() Method
        // ->To Update the targeted data otherwise create a new data
        // $students=Student::updateOrCreate(
        //     ['name'=>'Sachin'],
        //     ['email'=>'sachin@gmail.com', 'city'=>'Lahore','marks'=>80],
        // );

        // ##### Deleting Data #####

        // 16)delete() Method
        // ->To Delete a Data By Model Object Instance
        // $student=Student::find(9);
        // $student->delete();

        // 17)destroy() Method
        // ->To Delete directly by primary key
        // $students=Student::destroy(8);
        // echo "<script>alert($students);</script>";


        // 18)Deleting Data Using Queries
        // $students=Student::where('city', 'Delhi')->delete();
        // echo "<script>alert($students);</script>";

        // 19)Deleting Data Using Queries
        $student=Student::truncate();




        // To Retrive all data for test
        $students=Student::all();
        return view('welcome', ['students'=>$students]);
    }
}
