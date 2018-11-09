
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de Solicitud: {{$ticket->id}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
		  
		  
	  <a id="boton" class="btn btn-info" >
          <span class="glyphicon glyphicon-pencil" ></span> Modificar  
        </a>
	   <a class="btn btn-success">
		    <span class="glyphicon glyphicon-plus"></span> Agregar Avance
	   </a>	
	   <a  href="/avances/solicitud/{{$ticket->id}}" class="btn btn-warning">
		    <span class="glyphicon glyphicon-inbox"></span> Mostrar Avances
	   </a>
	   <a href="/solicitud/delete/{{ $ticket->id }}" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash" ></span> Eliminar  
        </a>
          <br>
	   <form action="" method="post" class="fluid">
		   {{csrf_field() }}
	   		    <br>
		   <div class="form-group">
		   		<label for="rut_empresa">Rut Empresa</label>
		<input type="text" id="rut_empresa" name="rut_empresa" 
		   class="form-control {{$errors->has('rut_empresa') ? 'is-invalid':''}}" 
			   value= "{{old('rut_empresa', $ticket->rut_empresa)}}"  readonly="true" style="height:35px; width:240px" />
			   
			   @if($errors->has('rut_empresa'))
			   <span class ="form-text">
					<strong>Debes ingresar Rut de la Empresa</strong>		   
					
			   </span>
			   
			   @endif
		
			   
		   </div>
		    <div class="form-group">
		   		<label for="correo_cliente">Correo Cliente</label>
		   		<input type="text" id="correo_cliente" name="correo_cliente" class="form-control" value="{{$ticket->correo_cliente}}" readonly="true"  />
		   </div>
		      <div class="form-group">
		   		<label for="descripcion">Descripción</label>
		   		<input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$ticket->descripcion}}" disabled="true" />
		   </div>
		    <div class="form-group">
		   		<label for="horas_estimadas">Horas Estimadas</label>
		   		<input type="text" id="horas_estimadas" name="horas_estimadas" class="form-control" value="{{$ticket->horas_estimadas}}" onkeypress="return isNumberKey(event)" maxlength="4" style=" height:35px; width:200px"  disabled="true"/>
		   </div>
		 
		    <div class="form-group">
		   		<label for="fecha_solicitud">Fecha Solicitud</label>
		   		<input type="date" id="fecha_solicitud" name="fecha_solicitud" class="form-control" value="{{$ticket->fecha_solicitud}}" style=" height:35px; width:200px" disabled="true"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_inicio">Fecha Inicio</label>
		   		<input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{$ticket->fecha_inicio}}" style=" height:35px; width:200px"  disabled="true"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_fin_estimada">Fecha Entrega Estimada</label>
		   		<input type="date" id="fecha_fin_estimada" name="fecha_fin_estimada" class="form-control" value="{{$ticket->fecha_fin_estimada}}" style=" height:35px; width:200px"  disabled="true"/>
		   </div>
				      
		<!--
		   <div class="form-group">
		   		<label for="tipo">Tipo</label>
		   		<input type="text" id="tipo" name="tipo" class="form-control" value="{{$ticket->tipo}}" />
		   </div>
		  -->
		  <div class="form-group">
		   		<label for="tipo">Tipo</label>
		   		<input type="text" id="tipo" name="tipo" class="form-control" value="{{$ticket->tipo}}" style=" height:35px; width:200px" disabled="true"/>
		   </div>
		   <div class="form-group">
		   		<label for="estado">Estado</label>
		   		<input type="text" id="estado" name="estado" class="form-control" value="{{$ticket->estado}}" style=" height:35px; width:200px"  disabled="true"/>
		   </div>
			  	   
		   
		   
		   
		   <a href="{{route('tickets.index')}}" class="btn btn-secundary" style="width:100px">Volver</a>
		    <button id="save" class="btn btn-primary" type="submit" style="width:100px" disabled="true">Guardar</button>
		   
	   </form>
         
        </main>




@endsection