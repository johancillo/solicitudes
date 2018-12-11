<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;

class Empresa extends Model
{
	protected $table = 'empresas';
     protected $fillable = ['id','razon_social','nombre_empresa','telefono','direccion','giro','rut_empresa'];
}
