<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
			$table->string('rut_empresa');
			$table->string('correo_cliente');
			$table->string('horas_estimadas');
			$table->string('descripcion');
			$table->date('fecha_solicitud');
			$table->date('fecha_inicio');
			$table->date('fecha_fin_estimada');
			$table->string('estado');
			$table->string('tipo');
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
        Schema::dropIfExists('tickets');
    }
}
