<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View Post Creation Page
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Creating Post Data
        $user=$request->user();
        $post= new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        // Save Data Through User by One to Many Relation
        $user->post()->save($post);
        // After Save return to same post Page with flash message
        return redirect(route('post_index'))->with('status','Data inserted Successfully');
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
        //Return given id post to edit form
        $post=Post::find($id);
        return view('editpost',['post'=>$post]);
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
        //Update the data of Edit Form Page
        $post = Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        // After update return to dashboard Page with flash message
        return redirect(route('dashboard'))->with('status','Data updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Data by Id
        Post::destroy($id);
        // After Delete return to dashboard Page with flash message
        return redirect(route('dashboard'))->with('status','Data Deleted Successfully');

    }
}
