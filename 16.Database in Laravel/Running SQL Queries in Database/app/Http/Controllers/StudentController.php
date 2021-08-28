<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import DB Class
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showData()
    {

        // ############ 1)Select Query##############
        // (a)Select() Method
        // $students=DB::select('select * from student');


        // (b)Select() Method with where clouse
        // single data By id
        // $students=DB::select('select * from student where id=?',[1]);
        // OR
        // Multiple Data By City
        // $students=DB::select('select * from student where city=?',['bokaro']);


        // (c)Select() Method with where clouse of name binding
        // $students=DB::select('select * from student where id=:id',['id'=>3]);


        // #########2)Insert Query#############
        // (a)insert() Method
        // DB::insert('insert into student (name, email, city) values(?, ?, ?)',['jack', 'jack@gmail.com','Benglore']);

        
        // (b)insert() Method with Name Binding
        // DB::insert('insert into student (name, email, city) values(:nm, :email, :city)',['nm'=>'jakar', 'email'=> 'jakar@gmail.com','city'=>'mumbai']);

        // (c)insert() Method with Name Binding by Storing in a variable
        // $name='kamal';
        // $email="kamal@gmail.com";
        // $city='Silchar';
        // DB::insert('insert into student (name, email, city) values(:name, :email, :city)',['name'=>$name, 'email'=> $email,'city'=>$city]);

        // ############ 3)Update Query##############
        // a)update() Method
        // DB::update('update student set city = ? where id = ?', ['New Delhi', 5]);


        // b)update() Method with Name Binding
        // $affected_rows=DB::update('update student set city = :city where id = :id', ['city'=>'Hyderabad','id'=> 5]);
        // echo "<script>alert('$affected_rows')</script>";


        // ############ 4)Delete Query##############
        // a)delete() Method
        // DB::delete('delete from student where id = ?', [7]);


        // a)delete() Method with Name Binding
        // DB::delete('delete from student where id = :id', ['id'=>6]);


        // ############ 5)Unprepared Query##############
        // Example-1
        //    DB::unprepared('update student set city = 1233 where id= 5');


        // Example-2       
        // DB::unprepared('delete from student where id=5');


         // ############ 6)Transaction Database Query##############
         DB::transaction(function () {
             DB::update('update student set city = ? where id = ?', ['Guwahati', 4]);
             DB::insert('insert into student (name, email, city) values(:nm, :email, :city)',['nm'=>'Dinesh', 'email'=> 'dinesh@gmail.com','city'=>'Assam']);
         });


        // Return view by passing retrieved data
        // To view All Data For Test
        $students=DB::select('select * from student');
        return view('student', ['students'=>$students]);
    }
}