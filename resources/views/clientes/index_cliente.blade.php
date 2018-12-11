
@extends('layouts.main')

@section('content')




   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 120%;" >
			  
			  <a class="btn btn-primary" href="/clientes/create" >Agregar Cliente</a>
			  <a class="btn btn-primary"  href="{{ route('formapago.reporte',['type'=>'xlsx'])  }}"> Reporte </a>
			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th  >N°</th>
                  <th style="width: 30%;">Correo Cliente</th>
				   <th style="width: 40%;">Nombre</th>
					<th>Teléfono</th>
					<th>Acciones</th>
					
					<th style="width: 20%">Solicitudes</th>
					
                </tr>
              </thead>
              <tbody>
			  @foreach($clientes as $cliente) 
                <tr>
                  <td>{{  $cliente->id }}</td>
					<td>{{  $cliente->correo_cliente }}</td>
					<td>{{  $cliente->nombre }}</td>
					<td>{{  $cliente->telefono }}</td>
					<td>
		
						<a href="/clientes/{{$cliente->id}}" class="btn btn-info btn-lg" >
						   <span class="glyphicon glyphicon-pencil" ></span>
						</a>			
							
					</td>
					
					<td> 	
		   	
						<a href="/clientes/solicitudes/{{$cliente->correo_cliente}}" class="btn btn-success btn-lg">
						  <span class="glyphicon glyphicon-duplicate"></span> 
						</a>	
					   <a  href="/clientes/reporte/{{$cliente->correo_cliente}}" class="btn btn-success btn-lg">
							<span class="glyphicon glyphicon-save"></span>
					   </a>			
					</td>	

                </tr>
               @endforeach
              </tbody>
            </table>

            {{ $clientes->links() }}

          </div>
        </main>

@endsection