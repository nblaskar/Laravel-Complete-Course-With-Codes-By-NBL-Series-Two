<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Set Inverse of One to Many Relation Between User And Post Table
    public function user(){
        return $this->belongsTo(User::class);
    }
}
