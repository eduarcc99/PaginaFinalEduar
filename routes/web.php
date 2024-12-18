<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/index', function () {
    return view('index.index');
})->name('index.index');

Route::get('/promociones', function () {
    return view('promociones.index');
})->name('promociones.index');

Route::get('/delivery', function () {
    return view('delivery.index');
})->name('delivery.index');

/* reservas  */
Route::get('/Reserva', function () {
    return view('Reserva.index');
})->name('Reserva.index');
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/promotions', [PageController::class, 'promotions'])->name('promotions');
Route::get('/reservation', [PageController::class, 'reservationForm'])->name('reservation.form');





Route::get('/confirmacion', function () {
    return view('confirmacion.confirmacion');
})->name('confirmacion.confirmacion');
