<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->controller(HomeController::class)->group(function () {

    Route::get('/tasks', 'getAllTasks')->name('getAllTasks');
    Route::get('/tasks/{id}', 'getOneTask')->name('getOneTask');
    Route::get('/task/add', 'createTask')->name('createTask');
    Route::post('/task/send', 'sendTask')->name('sendTask');
    Route::get('/task/edit/{id}', 'editTask')->name('editTask');
    Route::put('/task/update/{id}', 'updateTask')->name('updateTask');
    Route::delete('/task/delete', 'deleteTask')->name('deleteTask');
});
