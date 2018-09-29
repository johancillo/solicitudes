
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 140%;" >
			  
			  <a class="btn btn-primary" href="/solicitud/create" >Agregar Solicitud</a>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th>N°</th>
                 <!-- <th>Rut Empresa</th> -->
                  <th>Correo Cliente</th>
                <!--  <th>Horas Estimada</th> -->
				   <th>Descripción</th>
					<th>Fecha Solicitud</th>
			<!--		<th>Fecha Inicio</th> -->
			<!--		<th>Fecha Estimada</th> -->
					<th>Estado</th>
					<th>Tipo</th>
					<th>Acciones</th>
					
                </tr>
              </thead>
              <tbody>
			  @foreach($tickets as $ticket) 
                <tr>
                  <td>{{  $ticket->id }}</td>
                 <!-- <td>{{  $ticket->rut_empresa }}</td> -->
					<td>{{  $ticket->correo_cliente }}</td>
				<!--	<td>{{  $ticket->horas_estimadas }}</td>  -->
					<td>{{  $ticket->descripcion }}</td>
					<td>{{ date('d-m-Y', strtotime($ticket->fecha_solicitud)) }}</td>
				<!--	<td>{{  $ticket->fecha_inicio }}</td> -->
				<!--	<td>{{  $ticket->fecha_fin_estimada }}</td>  -->
					<td>{{  $ticket->estado }}</td>
					<td>{{  $ticket->tipo }}</td>
					<td>
				<!--	<a href="/solicitud/{{ $ticket->id }}" class="btn btn-info btn-lg" style="width:100px">Actualizar</a> 
		<a href="/solicitud/delete/{{ $ticket->id }}" class="btn btn-danger" style="width:100px">Eliminar</a>
					</td>		
				-->
		<a href="/solicitud/{{ $ticket->id }}" class="btn btn-info btn-lg" >
		   <span class="glyphicon glyphicon-eye-open" ></span></a>
		
		<a href="#" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-inbox"></span> 
        </a>
			<a href="/solicitud/delete/{{ $ticket->id }}" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-trash" ></span>  
        </a>				
				
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </main>

@endsection