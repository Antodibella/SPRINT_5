<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class user extends Controller
{
    public function editar(user $usuario){
        //convertir foto si la edito y guardarla
        $ruta = $usuario-> file("foto")-> store("public");
        $nombreArchivo = basename($ruta);
            
        $user->update([
            'name'=> $usuario["name"],
            'surname'=> $usuario["surname"],
            'foto'=>$nombreArchivo ,
            
        ]);
    }
}
