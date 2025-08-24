<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {

    Route::get('/login', 'loginIndex')->name('loginIndex');
    Route::post('/login', 'loginRequest')->name('loginRequest');
    Route::get('/register', 'registerIndex')->name('registerIndex');
    Route::post('/register', 'registerRequest')->name('registerRequest');

});
