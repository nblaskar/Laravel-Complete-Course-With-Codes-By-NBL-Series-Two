<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // To set the Inverse One to Many Relationship of Author to Mobile Table
    public function author(){ //Function Name Shold Be Targeted Model Name
        // Inverse Relation of Author to Post Table
        return $this->belongsTo(Author::class, 'author_id');
    }
}
