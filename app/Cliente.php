<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{


     protected $fillable = ['id','correo_cliente','nombre','telefono','telefono_alt','correo_alt','cod_area'];

}
