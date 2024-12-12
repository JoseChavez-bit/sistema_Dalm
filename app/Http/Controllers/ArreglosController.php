<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArreglosController extends Controller
{
    public function index()
    {
        return view('arreglos.index'); // Asegúrate de que esta vista exista
    }
}
