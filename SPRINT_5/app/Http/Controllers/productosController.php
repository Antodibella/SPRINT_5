<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function listado(){
        $productos = producto::All();
        return view('listadoProductos',compact('productos'));
    }
    public function detalle(){
        
    }
}


