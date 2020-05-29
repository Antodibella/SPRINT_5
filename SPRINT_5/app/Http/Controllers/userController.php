<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class users extends Controller
{
    public function editar(Request $req,user $usuario){
        //convertir foto si la edito y guardarla
        if($req->file("foto")){
        $ruta=$req->file("foto")->store("public");
        $nombreArchivo = basename($ruta);
        }  
        $users->update([
            'name'=> $req["name"],
            'surname'=> $req["surname"],
            'foto'=>$nombreArchivo ,
            
        ]);
    }
}
