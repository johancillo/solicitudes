
@extends('layouts.main')

@section('content')




   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 140%;" >
			  
			  <a class="btn btn-primary" href="/solicitud/create" >Nueva Solicitud</a>
			  
			  <br><br>
			  
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
					<th>Avances</th>
					
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
		   		
    	</td>
    	<td>
			<a href="/avance/{{ $ticket->id }}" class="btn btn-success btn-lg">
			  <span class="glyphicon glyphicon-plus"></span> 
			</a>	
    		<a  href="/avances/solicitud/{{$ticket->id}}" class="btn btn-warning btn-lg">
				<span class=" glyphicon glyphicon-duplicate "></span>
			</a>	
		
		 		
		</td>	

                </tr>
               @endforeach
              </tbody>
            </table>

            {{ $tickets->links() }}

          </div>
		  
		  <h1 class="h2">Reportes</h1>  


             <form action="{{ route("tickets.reportExcelSolicitudFechas") }}" method="GET">
  			    <div class="form-group">
		   		<label for="fecha_ini">Fecha Inicio</label>
		   		<input type="text" id="fecha_ini" name="fecha_ini" class="form-control" style="height:35px; width:30%" autocomplete="off" maxlength="0" >
		  		 </div>

		  		   <div class="form-group">
		   		<label for="fecha_fin">Fecha Fin</label>
		   		<input type="text" id="fecha_fin" name="fecha_fin" class="form-control" style="height:35px; width:30%" autocomplete="off" maxlength="0" >
		  		 </div>


  		</div>
  		<button type="submit"> Generar</button>
	</form>
		  
		  
		  
		  
        </main>

@endsection