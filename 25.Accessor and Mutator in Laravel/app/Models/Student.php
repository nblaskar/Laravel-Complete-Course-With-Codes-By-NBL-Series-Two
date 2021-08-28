<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // To Stop the timestamps
    public $timestamps=false;

    // Accessor 
    public function getNameAttribute($value){
        // To Capitalize name column data During View
        // return ucfirst($value);

        // To Add Prefix Data on name column during View
        return "Mr. ".$value;
    }

    // Mutator
    public function setCityAttribute($value){
        // To Capitalize City column data During Insertion
        $result = ucfirst($value);
        // To Add Extra data on city column During insertion
        $this->attributes['city'] = $result.', India';
    }
} 
