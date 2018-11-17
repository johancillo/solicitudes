
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de Avance Rut: {{$avanceSolicitud->id_solicitud}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          
	   <form action="" method="post">
		   {{csrf_field() }}
	   		
		   	    <div class="form-group">
			   		<label for="id_solicitud">ID Solicitud</label>
			   		<input type="text" id="id_solicitud" name="id_solicitud" value = "{{$avanceSolicitud->id_solicitud}}" class="form-control" style="height:35px; width:240px" />
			   </div>	

			 <div class="form-group">
      			<label for="detalle_avance">Descripción del avance</label>
      		<textarea class="form-control" rows="5" id="detalle_avance" name="detalle_avance"  value="{{$avanceSolicitud->detalle_avance}}">  {{$avanceSolicitud->detalle_avance}}</textarea>
    		</div>

			    <div class="form-group">
			   		<label for="rut_usuario">Rut Usuario</label>
			   		<input type="text" id="rut_usuario" name="rut_usuario"  value="{{$avanceSolicitud->rut_usuario}}" class="form-control" style="height:35px; width:240px"/>
			   </div>	

	

			    <div class="form-group">
		   		<label for="horas_netas">Horas Netas</label>
		   		<input type="text" id="horas_netas" name="horas_netas"  value="{{$avanceSolicitud->horas_netas}}"class="form-control" style="height:35px; width:240px"/>
		   </div>
		  <div class="form-group">
		   		<label for="tipo_hora">Tipo Hora</label>
		   		<input type="text" id="tipo_hora" name="tipo_hora"  value="{{$avanceSolicitud->tipo_hora}}"class="form-control" style="height:35px; width:240px"/>
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
		   
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Actualizar</button>
		   <a href="#" class="btn btn-secondary" style="width:100px">Volver</a>
		   
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