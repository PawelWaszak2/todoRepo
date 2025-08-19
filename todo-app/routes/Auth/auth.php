<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'loginIndex']);
Route::post('/login', [AuthController::class, 'loginRequest']);

Route::get('/register', [AuthController::class, 'registerIndex']);
Route::post('/register', [AuthController::class, 'registerRequest']);
