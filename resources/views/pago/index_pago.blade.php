
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" >
   
	  <h1 class="h2">Pagos para Factura: {{$consulta2[0]->num_factura}}</h1>  
          <div class="table-responsive" style="width: 120%;" >
		  

  
  
  
  <a href="{{route('facturas.index')}}" class="btn btn-info" style="width:100px">Volver</a>
  </br></br>
			 
       <table class="table table-striped table-sm" >
              <thead>
                <tr>
      
                  <th>Fecha de Pago</th>
				   <th>Forma de pago</th>
				   	<th>Estado</th>
					<th>Monto</th>
					<th>Acciones</th>
								
                </tr>
              </thead>
              <tbody>
			  @foreach($consulta as $consultas) 
                <tr>

    
					<td>{{  $consultas->fecha_pago }}</td>
					<td>{{  $consultas->cod_forma_pago }}</td>
					<td>{{  $consultas->estado }}</td>
					<td>{{  $consultas->monto }}</td>
			
		<td>
		<a href="/pago/update/{{$consultas->id}}" class="btn btn-info btn-lg">
		   <span class="glyphicon glyphicon-pencil"></span></a>
		   <a href="/pago/pagar/{{$consultas->id}}" class="btn btn-success btn-lg">
		   <span class="glyphicon glyphicon-ok"></span></a>
		</td>
		
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

