<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors');
    }
}

//este archivo es el mismo que migracion1 con la diferencia que poniendo en la consola php artisan make:migration create_nombretabla_table crea una tabla en la base de datos y luego se actualizan los datos poniendo en la consola php artisan migrate// para eliminar la tabla en la consola se pone en la consola php artisan migrate:rollback

