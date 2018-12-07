	
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de Cliente: {{$cliente->id}}</h1>  
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
		    <div class="form-group">
		   		<label for="cod_area">Código de Área</label>
		   		<input type="text" id="cod_area" name="cod_area" class="form-control" value="{{$cliente->cod_area}}" style="height:35px; width:30%"  maxlength="20"/>
		   </div>
				      

		   
		   
		   <a href="{{route('clientes.index')}}" class="btn btn-secundary" style="width:100px">Volver</a>
		    <button id="save" class="btn btn-primary" type="submit" style="width:100px" >Guardar</button>
		   
	   </form>
         
        </main>




@endsection