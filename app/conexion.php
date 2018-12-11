<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class conexion extends Model
{
		protected $primaryKey = 'id';
    	protected $fillable = ['rut_empresa','medio_conexion','ip','puerto','usuario','comentario'];
}
