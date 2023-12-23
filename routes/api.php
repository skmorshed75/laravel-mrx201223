<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//AJAX CALL ROUTES
//Homepage
Route::get("/herodata",[HomeController::class,'heroData']);
Route::get("/aboutData",[HomeController::class,'aboutData']);
Route::get("/socialData",[HomeController::class,'socialData']);

//Contact Page
Route::get("/contactRequest",[ContactController::class,'contactRequest']);

//Project Page
Route::get("/projectData",[ProjectController::class,'projectData']);

//Resume Page
Route::get("/resumelink",[ResumeController::class,'resumeLink']);
Route::get("/experiencedata",[ResumeController::class,'experienceData']);
Route::get("/educationData",[ResumeController::class,'educationData']);
Route::get("/skillsData",[ResumeController::class,'skillsData']);
Route::get("/languageData",[ResumeController::class,'languageData']);