<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Model Class
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    // Insert Data into Author Table
    public function add_author_data(){
        $author = new Author();
        $author->username = 'Kunal';
        $author->password = 'kunal12';
        $author->save();
    }
    // Show Author data Based on Post ID For Inverse One To Many Relation
    public function show_author_data($id){
        $author = Post::find($id)->author;
        return $author;
    }    
}
