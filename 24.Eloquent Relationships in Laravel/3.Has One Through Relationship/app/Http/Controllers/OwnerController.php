<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Classes
use App\Models\Owner;
use App\Models\Car;
use App\Models\Mechanic;

class OwnerController extends Controller
{
    //Insert Data Into Owner Table Through Car ID
    public function add_owner($id){
        $car = Car::find($id);
        $owner=new Owner();
        $owner->name = 'Sonam';
        $car->owner()->save($owner);
    }

    // Get Owner Data Based on Mechanic ID By One To One Relation
    // public function show_owner($id){
    //     $owner = Mechanic::find($id)->car->owner;
    //     return $owner;
    // }

    // Get Owner Data Based on Mechanic ID By Has One Through Relation
    public function show_owner($id){
        $owner = Mechanic::find($id)->owner;
        return $owner;
    }

}
