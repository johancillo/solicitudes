
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
		   		<label for="rut_usuario">Rut Usuario</label>
		<input type="text" id="rut_usuario" name="rut_usuario" 
		   class="form-control {{$errors->has('rut_usuario') ? 'is-invalid':''}}" 
			   value= "{{old('rut_usuario', $avanceSolicitud->rut_usuario)}}" readonly="true" style="height:35px; width:240px"  onkeypress="return isNumberKey(event)"  />
			   
			   @if($errors->has('rut_usuario'))
			   <span class ="form-text">
					<strong>{{$errors->first('rut_usuario')}}</strong>		   
	
			   </span>
			   
			   @endif
			   
		   </div>

	    <div class="form-group">
	   		<label for="giro">Giro</label>
	   		<input type="text" id="giro" name="giro" class="form-control" value="" style="height:35px; width:50%" maxlength="191"/>
	   </div>


	   
	   
	   
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
		  