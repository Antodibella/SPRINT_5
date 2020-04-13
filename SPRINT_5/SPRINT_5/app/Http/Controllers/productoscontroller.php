<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoscontroller extends Controller
{
    public function listado(){
        $productos = [
            0 => [
            "nombre" => "IPHONE 8 64gb",
            "pantalla" => "Pantalla 4.7 pulgadas IPS LCD de 750 x 1334 pixeles",
            "camara trasera" => "Cámara trasera de 12 MP f/1.8",
            "Cámara delantera" => "Cámara delantera 7 MP f/2.2",
            "Bateria" => "Bateria 1821 mAh con cárga inalámbrica",
            "Memoria interna" => "64 GB",
            "otro" => "Resistencia al agua y al polvo IP67"
        ]
            ];

           $vac = compact("productos");
           return view("listadoproductos", $vac) ;
    }

    public function detalle($id){
        $vac = compact("id");
        return view("detalleproducto", $vac);
    }
    ]
}



                   