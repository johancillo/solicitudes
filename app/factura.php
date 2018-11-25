<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $fillable = ['num_factura','id','monto','orden_compra','fecha_facturacion','fecha_primer_pago','cantidad_cuotas'];
}
