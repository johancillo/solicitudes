<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesEmpresas extends Model
{		
		protected $table = 'clientes_empresas';
       protected $fillable = ['rut_empresa','correo_empresa'];
}
