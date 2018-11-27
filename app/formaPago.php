<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formaPago extends Model
{
	protected $table = 'forma_pagos';
	protected $primaryKey = 'cod_forma_pagos';
 	protected $fillable = ['descripcion'];
}
