<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//PAGE ROUTES
Route::get("/",[HomeController::class,'page']);
Route::get("/contact",[ContactController::class,'page']);
Route::get("/projects",[ProjectController::class,'page']);
Route::get("/resume",[ResumeController::class,'page']);

//AJAX CALL ROUTES
//Homepage
Route::get("/heroData",[HomeController::class,'heroData']);
Route::get("/aboutData",[HomeController::class,'aboutData']);
Route::get("/socialData",[HomeController::class,'socialData']);

//Contact Page
Route::post("/contactRequest",[ContactController::class,'contactRequest']);

//Project Page
Route::get("/projectData",[ProjectController::class,'projectData']);

//Resume Page
Route::get("/resumelink",[ResumeController::class,'resumeLink']);
Route::get("/experienceData",[ResumeController::class,'experienceData']);
Route::get("/educationData",[ResumeController::class,'educationData']);
Route::get("/skillsData",[ResumeController::class,'skillsData']);
Route::get("/languageData",[ResumeController::class,'languageData']);