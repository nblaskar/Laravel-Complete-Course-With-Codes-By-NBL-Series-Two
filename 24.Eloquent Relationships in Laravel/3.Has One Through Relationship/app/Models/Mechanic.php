<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    // Set One to One Relation Between Mechanic And Car
    public function car(){
        return $this->hasOne(Car::class);
    }

    // Set Has One Through Relation Between Mechanic And Owner Through Car
    public function owner(){
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
