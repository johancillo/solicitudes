

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

	   		

	   	  <div class="form-group col-xs-20">	
			  <label for="id">N° Solicitud</label>
					<select class="form-control {{$errors->has('id') ? 'is-invalid':''}}" id="id" name="id" style="height:35px; width:30%">
					<option value="">-- Elegir Solicitud --</option>
					@foreach($tickets as $ticket)
					<option value=" {{$ticket['id']}}"> {{ $ticket['id']}} </option>
					@endforeach
					</select>
				@if($errors->has('id'))
			   <span class ="form-text">
				<strong  >Debes ingresar Factura</strong>		   					
			   </span>
			   @endif
		</div> 
		  
		   <div class="form-group">
		   		<label for="num_factura">N° Factura</label>
		   		<input type="text" id="num_factura" name="num_factura" class="form-control"  onkeypress="return isNumberKey(event)"  placeholder="Ingrese n° Factura" maxlength="20" style="height:35px; width:30%"/>
		   </div>
	

		    <div class="form-group">
		   		<label for="monto">Monto</label>
		   		<input type="text" id="monto" name="monto" class="form-control" style="height:35px; width:30%"  maxlength="10" onkeypress="return isNumberKey(event)" />
		   </div>
		    <div class="form-group">
		   		<label for="orden_compra">Orden de compra</label>
		   		<input type="text" id="orden_compra" name="orden_compra" class="form-control" style="height:35px; width:30%" maxlength="20" onkeypress="return isNumberKey(event)" />
		   </div>
		    <div class="form-group">
		   		<label for="fecha_facturacion">Fecha facturación</label>
		   		<input type="text" id="fecha_facturacion" name="fecha_facturacion" autocomplete="off" class="form-control" style="height:35px; width:30%" maxlength="0"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_primer_pago">Fecha primer pago</label>
		   		<input type="text" id="fecha_primer_pago" autocomplete="off" name="fecha_primer_pago" class="form-control" style="height:35px; width:30%" maxlength="0" />
		   </div>
		    <div class="form-group">
		   		<label for="cantidad_cuotas">Cantidad cuotas</label>
		   		<input type="text" id="cantidad_cuotas" name="cantidad_cuotas" class="form-control" style="height:35px; width:30%" maxlength="2" onkeypress="return isNumberKey(event)" />
		   </div>
		   <br>
		   
		   
		 
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Agregar</button>
		   <a href="{{route('facturas.index')}}" class="btn btn-secondary" style="width:100px">Volver</a>
		   
	   </form>
         
        </main>





@endsection