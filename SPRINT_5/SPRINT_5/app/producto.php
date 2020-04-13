<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $table = "productos";
     // public $primarykey = "id";
     // public $timestamps = false;
    public $guarded = [];
}
