<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('principal');
});

// Route::get('/crear-cuenta', function () {
//     return view('auth.register');
// });

// Con el renombramiento del nombre de la ruta aun que se le cambie el nombre despues del metodo no importara ya que se manda a llamar desde el renombramineto de name
// Es importante resaltar que cada ruta debe estar relacionada con su metodo ya que si se espera un metodo deben crearce especialamente para lo que se necesite
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//Route::post('/crear-cuenta', [RegisterController::class, 'store'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/muro',[PostController::class, 'index'])
    ->name('posts.index')
    ->middleware('auth');
    