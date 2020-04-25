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
    public function store(Request $req){
        
        $reglas=[
            "marca"=> "required | string | min:2",
            "modelo"=> "required | string | min:2",
            "caracteristicas"=> "required | string |max:255",
            "precio"=> "required | numeric ",
            "stock"=> "required | integer "
            
    
            ];
        $mensajes=[
            "required"=> "No completaste el campo :attribute",
            "string"=> "El campo :attribute debe ser un texto",
            "min"=> "El campo :attribute tiene un minimo de :min",
            "integer"=> "El campo :attribute no es un numero entero",
            "numeric"=> "El campo :attribute no es correcto",
            "max"=> " El campo :attribute tiene un maximo de :max"
            ];
        $this->validate($req, $reglas, $mensajes);

        /// agregar foto y obtner el nombre

        producto::create([
            'marca'=> $req["modelo"],
            'modelo' => $req["modelo"],
            'caracteristicas'=> $req["caracteristicas"],

        ]);
        // productoNuevo -> marca = $req["marca"];
        //    productoNuevo -> modelo = $req["modelo"];
        //    productoNuevo -> caracteriscas = $req["caracteristicas"];
        //    productoNuevo -> precio = $req["precio"];
        //    productoNuevo -> stock = $req["stock"];
        
        //productoNuevo -> save();
        return redirect("/administrador"); 
    }

    public function update(producto $producto)
    {
        $producto->update([

        ])
    }

    public function delete(producto $producto)
    {
        $producto->delete();
    }
}


