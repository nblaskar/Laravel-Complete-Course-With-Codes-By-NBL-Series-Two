<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Class
use App\Models\Language;
use App\Models\Deployment;
use App\Models\Project;

class DeploymentController extends Controller
{
    //Insert Data into Deployment Table
    public function add_deployment($id){
        $language=Language::find($id);
        $deployment = new Deployment();
        $deployment->work='Done';
        $language->deployment()->save($deployment);
    }


    // Get Deployment Data Based on Project ID for One To Many Relation
    // public function show_deployment($id){
    //     $deployment=Project::find($id)->language->flatMap->deployment;
    //     return $deployment;
    // }


    // Get Deployment Data Based on Project ID for Has Many Through Relation
    public function show_deployment($id){
        $deployment=Project::find($id)->deployment;
        return $deployment;
    }

}
