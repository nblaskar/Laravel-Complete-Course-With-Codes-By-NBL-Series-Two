<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
       // Set One to One Relation Between Car and Owner
       public function owner(){
        return $this->hasOne(owner::class);
    }
}
