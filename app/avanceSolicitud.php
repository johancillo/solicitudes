<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;
class avanceSolicitud extends Model
{

	use Notifiable;
	use SoftDeletes;
	protected $primaryKey = 'id';
	
     protected $fillable = ['id_solicitud','id','rut_usuario','horas_netas','tipo_hora','detalle_avance','fecha_avance'];
}
