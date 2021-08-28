<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import DB Facades
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch All Data From Database and pass to view
        $students=DB::table('students')->get();
        //Return View Home Page with retrieved data
        return view('home',['students'=>$students]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //Data Insert into table
        DB::table('students')->insert([
            'name'=>$req->name,
            'city'=>$req->city,
            'marks'=>$req->marks,
        ]);
        // After insert return to home page with flash message
        return redirect(route('index'))->with('status', 'Student Added Successfully !');
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
    // $id value Comes by Controller path
    public function edit($id)
    {
        //Edit Data By student id
        $student=DB::table('students')->find($id);

        // Return given id data to edit form
        return view('editform',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //Updating the data receive by edit
        DB::table('students')->where('id',$id)->update([
            'name'=>$req->name,
            'city'=>$req->city,
            'marks'=>$req->marks,
        ]);
        // After Update return to home page with flash message
        return redirect(route('index'))->with('status', 'Student Updation Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To Delete Data By id
        DB::table('students')->where('id',$id)->delete();
        // After delete redirect to index page with flash message
        return redirect(route('index'))->with('status', 'Deleted Successfully !');
    }
}
