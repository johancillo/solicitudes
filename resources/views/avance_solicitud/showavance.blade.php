
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
	

			    <div class="form-group">
			   		<label for="id_solicitud">ID Solicitud</label>
			   		<input type="text" id="id_solicitud" name="id_solicitud" value = "{{$ticket->id}}" class="form-control" style="height:35px; width:240px" readonly=/>
			   </div>	

			
	   	  <div class="form-group col-xs-20">	
			  <label for="rut_usuario">Rut Usuario</label>
					<select class="form-control {{$errors->has('rut_usuario') ? 'is-invalid':''}}" id="rut_usuario" name="rut_usuario" style="height:35px; width:240px">
					<option value="">-- Elegir un RUT --</option>
					@foreach($users as $user)
					<option value=" {{$user['rut_usuario']}}"> {{ $user['rut_usuario']}} {{$user['name']}}</option>
					@endforeach
					</select>
				@if($errors->has('rut_usuario'))
			   <span class ="form-text">
				<strong  >Debes ingresar Factura</strong>		   					
			   </span>
			   @endif
		</div> 

			  <div class="form-group">
      			<label for="detalle_avance">Descripción del avance</label>
      		<textarea class="form-control" rows="5" id="detalle_avance" name="detalle_avance" maxlength="800" ></textarea>
    		</div>

	
		 <div class="form-group col-xs-20">
		  <label for="tipo_hora">Tipo Hora</label>
			<select class="form-control " id="tipo_hora" name="tipo_hora" style=" height:35px; width:200px"   >
				<option value="Normal">Normal</option>
				<option value="Extra">Extra</option>
				
			
			</select>
		</div>



			    <div class="form-group">
		   		<label for="horas_netas">Horas Netas</label>
		   		<input type="text" id="horas_netas" name="horas_netas"  onkeypress="return isNumberKey(event)" maxlength="2" class="form-control" style="height:35px; width:240px"/>
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
		  