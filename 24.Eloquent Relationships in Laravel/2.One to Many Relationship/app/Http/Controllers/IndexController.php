<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Import Model Class
use App\Models\Author;
use App\Models\Post;

// Single Controller to Fetch Data of Both Author and Mobile Table
class IndexController extends Controller
{
    //
    public function index($id){
        // 1)Based on Author Id in Author Table
        $author=Author::find($id);
        // View All Data of Author
        // var_dump($author);

        // View particular data of Author 
        // var_dump($author->username);
        // var_dump($author->password);

        // View Posts Data Based on Author Id
        // dd($author->post);
        // foreach ($author->post as $post) {
        //     echo $post->title;
        //     echo $post->Pcat;
        //     echo "<br>";
        // }

        // 2)Based on Post Id in Post Table
        // $post=Post::find($id);
        // dd($post->author);
    }
}
