<?php
public function producto(Request $req){
    $reglas=[
        "marca"=> "required | string | min:2",
        "modelo"=> "required | string | min:2",
        "caracteristicas"=> "required | string | required|max:255",
        "precio"=> "required | numeric ",
        "stock"=> "required | integer | required|max:255"
        

        ];
    $mensajes=[
        "required"=> "No completaste el campo :attribute",
        "string"=> "El campo :attribute debe ser un texto",
        "min"=> "El campo :attribute tiene un minimo de :min",
        "integer"=> "El campo :attribute no es un numero entero",
        "numeric"=> "El campo :attribute no es correcto",
        "max"=> " El campo :attribute tiene un maximo de :max"
        ];
    this->validate($req, $reglas, $mensajes);
   /*  productoNuevo -> marca = $req["marca"];
       productoNuevo -> modelo = $req["modelo"];
       productoNuevo -> caracteriscas = $req["caracteristicas"];
       productoNuevo -> precio = $req["precio"];
       productoNuevo -> stock = $req["stock"];
    
    productoNuevo -> save();
    return redirect("/administrador"); */
};
?>