<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return "Welcome to Home Page";
});

Route::get('/about', function () {
    return "Welcome to About Page";
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/student-form', [StudentController::class, 'studentForm']);