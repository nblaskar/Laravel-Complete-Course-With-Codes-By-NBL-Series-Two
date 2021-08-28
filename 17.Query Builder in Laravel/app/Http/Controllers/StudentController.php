<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import DB Class
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showData()
    {

        //###### 1)Retrieve All Rows from A Table #######
        // $students=DB::table('student')->get();


        // ###### 2)Retrieving Single Row/Column From a Table ######
        // a)first() Method
        // $students=DB::table('student')->first();

        // b)first() Method with where clause
        // $students=DB::table('student')->where('city','kolkata')->first();

        // c)value() Method with where clause to get perticular value from a row
        // $students=DB::table('student')->where('city','kolkata')->value('email');
       
        // d)find() Method to get perticular row by id
        // $students=DB::table('student')->find(3);

        // ###### 3)Retrieving a List of Column Values ######
        // a)pluck() Method
        // $students = DB::table('student')->pluck('email');

        // b)pluck() Method with key value feature
        // $students = DB::table('student')->pluck('name','marks' );
        // dd($students);

        // ###### 4)Chunking Results ######
        // DB::table('student')->orderBy('id')->chunk(2, function($students){
        //     echo 'Chunk of Data <br>';
        //     foreach($students as $stu){
        //         echo $stu->name;
        //         echo '<br>';
        //     }
        //     // return false; //To Run Chunk process once
        // });

        // ###### 5)Aggregate Methods ######
        // a)count() Method
        // $students=DB::table('student')->count();

        // b)max() Method
        // $students=DB::table('student')->max('marks');
        
        // c)min() Method
        // $students=DB::table('student')->min('marks');

        // d)sum() Method
        // $students=DB::table('student')->sum('marks');

        // e)avg() Method
        // $students=DB::table('student')->avg('marks');


        // ###### 6)Determining If Records Exist Or Not ######
        // a)exists() Method
        // if(DB::table('student')->where('id','2')->exists()){
        //     $students="Yes! id 2 is exists";
        // }

        // b)doesntExist() Method
        // if(DB::table('student')->where('id','21')->doesntExist()){
        //     $students="Yes! id 21 is Not Exists";
        // }


        // ###### 7) Select() Methods ######
        // a)select() Method to get perticular Colums Data
        // $students=DB::table('student')->select('name','email')->get();


        // ###### 8) Distinct() Methods ######
        // a)distinct() Method to get distinct results
        // $students=DB::table('student')->distinct()->get();


        // ###### 9) List of All Where Method to fetch Data by Where Clause ######
        // a)where() Method
        // i)Process-1
        // $students=DB::table('student')->where('id', 4)->get();
        // OR

        // ii)Process-2
        // $students=DB::table('student')->where('id', '>', 2)->get();
        // OR

        // iii)Process-3
        // $students=DB::table('student')->where('name', 'like', 'roh%')->get();

        // b)orWhere() Method
        // $students=DB::table('student')->where('id', 4)->orWhere('name', '=', 'rahul')->get();

        // c)orWhereBetween() Method
        // $students=DB::table('student')
        // ->whereBetween('marks', [10,50])
        // ->orWhereBetween('id', [2,3])
        // ->get();


         // d)whereNotBetween() Method
         // e)orWhereNotBetween() Method

         // f)whereIn() Method
        //  $students=DB::table('student')
        //  ->whereIn('marks', [10,50, 90])
        //  ->get();
 
         // g)orWhereIn() Method
        //  $students=DB::table('student')
        //  ->whereIn('marks', [10,50, 90])
        //  ->orWhereIn('id', [3,4,5])
        //  ->get();

        // h)whereNotIn() Method
        // i)orWhereNotIn() Method
        // j)whereNull() Method
        // k)orWhereNull() Method
        // l)whereNotNull() Method
        // m)orWhereNotNull() Method

 
         // n)whereDate() Method
        //  $students = DB::table('student')
        //  ->whereDate('pass_date', '2021-06-18')
        //  ->get();

        // o)whereMonth() Method
        // p)whereDay() Method
        // q)whereYear() Method
        // r)whereTime() Method
        // s)whereColumn() Method
        // t)orWhereColumn() Method

         
 
        // ###### 10) List of All Ordering Methods to fetch data by Orders ######

            
        // a)orderBy() Method
        //  $students = DB::table('student')
        //  ->orderBy('marks', 'desc')
        //  ->get();

        // b)latest() Method  

        // c)oldest() Method
        // $students = DB::table('student')
        // ->oldest('marks')
        // ->first();


        // d)inRandomOrder() Method
        // $students = DB::table('student')
        // ->inRandomOrder()
        // ->first();


        // e)groupBy() and having() Method
        // $students = DB::table('student')
        // ->groupBy('marks')
        // ->having('marks', '>', 50)
        // ->get();
        // it will not work if you do not stop strict mode inside database configuration



        // f)take() Method
        // $students = DB::table('student')
        // ->take(3)
        // ->get();

        // g)skip() and take() Method
        // $students = DB::table('student')
        // ->skip(2)
        // ->take(4)
        // ->get();
        
        // h)limit() Method
        // $students = DB::table('student')
        // ->limit(3)
        // ->get();

        // i)limit() and offset() Method
        // $students = DB::table('student')
        // ->offset(2)
        // ->limit(4)
        // ->get();
        

        // ###### 11) Insertion of Data in Database ######
        // a)insert() Method
        // i)Insert Single Record
        // DB::table('student')->insert([
        //     'name'=>'Jack',
        //     'email'=>'jack@gmail.com',
        //     'city'=>'Ahmedabad',
        //     'marks'=>85,
        //     'pass_date'=>'2021-05-25'
        // ]);

        // ii)Insert Multiple Record
        // DB::table('student')->insert([
        //     ['name'=>'Marya',
        //     'email'=>'marya@gmail.com',
        //     'city'=>'Guwahati',
        //     'marks'=>85,
        //     'pass_date'=>'2021-05-25'],

        //     ['name'=>'Mack',
        //     'email'=>'mack@gmail.com',
        //     'city'=>'London',
        //     'marks'=>75,
        //     'pass_date'=>'2021-04-15'],       
        // ]);


        // b)insertOrIgnore() Method
        // DB::table('student')->insertOrIgnore([
        //     'id'=>1,
        //     'name'=>'jack',
        //     'email'=>'jack@gmail.com',
        //     'city'=>'Ahmedabad',
        //     'marks'=>85,
        //     'pass_date'=>'2021-05-25'
        // ]);


        // c)insertGetId() Method
    //     $id=DB::table('student')->insertGetId([
    //         'name'=>'Tom',
    //         'email'=>'tom@gmail.com',
    //         'city'=>'Amingaow',
    //         'marks'=>85,
    //         'pass_date'=>'2021-02-25'
    //     ]);

    //    echo "<script>alert($id);</script>";

    
    
    
    
    // ###### 12) Updation of Data in Database ######
    // a)update() Method
    //     $affected_rows=DB::table('student')->where('id', 8)->update([
    //         'name'=>'Rock',
    //         'email'=>'rock@gmail.com',
    //         'city'=>'Lahore',
    //         'marks'=>86,
    //         'pass_date'=>'2021-03-25'
    //     ]);

    //    echo "<script>alert($affected_rows);</script>";

    // b)updateOrInsert() Method
    //     $affected_rows=DB::table('student')->updateOrInsert(
    //         ['name'=>'mack1'], //if this data present then will update else will insert
    //         ['email'=>'mack1@gmail.com',
    //         'city'=>'Lahory',
    //         'marks'=>87,
    //         'pass_date'=>'2021-03-25']
    //     );
    //    echo "<script>alert($affected_rows);</script>";


    // ###### 13) Deletion of Data in Database ######
    // a)delete() Method
    // $affected_rows=DB::table('student')->where('id',9)->delete();
    // echo "<script>alert($affected_rows);</script>";

    // b)truncate() Method
    // DB::table('student')->truncate();

            






      





        // Return the Retrieved Data of Database into View
        // To view All Data For Test
        $students=DB::table('student')->get();
        return view('student', ['students'=>$students]);
    }
}