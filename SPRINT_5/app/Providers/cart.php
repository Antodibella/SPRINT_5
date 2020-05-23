<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'cart';
    //protected $guarded = [];
    protected $fillable = [
        'producto_id', 'nombre', 'cantidad', 'precio', 'user_id',
    ];
}