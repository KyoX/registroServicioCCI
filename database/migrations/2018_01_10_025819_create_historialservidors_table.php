<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialservidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialservidores', function (Blueprint $table) {
            $table->increments('historialservicio_id');
            $table->integer('servidor_id');
            $table->integer('tipoasistencia_id');
            $table->dateTime('fecha_hora_servicio');
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
        Schema::dropIfExists('historialservidors');
    }
}
