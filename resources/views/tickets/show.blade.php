
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de Solicitud: {{$ticket->id}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          
	   <form action="" method="post">
		   {{csrf_field() }}
	   		
		   <div class="form-group">
		   		<label for="rut_empresa">Rut Empresa</label>
		<input type="text" id="rut_empresa" name="rut_empresa" 
		   class="form-control {{$errors->has('rut_empresa') ? 'is-invalid':''}}" 
			   value= "{{old('rut_empresa', $ticket->rut_empresa)}}" />
			   
			   @if($errors->has('rut_empresa'))
			   <span class ="form-text">
					<strong>{{$errors->first('rut_empresa')}}</strong>		   
	
			   </span>
			   
			   @endif
			   
		   </div>
		    <div class="form-group">
		   		<label for="correo_cliente">Correo Cliente</label>
		   		<input type="text" id="correo_cliente" name="correo_cliente" class="form-control" value="{{$ticket->correo_cliente}}"/>
		   </div>
		    <div class="form-group">
		   		<label for="horas_estimadas">Horas Estimadas</label>
		   		<input type="text" id="horas_estimadas" name="horas_estimadas" class="form-control" value="{{$ticket->horas_estimadas}}"/>
		   </div>
		    <div class="form-group">
		   		<label for="descripcion">Descripción</label>
		   		<input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$ticket->descripcion}}"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_solicitud">Fecha Solicitud</label>
		   		<input type="text" id="fecha_solicitud" name="fecha_solicitud" class="form-control" value="{{$ticket->fecha_solicitud}}"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_inicio">Fecha Inicio</label>
		   		<input type="text" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{$ticket->fecha_inicio}}"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_fin_estimada">Fecha Entrega Estimada</label>
		   		<input type="text" id="fecha_fin_estimada" name="fecha_fin_estimada" class="form-control" value="{{$ticket->fecha_fin_estimada}}"/>
		   </div>
				      
		    <div class="form-group">
		   		<label for="tipo">Tipo</label>
		   		<input type="text" id="tipo" name="tipo" class="form-control" value="{{$ticket->tipo}}"/>
		   </div>
		   
	<div class="form-group">
		  <label for="estado">Estado</label>
		<select class="form-control" id="estado" name="estado" value="{{$ticket->estado}} " style=" height:35px; width:200px" >
	<option value="Progreso" {{ $ticket->estado=="Progreso"? "selected" :"" }}>Progreso</option>
    <option value="Evaluacion" {{ $ticket->estado=="Evaluacion"? "selected" :"" }}>Evaluación</option>
	<option value="Terminado" {{ $ticket->estado=="<Terminado></Terminado>"? "selected" :"" }}>Terminado</option>
			
		</select>
	</div>
		   
		   
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Actualizar</button>
		   <a href="{{route('tickets.index')}}" class="btn btn-secondary" style="width:100px">Volver</a>
		   
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