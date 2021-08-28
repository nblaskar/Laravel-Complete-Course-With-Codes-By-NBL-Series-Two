<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Classes
use App\Models\Mechanic;

class MechanicController extends Controller
{
    //Insert Data Into Mechanic Table
    public function add_mechanic(){
        $mechanic = new Mechanic();
        $mechanic->name = 'Tom';
        $mechanic->save();
    }
}
