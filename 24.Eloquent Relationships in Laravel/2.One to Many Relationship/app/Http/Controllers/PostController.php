<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Import Model Class
use App\Models\Post;
use App\Models\Author;

class PostController extends Controller
{
      // Insert Data into Post Table
      public function add_post_data($id){
        // Create Data
        $post = new Post();
        $post->title = 'Title 3';
        $post->Pcat = 'NodeJS';
        // Target the Passing Author ID
        $author=Author::find($id);
        // Now Save
        $author->post()->save($post);
    }

    // Show Post data Based on Author ID For One to Many Relation
    public function show_post_data($id){
        $post = Author::find($id)->post;
        return $post;
    }
}
