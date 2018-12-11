<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Ticket extends Model
{
	use Notifiable;
	use SoftDeletes;

	protected $table = 'tickets';
	protected $primaryKey = 'id';
	protected $fillable = ['rut_empresa','correo_cliente','horas_estimadas','descripcion','fecha_solicitud','fecha_inicio','fecha_fin_estimada','estado','estado','tipo'];
}



