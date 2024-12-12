<?php

use App\Http\Controllers\ArreglosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('arreglos', [ArreglosController::class, 'index']);

Route::get('clientes', [ClienteController::class, 'index']);

route::get('productos', [ProductoController::class, 'index']);