
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Actualización de pago para Factura: {{$pago->num_factura}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          
	   <form action="" method="post">
		   {{csrf_field() }}

	   		 <div class="form-group">
			   		<label for="num_factura">N° Factura</label>
			   		<input type="text" id="num_factura" name="num_factura" value = "{{$pago->num_factura}}" class="form-control" style="height:35px; width:240px" readonly="true" />
			   </div>	

	
			    <div class="form-group">
			   		<label for="fecha_pago">Fecha Pago</label>
			   		<input type="text" id="fecha_pago" name="fecha_pago" value = "{{$pago->fecha_pago}}" class="form-control" style="height:35px; width:240px"/>
			   </div>	

	

			<div class="form-group col-xs-20">	
		
	  <label for="cod_forma_pago">Forma Pago</label>
		<select class="form-control {{$errors->has('cod_forma_pago') ? 'is-invalid':''}}" id="cod_forma_pago" name="cod_forma_pago" style="height:35px; width:240px" hidden="true">
	<option value=" {{$formapagos['cod_forma_pago']}}"> {{ $formapagos['descripcion']}} </option>
			@foreach($formapago as $formapagos)
			
			<option value=" {{$formapagos['cod_forma_pago']}}"> {{ $formapagos['descripcion']}} </option>
		@endforeach
		</select>

		
		@if($errors->has('cod_forma_pago'))
			   <span class ="form-text">
					<strong  >Debes ingresar opción correcta</strong>		   
					
			   </span>
			   
			   @endif
	</div>  





		  <div class="form-group">
		   		<label for="monto">Monto</label>
		   		<input type="text" id="monto" name="monto" value = "{{$pago->monto}}" class="form-control" style="height:35px; width:240px"/>
		   </div>
			

		 
		   
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   <a href="#" class="btn btn-secondary" style="width:100px">Volver</a>
		   
		   
	   </form>
         
        </main>

@endsection