<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParkingController;

// Ruta principal (homepage)
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para recuperación de contraseña
Route::view('recoverypassword', 'recoverypassword')->name('recoverypassword');

// Rutas para registro
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Ruta para agregar un vehículo
Route::get('/parking', [ParkingController::class, 'showParking'])->middleware('auth')->name('parking');

// Ruta para la página de estacionamiento
Route::get('/parking', function () {
    return view('parking');
})->name('parking');
// Ruta protegida para usuarios autenticados
Route::get('/homepage', function () {
    return view('homepage');
})->middleware('auth')->name('homepage');
