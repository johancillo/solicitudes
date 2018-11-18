<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conexion extends Model
{
		protected $primaryKey = 'id';
    	protected $fillable = ['rut_empresa','medio_conexion','ip','puerto','usuario','comentario'];
}
