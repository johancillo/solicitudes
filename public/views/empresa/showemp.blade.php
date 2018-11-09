
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de Empresa Rut: {{$empresa->rut_empresa}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          
	   <form action="" method="post">
		   {{csrf_field() }}
	   		
		   <div class="form-group">
		   		<label for="rut_empresa">Rut Empresa</label>
		<input type="text" id="rut_empresa" name="rut_empresa" 
		   class="form-control {{$errors->has('rut_empresa') ? 'is-invalid':''}}" 
			   value= "{{old('rut_empresa', $empresa->rut_empresa)}}" readonly="true" style="height:35px; width:240px"  onkeypress="return isNumberKey(event)"  />
			   
			   @if($errors->has('rut_empresa'))
			   <span class ="form-text">
					<strong>{{$errors->first('rut_empresa')}}</strong>		   
	
			   </span>
			   
			   @endif
			   
		   </div>
		    <div class="form-group">
		   		<label for="razon_social">Razon Social</label>
		   		<input type="text" id="razon_social" name="razon_social" class="form-control" value="{{$empresa->razon_social}}" style="height:35px; width:50%" maxlength="191"/>
		   </div>
		    <div class="form-group">
		   		<label for="nombre_empresa">Nombre Empresa</label>
		   		<input type="text" id="nombre_empresa" name="nombre_empresa" class="form-control" value="{{$empresa->nombre_empresa}}" style="height:35px; width:50%" maxlength="191"/>
		   </div>
		    <div class="form-group">
		   		<label for="telefono">Telefono</label>
		   		<input type="text" id="telefono" name="telefono" class="form-control" value="{{$empresa->telefono}}" style="height:35px; width:50%" maxlength="191"/>
		   </div>
		    <div class="form-group">
		   		<label for="direccion">Dirección</label>
		   		<input type="text" id="direccion" name="direccion" class="form-control" value="{{$empresa->direccion}}" style="height:35px; width:50%" maxlength="191"/>
		   </div>
		    <div class="form-group">
		   		<label for="giro">Giro</label>
		   		<input type="text" id="giro" name="giro" class="form-control" value="{{$empresa->giro}}" style="height:35px; width:50%" maxlength="191"/>
		   </div>


		   
		   
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Actualizar</button>
		   <a href="{{route('empresa.index')}}" class="btn btn-secondary" style="width:100px">Volver</a>
		   
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