<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Classes
use App\Models\Project;

class ProjectController extends Controller
{
    //Insert Data into Project Table
    public function add_project(){
        $project = new Project();
        $project->name='E-Learning';
        $project->save();
    }
}
