<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/tasks', [HomeController::class, 'getAllTasks'])->name('getAllTasks');
Route::get('/tasks/{id}', [HomeController::class, 'getOneTask'])->name('getOneTask');
Route::get('/task/add', [HomeController::class, 'createTask'])->name('createTask');
Route::post('/task/send', [HomeController::class, 'sendTask'])->name('sendTask');
Route::get('/task/edit/{id}', [HomeController::class, 'editTask'])->name('editTask');
Route::put('/task/update/{id}', [HomeController::class, 'updateTask'])->name('updateTask');
Route::delete('/task/delete', [HomeController::class, 'deleteTask'])->name('deleteTask');
