<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // Set One to Many Relation Between Project and Language
    public function language(){
        return $this->hasMany(Language::class);
    }
    
    // OR

    // Set Has Many Through Relation Between Project and Deployment
    public function deployment(){
        return $this->hasManyThrough(Deployment::class, Language::class);
    }
}
