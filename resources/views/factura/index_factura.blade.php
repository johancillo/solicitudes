
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" >
   
	
          <div class="table-responsive" style="width: 120%;" >
			  
			  <a class="btn btn-primary" href="/factura/create" >Agregar Factura</a>
			   <a class="btn btn-primary" href="/formapago">Formas de Pago</a>
                   
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                  <th>N° Factura</th>
              <!--    <th>Razon Social</th> -->	
                  <th>N° Solicitud</th>
				   <th>Monto</th>
					<th>Orden de compra</th>
					<th>Fecha acturación</th>
					<th>Fecha 1er pago</th>
					<th>Cant. Cuotas</th>
					<th>Actualizar</th>
					<th>Pagos</th>
					
                </tr>
              </thead>
              <tbody>
			  @foreach($facturas as $factura) 
                <tr>

                    <td>{{  $factura->num_factura   }}</td>  
					<td>{{  $factura->id }}</td>
					<td>{{  $factura->monto }}</td>
					<td>{{  $factura->orden_compra }}</td>
					<td>{{  $factura->fecha_facturacion }}</td> 
					<td>{{  $factura->fecha_primer_pago }}</td> 
					<td>{{  $factura->cantidad_cuotas }}</td> 
					<td>
		
		<a href="/factura/{{$factura->id}}" class="btn btn-success btn-lg">
		   <span class="glyphicon glyphicon-refresh"></span></a>
		</td>
		<td>
	
	<a href="/pago/{{$factura->num_factura}}" class="btn btn-info btn-lg">
          <span class=" glyphicon glyphicon-eye-open "></span> 
		</a>	
			<a href="/pago/create/{{$factura->num_factura}}" class="btn btn-info btn-lg ">
          <span class="glyphicon glyphicon-plus-sign"></span> 
		</a>	
				</td>
					
                </tr>
               @endforeach
              </tbody>
            </table>
          
          </div>
        </main>

@endsection