<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('principal');
});

// Route::get('/crear-cuenta', function () {
//     return view('auth.register');
// });

Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store'])->name('register');

