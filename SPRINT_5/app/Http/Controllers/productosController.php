<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\producto;

class productosController extends Controller
{
    public function listado(){

        $productos = producto::all();

        // sirve para ver el arrays de productos --> dd($productos);
        $vac = compact("productos");
        return view('listadodeproductos', $vac);
    }
    
    public function detalle($id){
        $producto = producto::find($id);
        $vac = compact("producto");
        return view("detalleproducto", $vac);

    }

    //esta funcion es de ejemplo para filtrar por marcas, en este caso iphone (NO FUNCIONA)
    public function iphone($id){
        $productos = producto::where("marca", "=" ,"iphone");
        $vac = compact("productos");
        return view('listadodeproductos', $vac);

    }
}


