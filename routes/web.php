<?php

use App\Http\Controllers\ArreglosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('arreglos', [ArreglosController::class, 'index']);

Route::get('/arreglos', function () {
    return view('arreglos.index');
})->name('arreglos.index');



Route::get('clientes', [ClienteController::class, 'index']);

Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes.index');




route::get('ventas', [VentasController::class, 'index']);

Route::get('/ventas', function () {
    return view('ventas.index');
})->name('ventas.index');