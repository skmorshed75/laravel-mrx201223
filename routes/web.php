<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//PAGE ROUTES
Route::get("/",[HomeController::class,'page']);
Route::get("/contact",[ContactController::class,'page']);
Route::get("/prjects",[ProjectController::class,'page']);
Route::get("/resume",[ResumeController::class,'page']);

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