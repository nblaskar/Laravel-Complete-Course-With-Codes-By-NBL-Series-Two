<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    // Set Inverse Many to Many Relation Between Singer And Song by SingerSong Intermadiator Table
    public function singer(){
        return $this->belongsToMany(Singer::class, 'singer_songs');
    }
}
