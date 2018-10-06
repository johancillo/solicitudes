

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
		   <a href="/empresa/create" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Añadir Empresa
        </a>	

		  
		   <br>
			<br>
	<div class="form-group col-xs-20">	
		
	  <label for="rut_empresa">Rut Empresa</label>
		<select class="form-control {{$errors->has('rut_empresa') ? 'is-invalid':''}}" id="rut_empresa" name="rut_empresa" style="height:35px; width:240px">
			<option value="">-- Elegir Rut Empresa --</option>
			@foreach($empresas as $empresa)
			
			<option value=" {{$empresa['id']}}"> {{ $empresa['id']}} </option>
		@endforeach
		</select>
		@if($errors->has('rut_empresa'))
			   <span class ="form-text">
					<strong  >Debes ingresar Rut de la Empresa</strong>		   
					
			   </span>
			   
			   @endif
		
	</div>  
		    <div class="form-group">
		   		<label for="correo_cliente">Correo Cliente</label>
		   		<input type="email" id="correo_cliente" name="correo_cliente" class="form-control" aria-describedby="emailHelp" placeholder="Ingresa correo electrónico" />
				<small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico.</small>
		   </div>
		
		    <div class="form-group">
		   		<label for="descripcion">Descripción</label>
		   		<input type="text" id="descripcion" name="descripcion" class="date form-control"/>
		   </div>
		       <div class="form-group">
		   		<label for="horas_estimadas">Horas Estimadas</label>
		   		<input type="datepicker" id="horas_estimadas" name="horas_estimadas" class="form-control" 	onkeypress="return isNumberKey(event)" 	 style="height:35px; width:240px"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_solicitud">Fecha Solicitud</label>
		   		<input type="date" id="fecha_solicitud" name="fecha_solicitud" class="form-control" style="height:35px; width:240px"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_inicio">Fecha Inicio</label>
		   		<input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" style="height:35px; width:240px"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_fin_estimada">Fecha Entrega Estimada</label>
		   		<input type="date" id="fecha_fin_estimada" name="fecha_fin_estimada" class="form-control" style="height:35px; width:240px"/>
		   </div>
		   
		
		 
		   
		 <div class="form-group col-xs-20">
		  <label for="tipo">Tipo</label>
			<select class="form-control " id="tipo" name="tipo" style=" height:35px; width:200px"   >
				<option value="Normal">Normal</option>
				<option value="Emergencia">Emergencia</option>
				<option value="Contrato mensual">Contrato mensual</option>
			
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
	   <div class="form-group col-xs-20">
		  <label for="estado">Estado</label>
			<select class="form-control " id="estado" name="estado" style=" height:35px; width:200px"   >
				<option value="Progreso">Progreso</option>
				<option value="Evaluacion">Evaluación</option>
				<option value="Terminado">Terminado</option>
			
			</select>
		</div>
		   <br>
		  
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   <a href="{{route('tickets.index')}}" class="btn btn-info" style="width:100px">Volver</a>
		   
	   </form>
         
        </main>


@endsection