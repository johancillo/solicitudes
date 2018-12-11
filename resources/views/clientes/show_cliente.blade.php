	
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de Cliente: {{$cliente->nombre}}</h1>  
			
			
			
			<a id="boton" class="btn btn-info" >
          <span class="glyphicon glyphicon-pencil" ></span> Modificar  
        </a>
	   <a href="/clientes/delete/{{$cliente->id}}" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash" ></span> Eliminar  
        </a>
			
			
			<br><br>
			
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
		  

	   <form action="" method="post" class="fluid">
		   {{csrf_field() }}
	   		    <br>
		

		    <div class="form-group">
		   		<label for="correo_cliente">Correo Cliente</label>
		   		<input type="text" id="correo_cliente" name="correo_cliente" class="form-control" value="{{$cliente->correo_cliente}}" readonly="true" style="height:35px; width:30%"/>
		   </div>

		      <div class="form-group">
		   		<label for="nombre">Nombre</label>
		   		<input type="text" id="nombre" name="nombre" class="form-control" value="{{$cliente->nombre}}" style="height:35px; width:30%" maxlength="60"  />
		   </div>


		    <div class="form-group">
		   		<label for="telefono">Teléfono</label>
		   		<input type="text" id="telefono" name="telefono" class="form-control" value="{{$cliente->telefono}}" onkeypress="return isNumberKey(event)" maxlength="14" style="height:35px; width:30%"/>
		   </div>
		 
		    <div class="form-group">
		   		<label for="telefono_alt">Teléfono alternativo</label>
		   		<input type="text" id="telefono_alt" name="telefono_alt" class="form-control" value="{{$cliente->telefono_alt}}"  onkeypress="return isNumberKey(event)" maxlength="14"style="height:35px; width:30%" />
		   </div>

		    <div class="form-group">
		   		<label for="correo_alt">Correo Alternativo</label>
		   		<input type="text" id="correo_alt" name="correo_alt" class="form-control" value="{{$cliente->correo_alt}}" style="height:35px; width:30%"  />
		   </div>
		 <div class="form-group col-xs-20">
		  <label for="cod_area">Area</label>
			<select class="form-control " id="cod_area" name="cod_area" style="height:35px; width:30%"   >
				<option value="{{$cliente->cod_area}}">{{$cliente->cod_area}}</option>
				<option value="Administracion">Administracion</option>
				<option value="Informatica">Informarica</option>
				<option value="Finanzas">Finanzas</option>
				<option value="Gerencia">Gerencia</option>
			</select>
		</div>
		
				      

		   
		   
		   <a href="javascript:history.back()" class="btn btn-info" style="width:100px">Volver</a>
		    <button id="save" class="btn btn-primary" type="submit" style="width:100px" >Guardar</button>
		   
	   </form>
         
        </main>




@endsection