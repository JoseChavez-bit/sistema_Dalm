<?php

namespace App\Http\Controllers;

use App\Models\Arreglos;
use Illuminate\Http\Request;

class ArreglosController extends Controller
{
    public function index()
    {
        return view('arreglos.index'); // Asegúrate de que esta vista exista
    }

    public function create(){
        return view('arreglos.create');
    }


    public function store(Request $request){
        $request->validate([
            'nombre'=> 'required',
            'precio'=> 'required|numeric',
            'descripcion'=>'required',
        ]);
        Arreglos::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

}
