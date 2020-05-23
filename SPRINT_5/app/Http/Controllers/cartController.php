<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function index()
    {
        $productosCart = auth()->user()->carrito;
        if($productosCart->isEmpty()){
            return redirect()->route('index');
        } else {
            return view('cart', compact('productosCart'));
        }
    }

    public function store()
    {
        request()->validate([
            'producto_id'=> ['required', 'integer'],
            'nombre'=> ['required', 'string', 'min:3', 'max:100'],
            'cantidad'=> ['required', 'integer'],
            'precio'=> ['required', 'integer'],
            'user_id'=> ['required', 'integer'],
        ]);

        $prodCart = Cart::create([
            'producto_id'=>request()->producto_id,
            'nombre'=>request()->nombre,
            'cantidad'=>request()->cantidad,
            'precio'=>request()->precio,
            'user_id'=>request()->user_id,
        ]);

        return redirect()->route('productos.show', $prodCart);
    }

    public function destroy($id)
    {
        Cart::find($id)->delete();
        return redirect()->route('cart.index')->with(['status'=> "Producto eliminado!"]);
    }
}