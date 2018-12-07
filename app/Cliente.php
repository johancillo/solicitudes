<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Cliente extends Model
{

	   use Notifiable;
	use SoftDeletes;

	protected $table = 'clientes';
     protected $fillable = ['id','correo_cliente','nombre','telefono','telefono_alt','correo_alt','cod_area'];

}
