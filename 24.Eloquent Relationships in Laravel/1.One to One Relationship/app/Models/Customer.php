<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // To set the One to One Relation From Customer To Mobile Table
    public function mobile() //Function name should be targeted model name
    {
        // Relation From Customer To Mobile Table
        return $this->hasOne(Mobile::class);
    }
}
