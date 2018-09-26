<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
     protected $fillable = ['id','rut_empresa','razon_social','nombre_empresa','telefono','direccion','giro'];
}
