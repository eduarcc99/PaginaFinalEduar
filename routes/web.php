<?php

use Illuminate\Support\Facades\Route;

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