<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Function to View All Posts Datas in Dashboard Section
    public function show_post(Request $request){
        // Show All Datas
        $posts = Post::all();
        return view('dashboard', ['posts'=>$posts]);

        // Show Only Loged in User's created Datas
        // $userid=$request->user()->id;
        // $posts = Post::where('user_id',$userid)->get();
        // return view('dashboard', ['posts'=>$posts]);
    }
}
