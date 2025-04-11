<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CardController;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
});

// Ruta para guardar una tarjeta
Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

// Ruta para obtener todas las tarjetas
Route::get('/cards/list', [CardController::class, 'index'])->name('cards.index');

// Ruta para eliminar una tarjeta
Route::delete('/cards/{id}', [CardController::class, 'destroy'])->name('cards.destroy');

Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

Route::get('/cards', function () {
    return view('cards');
})->name('cards');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/streets', function () {
    $streets = json_decode(file_get_contents(public_path('data/streets.json')));
    return response()->json($streets);
})->name('streets');

Route::get('/notifications', function () {
    return view('notif');
})->name('notifications');

Route::get('/lookplace', function () {
    return view('lookplace');
})->name('lookplace');

Route::get('/disableparking', function () {
    return view('disableparking');
})->name('disableparking');

Route::get('/roadguide/{id}', function ($id) {
    return view('roadguide', ['id' => $id]);
});

Route::get('/pago_fisico/{id}', function ($id) {
    return view('pago_fisico', ['id' => $id]);
})->name('pago_fisico');
// Ruta protegida para la página de estacionamiento
Route::get('/parking', [ParkingController::class, 'showParking'])->middleware('auth')->name('parking');

// Ruta protegida para usuarios autenticados (homepage)
Route::get('/homepage', function () {
    return view('homepage');
})->middleware('auth')->name('homepage');
