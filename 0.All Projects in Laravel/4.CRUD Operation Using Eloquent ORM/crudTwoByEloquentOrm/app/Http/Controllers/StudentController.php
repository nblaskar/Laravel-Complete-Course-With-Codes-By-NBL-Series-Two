<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// import the Model Class
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retrieve all data and pass it to home page view
        $students = Student::all();
        return view('home', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //Inserting Datas
        $student= new Student;
        $student->name = $req->name;
        $student->city = $req->city;
        $student->marks = $req->marks;
        $student->save();
        // After insert redirect to home page
        return redirect(route('index'))->with('status','Student Inserted !');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Retrieve data by id and view with edit form
        $student=Student::find($id);
        return view('editform',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update data through edit form as 
        $student=Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        // After update redirect to home page
        return redirect(route('index'))->with('status','Student Updated !');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // To delete Data by id
        Student::destroy($id);
        // After insert redirect to home page
        return redirect(route('index'))->with('status','Student Deleted !');

    }
}
