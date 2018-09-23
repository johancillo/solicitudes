
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Solicitudes</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
			
				
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta Semana
              </button>
            </div>
          </div>
         
          <div class="table-responsive">
			  
			  <a class="btn btn-primary" href="/tickets/create" >Agregar Solicitud</a>
			  <a class="btn btn-primary" href="#" >Agregar  Avance Solicitud</a>
			  
            <table class="table table-striped table-sm" style="width: 1300px;">
              <thead>
                <tr>
                
                  <th>N°</th>
                  <th>Rut Empresa</th>
                  <th>Correo Cliente</th>
                  <th>Horas Estimada</th>
				   <th>Descripción</th>
					<th>Fecha Solicitud</th>
					<th>Fecha Inicio</th>
					<th>Fecha Estimada</th>
					<th>Estado</th>
					<th>Tipo</th>
					<th>Acciones</th>
					
                </tr>
              </thead>
              <tbody>
			  @foreach($tickets as $ticket) 
                <tr>
                  <td>{{  $ticket->id }}</td>
                  <td>{{  $ticket->rut_empresa }}</td>
					<td>{{  $ticket->correo_cliente }}</td>
					<td>{{  $ticket->horas_estimadas }}</td>
					<td>{{  $ticket->descripcion }}</td>
					<td>{{  $ticket->fecha_solicitud }}</td>
					<td>{{  $ticket->fecha_inicio }}</td>
					<td>{{  $ticket->fecha_fin_estimada }}</td>
					<td>{{  $ticket->estado }}</td>
					<td>{{  $ticket->tipo }}</td>
					<td>
					<a href="/tickets/{{ $ticket->id }}" class="btn btn-primary" style="width:100px">Actualizar</a>
					<a href="/tickets/delete/{{ $ticket->id }}" class="btn btn-danger" style="width:100px">Eliminar</a>
					</td>		
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </main>

@endsection