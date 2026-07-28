<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/search', [StudentController::class, 'search']);
Route::get('/students/create', [StudentController::class, 'create']);

Route::post('/students', [StudentController::class, 'store']);

Route::get('/students/{id}/edit', [StudentController::class, 'edit']);

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/students/{id}', [StudentController::class, 'destroy']);