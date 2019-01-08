<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

	protected $primaryKey = 'id';
	
     protected $fillable = ['id','num_factura','fecha_pago','cod_forma_pago','monto','estado'];
}
