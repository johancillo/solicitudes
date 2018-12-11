
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
			   		<input type="text" id="fecha_pago" name="fecha_pago" value = "{{$pago->fecha_pago}}" class="form-control" style="height:35px; width:240px" maxlength="0"  readonly="true" />
			   </div>	

	

			<div class="form-group col-xs-20">	
		
	  <label for="cod_forma_pago">Forma Pago</label>
		<select class="form-control {{$errors->has('cod_forma_pago') ? 'is-invalid':''}}" id="cod_forma_pago" name="cod_forma_pago" style="height:35px; width:240px" hidden="true">
				<option value=" {{$pago['cod_forma_pago']}}"> {{ $pago['cod_forma_pago']}} </option>
			@foreach($formapago as $formapagos)
			
			<option value=" {{$formapagos['descripcion']}}"> {{ $formapagos['descripcion']}} </option>
		@endforeach
		</select>

		
		@if($errors->has('descripcion'))
			   <span class ="form-text">
					<strong  >Debes ingresar opción correcta</strong>		   
					
			   </span>
			   
			   @endif
	</div>  





		  <div class="form-group">
		   		<label for="monto">Monto</label>
		   		<input type="text" id="monto" name="monto" value = "{{$pago->monto}}" class="form-control" style="height:35px; width:240px" maxlength="9" />
		   </div>
			

		 
		   
		   <a href="{{route('facturas.index')}}" class="btn btn-info" style="width:100px">Volver</a>
		   <button class="btn btn-primary" type="submit" style="width:100px">Guardar</button>
		   
		   
		   
	   </form>
         
        </main>

@endsection