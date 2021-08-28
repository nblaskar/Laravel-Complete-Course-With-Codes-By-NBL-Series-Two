<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Classes
use App\Models\Mechanic;
use App\Models\Car;

class CarController extends Controller
{
    //Insert Data Into Car Table Through Mechanic ID
    public function add_car($id){
        $mechanic = Mechanic::find($id);
        $car=new Car();
        $car->model = 'i10';
        $mechanic->car()->save($car);
    }
}
