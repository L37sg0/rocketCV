<?php

use App\Http\Controllers\Api\ApplicantController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\UniversityController;
use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('cvs', CVController::class);
