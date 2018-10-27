<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avanceSolicitud extends Model
{
     protected $fillable = ['id_solicitud','rut_usuario','fecha_reg_avance','horas_netas','tipo_hora','detalle_avance','fecha_avance'];
}
