<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rutas 
Route::get('/tareas', [App\Http\Controllers\TasksController::class, 'index']);

Route::get('/tareas/create', [App\Http\Controllers\TasksController::class, 'create']);
Route::get('/tareas/{Tasks}/edit', [App\Http\Controllers\TasksController::class, 'edit']);
Route::post('/tareas', [App\Http\Controllers\TasksController::class, 'sendData']);

Route::put('/tareas/{Tasks}', [App\Http\Controllers\TasksController::class, 'update']);
Route::delate('/tareas/{Tasks}', [App\Http\Controllers\TasksController::class, 'update']);