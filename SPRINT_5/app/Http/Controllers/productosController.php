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
            "stock"=> "required | integer ",
            "foto" => "required | file"
            
    
            ];
        $mensajes=[
            "required"=> "No completaste el campo :attribute",
            "string"=> "El campo :attribute debe ser un texto",
            "min"=> "El campo :attribute tiene un minimo de :min",
            "integer"=> "El campo :attribute no es un numero entero",
            "numeric"=> "El campo :attribute no es correcto",
            "max"=> " El campo :attribute tiene un maximo de :max",
            "file"=> "El campo :atribute no es una foto"
            ];
        $this->validate($req, $reglas, $mensajes);

        /// agregar foto y obtner el nombre
        $ruta = $req-> file("foto")-> store("public");
        $nombreArchivo = basename($ruta);
        
        $ruta1 = $req-> file("foto1")-> store("public");
        $nombreArchivo1 = basename($ruta1);
        
        $ruta2 = $req-> file("foto2")-> store("public");
        $nombreArchivo2 = basename($ruta2);
        producto::create([
            'marca'=> $req["marca"],
            'foto'=>$nombreArchivo ,
            'foto1'=>$nombreArchivo1 ,
            'foto2'=>$nombreArchivo2 ,
            'modelo' => $req["modelo"],
            'caracteristicas'=> $req["caracteristicas"],
            'precio' => $req["precio"],
            'stock' => $req["stock"],
        ]);
        
        
        return redirect("/administrador"); 
    }

    public function update(producto $producto)
    {
        $producto->update([

        ]);
    }

    public function delete(producto $producto)
    {
        $producto->delete();
    }
}


