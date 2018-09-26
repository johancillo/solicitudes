<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	
	protected $fillable = ['rut_empresa','correo_cliente','horas_estimadas','descripcion','fecha_solicitud','fecha_inicio','fecha_fin_estimada','estado','estado','tipo'];
}



