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
    
    public function create()
    {
        return view('clientes.create');
    }

    // Método para guardar los datos
    public function clientes(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Guardar datos en la base de datos
        Clientes::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redireccionar con un mensaje
        return redirect()->route('clientes.create')->with('success', 'Post creado correctamente.');
    }

}
