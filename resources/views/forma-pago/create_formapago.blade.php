

@extends('layouts.main')
 <title>Ingreso Solicitudes</title>
@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Ingreso de Factura</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
			
            </div>
          </div>
        @if (count($errors)>0)
          <ul>
          
          		@foreach($errors->all() as $error)
          		
          			<li class ="alert alert-danger">{{$error }} </li>

          		@endforeach
          </ul>
          @endif
	
	
	   <form action="" method="post">
		   {{csrf_field() }}

	   		
		    <div class="form-group">
		   		<label for="descripcion">Descripción Forma de Pago</label>
		   		<input type="text" id="descripcion" name="descripcion" class="form-control" style="height:35px; width:50%" maxlength="200" />
		   </div>
		   <br>
		   
		   
		 
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   <a href="{{route('formapago.index')}}" class="btn btn-secondary" style="width:100px">Volver</a>
		   
	   </form>
         
        </main>

@endsection