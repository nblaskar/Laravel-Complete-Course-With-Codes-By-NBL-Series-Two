<?php
use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DeploymentController;

// Route To Insert Project Data By Controller
Route::get('add-project', [ProjectController::class, 'add_project']);

// Route To Insert Language Data By Controller
Route::get('add-language/{id}', [LanguageController::class, 'add_language']);

// Route To Insert Deployment Data By Controller
Route::get('add-deployment/{id}', [DeploymentController::class, 'add_deployment']);

// Route To Show Deployment Data By Controller
Route::get('show-deployment/{id}', [DeploymentController::class, 'show_deployment']);
