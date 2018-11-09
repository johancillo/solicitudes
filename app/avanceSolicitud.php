<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avanceSolicitud extends Model
{
     protected $fillable = ['id_solicitud','fecha_reg_avance','rut_usuario','horas_netas','tipo_hora','detalle_avance','fecha_avance'];
}
