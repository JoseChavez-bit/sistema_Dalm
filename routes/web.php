<?php

use App\Http\Controllers\ArreglosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('arreglos', [ArreglosController::class, 'index']);





Route::get('clientes', [ClienteController::class, 'index']);





route::get('ventas', [VentasController::class, 'index']);