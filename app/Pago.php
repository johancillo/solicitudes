<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

	protected $primaryKey = 'num_factura';
     protected $fillable = ['num_factura','fecha_pago','cod_forma_pago','monto'];
}
