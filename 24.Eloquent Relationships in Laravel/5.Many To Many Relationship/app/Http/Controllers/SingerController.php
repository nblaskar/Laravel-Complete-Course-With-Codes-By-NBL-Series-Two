<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Classes
use App\Models\Song;
use App\Models\Singer;

class SingerController extends Controller
{
    //Insert Data into Song Table
    public function add_singer(){
        $singer=new Singer();
        $singer->name='Sonam';
        $singer->save();

        // Insert data into intermediator table as
        $songids=[3,1]; // Song id can be receive by route id as earlier
        $singer->song()->attach($songids);
    }

    
    // Get Singer Data Based on Song Id for Inverse Many to Many Relation of Singer and Song
    public function show_singer_for_song($id){
        $singer = Song::find($id)->singer;
        return $singer;
    }
}
