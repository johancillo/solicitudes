	

@extends('layouts.main')



 <title>Ingreso Solicitudes</title>
@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Ingreso de Solicitudes</h1>  
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
		    <a href="/empresa/create" class="btn btn-success">
				<span class="glyphicon glyphicon-plus"></span> Registrar Empresa
			</a>

			<a href="/clientes/create" class="btn btn-success">
				<span class="glyphicon glyphicon-plus"></span>  Registrar Cliente
			</a>		

		  
		   <br>
			<br>
	<div class="form-group col-xs-20">	
		
	  <label for="rut_empresa">Rut Empresa</label>
		<select class="form-control {{$errors->has('rut_empresa') ? 'is-invalid':''}}" id="rut_empresa" name="rut_empresa" style="height:35px; width:240px">
			<option value="">-- Elegir Rut Empresa --</option>
			@foreach($empresas as $empresa)
			
			<option value=" {{$empresa['rut_empresa']}}"> {{ $empresa['rut_empresa']}} {{$empresa['nombre_empresa']}}</option>
		@endforeach
		</select>
		
		@if($errors->has('rut_empresa'))
			   <span class ="form-text">
					<strong  >Debes ingresar Rut de la Empresa</strong>		   
					
			   </span>
			   
			   @endif
	</div>  

	  <label for="correo_cliente">Correo Cliente</label>
		<select class="form-control {{$errors->has('correo_cliente') ? 'is-invalid':''}}" id="correo_cliente" name="correo_cliente" style="height:35px; width:240px">
			<option value="">-- Elegir Correo Cliente --</option>
			@foreach($clientes as $cliente)
			
			<option value=" {{$cliente['correo_cliente']}}"> {{ $cliente['correo_cliente']}} </option>
		@endforeach
		</select>
		
		@if($errors->has('correo_cliente'))
			   <span class ="form-text">
					<strong  >Debes opción</strong>		   
					
			   </span>
			   
			   @endif
	</div>  
	
		 
		
		   <div class="form-group">
      			<label for="descripcion">Descripción del avance</label>
      		<textarea class="form-control" rows="5" id="descripcion" name="descripcion" maxlength="800">  </textarea>
    		</div>

		       <div class="form-group">
		   		<label for="horas_estimadas">Horas Estimadas</label>
		   		<input type="text" id="horas_estimadas" name="horas_estimadas" class="form-control" 	onkeypress="return isNumberKey(event)"  maxlength="4"	style="height:35px; width:30%"/>
		   </div>
		
		    <div class="form-group">
		   		<label for="fecha_solicitud">Fecha Solicitud</label>
		   		<input type="text" id="fecha_solicitud" name="fecha_solicitud" class="form-control" style="height:35px; width:30%" autocomplete="off" maxlength="0"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_inicio">Fecha Inicio</label>
		   		<input type="text" id="fecha_inicio" name="fecha_inicio" class="form-control" style="height:35px; width:30%" autocomplete="off" maxlength="0"/>
		   </div>
		

		    <div class="form-group">
		   		<label for="fecha_fin_estimada">Fecha Entrega Estimada</label>
		   		<input type="text" id="fecha_fin_estimada" name="fecha_fin_estimada" class="form-control" style="height:35px; width:30%" autocomplete="off" maxlength="0"/>
		   </div>


	 <div class="form-group col-xs-20">
		  <label for="tipo">Tipo</label>
			<select class="form-control " id="tipo" name="tipo" style="height:35px; width:30%"   >
				<option value="Normal">Normal</option>
				<option value="Emergencia">Emergencia</option>
				<option value="Contrato mensual">Contrato mensual</option>
			
			</select>
		</div>

<div class="form-group col-xs-20">
		  <label for="estado">Estado</label>
			<select class="form-control " id="estado" name="estado" style="height:35px; width:30%"   >
				<option value="Recibida">Recibida</option>
				<option value="En curso">En curso</option>			
			</select>
		</div>

		   <!--
		     	<div class="form-group">
	  <label for="tipo">Tipo</label>
		<select class="form-control" id="tipo" name="tipo"style="height:35px; width:200px">
		
			@foreach($empresas as $empresa)
			<option value=" {{$empresa['id']}}"> {{ $empresa['nombre_empresa']
				}} </option>
		@endforeach
		</select>
	</div>   
		-->   
	
	
		   <br>
		  
		   <a href="{{route('tickets.index')}}" class="btn btn-info" style="width:100px">Volver</a>
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   
		   
	   </form>
         
        </main>




@endsection