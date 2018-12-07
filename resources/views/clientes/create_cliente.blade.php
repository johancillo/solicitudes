	

@extends('layouts.main')



 <title>Ingreso Solicitudes</title>
@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Ingreso de Clientes</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
			
				
        
            </div>
          </div>
          
	   <form action="" method="post">
		   {{csrf_field() }}


		  
		   <br>
			<br>

		    <div class="form-group">
		   		<label for="correo_cliente">Correo Cliente</label>
		   		<input type="email" id="correo_cliente" name="correo_cliente" class="form-control" aria-describedby="emailHelp" style="height:35px; width:30%" placeholder="Ingresa correo electrónico" />
				<small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico.</small> 
		   </div>
		
		    <div class="form-group">
		   		<label for="nombre">Nombre Cliente</label>
		   		<input type="text" id="nombre" name="nombre" class="date form-control" maxlength="60" style="height:35px; width:30%"/>
		   </div>

		       <div class="form-group">
		   		<label for="telefono">Teléfono</label>
		   		<input type="text" id="telefono" name="telefono" class="form-control" 	maxlength="14" onkeypress="return isNumberKey(event)" style="height:35px; width:30%"/>
		   </div>
		   
		       <div class="form-group">
		   		<label for="telefono_alt">Teléfono Alternativo</label>
		   		<input type="text" id="telefono_alt" name="telefono_alt" class="form-control" 	maxlength="14"  onkeypress="return isNumberKey(event)" style="height:35px; width:30%"/>
		   </div>

		     

		 	     <div class="form-group">
		   		<label for="correo_alt">Correo Alternativo</label>
		   		<input type="email" id="correo_alt" name="correo_alt" class="form-control" aria-describedby="emailHelp" style="height:35px; width:30%" placeholder="Ingresa correo electrónico" />
				<small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico.</small> 
		   </div>

		     <div class="form-group">
		   		<label for="cod_area">Código de Área</label>
		   		<input type="text" id="cod_area" name="cod_area" class="form-control" maxlength="20" 	style="height:35px; width:30%"/>
		   </div>
		
		  




		  
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   <a href="{{route('clientes.index')}}" class="btn btn-info" style="width:100px">Volver</a>
		   
	   </form>
         
        </main>




@endsection