
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		  
		  
			
			
			
            <h1 class="h2">Actualización de Avance: {{$avanceSolicitud->id_solicitud}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
		  
		  
		  
		  
          
	   <form action="" method="post">
		   {{csrf_field() }}
	   		
			   <!-- Agregue esto -->
			   
			   
			   <div class="form-group">
		   		<label for="empresa">Empresa</label>
		   		<input type="text" id="empresa" name="empresa" class="form-control" style="height:35px; width:240px" readonly="true" value="Stracke PLC"/>
		   </div>
		    <div class="form-group">
		   		<label for="descripcion">Descripción de Solicitud</label>
		   		<input type="text" id="descripcion" name="descripcion" class="date form-control" readonly="true" value="Solicitud de prueba d parte de la empresa Stracke PLC"/>
		   </div>
		   
		   
			<!-- Hasta aqui -->
		   
			 <div class="form-group">
      			<label for="detalle_avance">Descripción del avance</label>
      		<textarea class="form-control" rows="5" id="detalle_avance" name="detalle_avance"  value="{{$avanceSolicitud->detalle_avance}}" maxlength="750">  {{$avanceSolicitud->detalle_avance}}</textarea>
    		</div>

			  	  <div class="form-group col-xs-20">	
			  <label for="rut_usuario">Rut Usuario</label>
					<select class="form-control {{$errors->has('rut_usuario') ? 'is-invalid':''}}" id="rut_usuario" name="rut_usuario" style="height:35px; width:240px">
					<option value="{{$avanceSolicitud->rut_usuario}}">{{$avanceSolicitud->rut_usuario}}</option>
					@foreach($users as $user)
					<option value=" {{$user['rut_usuario']}}"> {{ $user['rut_usuario']}} </option>
					@endforeach
					</select>
				@if($errors->has('rut_usuario'))
			   <span class ="form-text">
				<strong  >Debes ingresar Factura</strong>		   					
			   </span>
			   @endif
		</div> 
	

			    <div class="form-group">
		   		<label for="horas_netas">Horas Netas</label>
		   		<input type="text" id="horas_netas" name="horas_netas"  value="{{$avanceSolicitud->horas_netas}}"class="form-control" style="height:35px; width:240px" maxlength="1" onkeypress="return isNumberKey(event)" />
		   </div>
		 <div class="form-group col-xs-20">
		  <label for="tipo_hora">Tipo Hora</label>
			<select class="form-control " id="tipo_hora" name="tipo_hora" style=" height:35px; width:200px" >
				<option value="{{$avanceSolicitud->tipo_hora}}">{{$avanceSolicitud->tipo_hora}}</option>
				<option value="Normal">Normal</option>
				<option value="Extra">Extra</option>
				
			
			</select>
		</div>

			

		  

		   <div class="form-group">
		   		<label for="fecha_avance">Fecha Avance</label>
		   		<input type="text" id="fecha_avance" name="fecha_avance"  value="{{$avanceSolicitud->fecha_avance}}"class="date form-control" style="height:35px; width:240px" autocomplete="off" />
		   </div>
  <!--no se que para que es este campo

  		   <div class="form-group">
		   		<label for="detalle_avance">Descripción Avance</label>
		   		<input type="text" id="detalle_avance" name="detalle_avance"  value="{{$avanceSolicitud->detalle_avance}}"class="form-control" style="height:100px; width:50%" />
		   </div>
		   -->
		   
		   <a href="{{route('tickets.index')}}" class="btn btn-info" style="width:100px">Volver</a>
		   <button class="btn btn-primary" type="submit" style="width:100px">Guardar</button>
		   
		   
	   </form>
         
        </main>
<script type="text/javascript">

    $('.date').datepicker({  

      // format: 'mm-dd-yyyy',
	   Language: "es",
        autoclose: true

     });  

</script>  





@endsection