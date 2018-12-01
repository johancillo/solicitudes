<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente-Empresa extends Model
{
    
	//protected $primaryKey = 'num_factura';
     protected $fillable = ['rut_empresa','correo_empresa'];
}
