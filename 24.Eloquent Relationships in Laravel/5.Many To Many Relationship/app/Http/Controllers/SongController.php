<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Classes
use App\Models\Song;
use App\Models\Singer;

class SongController extends Controller
{
    //Insert Data into Song Table
    public function add_song(){
        $song=new Song();
        $song->title='Dil to hai Dil';
        $song->save();
    }

    // Get Song Data Based on Singer Id for Many to Many Relation of Singer and Song
    public function show_song_for_singer($id){
        $song = Singer::find($id)->song;
        return $song;
    }
}
