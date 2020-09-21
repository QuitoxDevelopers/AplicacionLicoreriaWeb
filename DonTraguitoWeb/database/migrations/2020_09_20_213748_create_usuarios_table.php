<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Cedula',13);
            $table->string('Nombres',30);
            $table->string('Apellidos',30);
            $table->string('Telefono',10);
            $table->string('Direccion',50);
            $table->string('Correo',30);
            $table->string('Contraseña',30);
            $table->boolean('Tipo')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
