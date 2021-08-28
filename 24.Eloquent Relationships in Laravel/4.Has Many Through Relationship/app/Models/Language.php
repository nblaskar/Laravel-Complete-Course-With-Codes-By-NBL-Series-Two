<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    // Set One to Many Relation Between Language and Deployment
    public function deployment(){
        return $this->hasMany(Deployment::class);
    }
}
