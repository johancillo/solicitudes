<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avanceSolicitud extends Model
{
	protected $primaryKey = 'id';
	
     protected $fillable = ['id_solicitud','id','rut_usuario','horas_netas','tipo_hora','detalle_avance','fecha_avance'];
}
