<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $table = "usuario";
    // public $primarykey = "id";
    // public $timestamps = false;
   public $guarded = [];

   //public function getnombrecompleto(){
      // return $this ->first_name . " ". $this->last_name;
   //}
}
