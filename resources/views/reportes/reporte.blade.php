
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Reportes</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
		  
		  
	  <a id="boton" class="btn btn-info" >
          <span class="glyphicon glyphicon-pencil" ></span> Modificar  
        </a>
	   <a  href="]#" class="btn btn-success">
		    <span class="glyphicon glyphicon-plus"></span> Agregar Avance
	   </a>	
	   <a  href="#" class="btn btn-warning">
		    <span class="glyphicon glyphicon-inbox"></span> Mostrar Avances
	   </a>
	   <a href="$" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash" ></span> Eliminar  
        </a>
          <br>
	   <form action="" method="post" class="fluid">
		   {{csrf_field() }}
	   		    <br>
		

		 
		    <div class="form-group">
		   		<label for="correo_cliente">Correo Cliente</label>
		   		<input type="text" id="correo_cliente" name="correo_cliente" class="form-control" value="{{$ticket->correo_cliente}}" readonly="true"  />
		   </div>
		

			  	   
		   
		   
		   
		   <a href="#" class="btn btn-secundary" style="width:100px">Volver</a>
		    
		   
	   </form>
         
        </main>




@endsection