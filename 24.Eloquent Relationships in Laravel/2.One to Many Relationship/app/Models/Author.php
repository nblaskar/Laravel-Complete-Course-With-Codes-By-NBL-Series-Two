<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    // To set the One to Many Relationship from Author to Mobile Table
    public function post(){ //Function Name Shold Be Targeted Model Name
        // Relation From Author to Post Table
        return $this->hasMany(Post::class, 'author_id');
    }
} 
