<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index']);

Route::get('/task/show', [HomeController::class, 'getAllTasks']);
Route::get('/task/show/{id}', [HomeController::class, 'getOneTask']);
Route::post('/task/add', [HomeController::class, 'createTask']);
Route::put('/task/edit', [HomeController::class, 'updateTask']);
Route::delete('/task/delete', [HomeController::class, 'deleteTask']);
