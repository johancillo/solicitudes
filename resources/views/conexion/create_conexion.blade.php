
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Conexión de empresa RUT: {{$empresa->rut_empresa	}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
        
	   <form action="" method="post">
		   {{csrf_field() }}
	   	

    <div class="form-group">
		   		<label for="rut_empresa">Rut Empresa</label>
		   		<input type="text" id="rut_empresa" name="rut_empresa" class="form-control" value="{{$empresa->rut_empresa}}" readonly="true"   style=" height:35px; width:30%"/>
		   </div>

		    <div class="form-group">
		   		<label for="medio_conexion">Medio de Conexión</label>
		   		<input type="text" id="medio_conexion" name="medio_conexion" class="form-control"  maxlength="191"  style=" height:35px; width:30%" />
		   </div>

		      <div class="form-group">
		   		<label for="ip">IP</label>
		   		<input type="text" id="ip" name="ip" class="form-control"  onKeyUp="javascript:validateIp('ip')"  style=" height:35px; width:30%" />
		   </div>


		    <div class="form-group">
		   		<label for="puerto">Puerto</label>
		   		<input type="text" id="puerto" name="puerto" class="form-control" onkeypress="return isNumberKey(event)" maxlength="14" style=" height:35px; width:30%"  />
		   </div>
		 
		    <div class="form-group">
		   		<label for="usuario">Usuario</label>
		   		<input type="text" id="usuario" name="usuario" class="form-control"  maxlength="50" style=" height:35px; width:30%"/>
		   </div>

			<div class="form-group">
      			<label for="comentario">Comentarios</label>
      		<textarea class="form-control" rows="5" id="comentario" name="comentario" maxlength="191">  </textarea>
    		</div>
				      

		   
		   
		   <a href="{{route('empresa.index')}}" class="btn btn-info" style="width:100px">Volver</a>
		    <button id="save" class="btn btn-primary" type="submit" style="width:100px" >Guardar</button>
			



	   </form>
         
        </main>



@endsection
		  