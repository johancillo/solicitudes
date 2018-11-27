
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" >
   
	  <h1 class="h2">Crear de pago para Factura: {{$consulta2[0]->num_factura}}</h1>  
          <div class="table-responsive" style="width: 120%;" >
  <a class="btn btn-primary" href="/pago/create/{{ $consulta2[0]->num_factura  }}" >Agregar Pago</a>
			  	
       <table class="table table-striped table-sm" >
              <thead>
                <tr>
                  <th>N° Factura</th>
                  <th>Fecha de Pago</th>
				   <th>Codigo forma de pago</th>
					<th>Monto</th>
					<th>Actualizar</th>
								
                </tr>
              </thead>
              <tbody>
			  @foreach($consulta as $consultas) 
                <tr>

                    <td>{{  $consultas->num_factura   }}</td>  
					<td>{{  $consultas->fecha_pago }}</td>
					<td>{{  $consultas->cod_forma_pago }}</td>
					<td>{{  $consultas->monto }}</td>
			
		<td>
		<a href="/pago/update/{{$consultas->num_factura}}" class="btn btn-success btn-lg">
		   <span class="glyphicon glyphicon-refresh"></span></a>
		</td>


		<td>

	
				</td>
					
                </tr>
               @endforeach
              </tbody>
            </table>
          
          </div>
        </main>

@endsection

