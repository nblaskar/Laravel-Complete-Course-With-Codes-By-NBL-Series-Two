<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Import Model Class
use App\Models\Language;
use App\Models\Project;

class LanguageController extends Controller
{
    //Insert Data into Language Table
    public function add_language($id){
        $project=Project::find($id);
        $language = new Language();
        $language->name='Java';
        $project->language()->save($language);
    }
}
