<?php

use App\Http\Controllers\ArreglosController;
use App\Http\Controllers\ClienteController;

use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('arreglos', [ArreglosController::class, 'index']);
Route::get('/arreglos/create', [ArreglosController::class, 'create'])->name('arreglos.create');




Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');







route::get('/ventas', [VentasController::class, 'index'])->name('ventas.index');
Route::get('/ventas/create', [VentasController::class, 'create'])->name('ventas.create');








Route::get('/arreglos', function () {
    return view('arreglos.index');
})->name('arreglos.index');

Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes.index');

Route::get('/ventas', function () {
    return view('ventas.index');
})->name('ventas.index');

