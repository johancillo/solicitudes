<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class formaPago extends Model
{
	use Notifiable;
	use SoftDeletes;
	protected $table = 'forma_pagos';
	protected $primaryKey = 'cod_forma_pago';
 	protected $fillable = ['descripcion'];
}
