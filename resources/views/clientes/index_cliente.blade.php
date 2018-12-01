
@extends('layouts.main')

@section('content')




   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 120%;" >
			  
			  <a class="btn btn-primary" href="/clientes/create" >Agregar Cliente</a>
			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th  >N°</th>
                  <th style="width: 30%;">Correo Cliente</th>
				   <th style="width: 40%;">Nombre</th>
					<th>Teléfono</th>
					<th>Acciones</th>
					
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
		   <span class="glyphicon glyphicon-eye-open" ></span></a>
		   
		<a href="#" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> 
		</a>	
		   <a  href="#" class="btn btn-warning btn-lg">
		    <span class="glyphicon glyphicon-inbox"></span>
	   </a>			
						<a href="#" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-trash" ></span>  
        </a>	

                </tr>
               @endforeach
              </tbody>
            </table>

            {{ $clientes->links() }}

          </div>
        </main>

@endsection