<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Clientes;

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes.index'); // Asegúrate de que esta vista exista
    }

}
