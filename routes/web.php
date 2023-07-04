<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// frontend route
// Page Route
Route::get('/', [HomeController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);

// Ajax Route
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialsData', [HomeController::class, 'socialsData']);
Route::get('/experiencesData', [ResumeController::class, 'experiencesData']);
Route::get('/educationsData', [ResumeController::class, 'educationsData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languagesData', [ResumeController::class, 'languagesData']);
Route::get('/projectsData', [ProjectController::class, 'projectsData']);
Route::post('/contactRequest', [ContactController::class, 'contactRequest']);


Auth::routes();
Route::get('/home',[HomeController::class, 'index'])->name('home');
