<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use App\Models\Post;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = ventas::all();
        return view('ventas.index', compact('ventas')); // Asegúrate de que esta vista exista
    }

    public function create(){
        return view('ventas.create');
    }
     // Método para guardar los datos
     public function ventas(Request $request)
     {
         // Validar datos del formulario
         $request->validate([
             'title' => 'required|string|max:255',
             'content' => 'required|string',
         ]);
 
         // Guardar datos en la base de datos
         Ventas::create([
             'title' => $request->title,
             'content' => $request->content,
         ]);
 
         // Redireccionar con un mensaje
         return redirect()->route('clientes.create')->with('success', 'Post creado correctamente.');
     }
}
