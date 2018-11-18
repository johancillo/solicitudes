
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" >
   
	
          <div class="table-responsive" style="width: 120%;" >
			  
			  <a class="btn btn-primary" href="#" >Agregar Conexión</a>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
            
                  <th>Rut Empresa</th>
				   <th>Medio de conexión</th>
					<th>Ip</th>
					<th>Puerto</th>
					<th>Usuario</th>
					<th>Comentarios</th>
					
                </tr>
              </thead>
              <tbody>
			  @foreach($consulta as $consultas) 
                <tr>
           
                    <td>{{  $consultas->rut_empresa   }}</td>   
					<td>{{  $consultas->medio_conexion }}</td>
					<td>{{  $consultas->ip }}</td>
					<td>{{  $consultas->puerto }}</td>
				    <td>{{  $consultas->usuario }}</td> 
				    <td>{{  $consultas->comentario }}</td> 
					<td>
		
		<a href="#" class="btn btn-info btn-lg">
		   <span class="glyphicon glyphicon-eye-open"></span></a>
		
		<a href="#" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> 
		</a>	
	
				
					
                </tr>
               @endforeach
              </tbody>
            </table>
          
          </div>
        </main>

@endsection