<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Controller to view data in home page
    public function show_all_post(){
        $allPosts = Post::simplePaginate(3);
        return view('home', ['allPosts'=>$allPosts]);
    }
}
