<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvanceSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avance_solicituds', function (Blueprint $table) {
        
			$table->integer('num_solicitud');
			$table->dateTime('fecha_reg_avance');
			$table->string('rut_usuario');
			$table->integer('horas_netas');
			$table->tinyInteger('tipo_hora');
			$table->date('fecha_avance');
			$table->string('detalle_avance');
			
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
        Schema::dropIfExists('avance_solicituds');
    }
}
