
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Avance de solicitud N°: {{$ticket->id}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
        
	   <form action="" method="post">
		   {{csrf_field() }}
	   	<!--	
		   <div class="form-group">
		   		<label for="rut_empresa">Rut Empresa</label>
		   		<input type="text" id="rut_empresa" name="rut_empresa" class="form-control {{$errors->has('rut_empresa') ? 'is-invalid':''}}"/>
			     @if($errors->has('rut_empresa'))
			   <span class ="form-text">
					<strong>Debes ingresar Rut de la Empresa</strong>		   
					
			   </span>
			   
			   @endif
		   </div>
		   
		    -->

			    <div class="form-group">
			   		<label for="id_solicitud">ID Solicitud</label>
			   		<input type="text" id="id_solicitud" name="id_solicitud" value = "{{$ticket->id}}" class="form-control" style="height:35px; width:240px" readonly=/>
			   </div>	

			    <div class="form-group">
			   		<label for="rut_usuario">Rut Usuario</label>
			   		<input type="text" id="rut_usuario" name="rut_usuario" class="form-control" style="height:35px; width:240px"/>
			   </div>	

			    <div class="form-group">
		   		<label for="horas_netas">Horas Netas</label>
		   		<input type="text" id="horas_netas" name="horas_netas" class="form-control" style="height:35px; width:240px"/>
		   </div>
		  <div class="form-group">
		   		<label for="tipo_hora">Tipo Hora</label>
		   		<input type="text" id="tipo_hora" name="tipo_hora" class="form-control" style="height:35px; width:240px"/>
		   </div>
			

		  <div class="form-group">
		   		<label for="detalle_avance">Detalle Avance</label>
		   		<input type="text" id="detalle_avance" name="detalle_avance" class="form-control" />
		   </div>

		   <div class="form-group">
		   		<label for="fecha_avance">Fecha Avance</label>
		   		<input type="text" id="fecha_avance" name="fecha_avance" class="date form-control" style="height:35px; width:240px" autocomplete="off" />
		   </div>
	   
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   <a href="{{route('tickets.index')}}" class="btn btn-info" style="width:100px">Volver</a>	
		   
	   </form>
         
        </main>



@endsection
		  