<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ayudaController extends Controller
{
    public function agregarConsulta(Request $req){
        $reglas=[
            "name"=> "required | string | min:2",
            "surname"=> "required | string | min:2",
            "email"=>   "required | email",
            "consulta"=> "required | string | required|max:255"
            ];
        $mensajes=[
            "required"=> "No completaste el campo :attribute",
            "string"=> "El campo :attribute debe ser un texto",
            "min"=> "El campo :attribute tiene un minimo de :min",
            "email"=> "El email es incorrecto",
            "max"=> " El campo :attribute tiene un maximo de :max"
            ];
        this->validate($req, $reglas, $mensajes);
    }
}
