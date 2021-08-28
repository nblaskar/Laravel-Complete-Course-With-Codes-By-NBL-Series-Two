<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    // Set Many to Many Relation Between Singer And Song by SingerSong Intermadiator Table
    public function song(){
        return $this->belongsToMany(Song::class, 'singer_songs');
    }
}
