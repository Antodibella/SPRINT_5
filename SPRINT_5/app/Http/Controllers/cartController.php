<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function construc(){
        if(!\Session::has('cart'))\Session::put('cart',array());
    }
    //Mostrar carrito
    public function show(){
        $cart=\Session::get('cart');
        return $cart;
    }
    //agregar Item

    //borrar Item

    //actualizar Item

    //vaciar carrito

    //total a pagar 
}
