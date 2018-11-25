
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Factura de Solicitud: {{$factura->id}}</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          
	   <form action="" method="post">
		   {{csrf_field() }}
	   		
		   <div class="form-group">
		   		<label for="id">Solicitud</label>
		<input type="text" id="id" name="id" 
		   class="form-control {{$errors->has('id') ? 'is-invalid':''}}" 
			   value= "{{old('id', $factura->id)}}" readonly="true" style="height:35px; width:240px"  onkeypress="return isNumberKey(event)"  />
			   
			   @if($errors->has('id'))
			   <span class ="form-text">
					<strong>{{$errors->first('id')}}</strong>		   
	
			   </span>
			   
			   @endif
		   </div>

		      <div class="form-group">
		   		<label for="num_factura">N° Factura</label>
		   		<input type="text" id="num_factura" name="num_factura" class="form-control" value ="{{$factura->num_factura}}" 
		   			onkeypress="return isNumberKey(event)"  placeholder="Ingrese n° Factura" maxlength="20" style="height:35px; width:240px"/>
		   </div>
	
 

		    <div class="form-group">
		   		<label for="monto">Monto</label>
		   		<input type="text" id="monto" name="monto" class="form-control" value ="{{$factura->monto}}"  style="height:35px; width:50%"  maxlength="200"/>
		   </div>
		    <div class="form-group">
		   		<label for="orden_compra">Orden de compra</label>
		   		<input type="text" id="orden_compra" name="orden_compra" value ="{{$factura->orden_compra}}" class="form-control" style="height:35px; width:50%" maxlength="200"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_facturacion">Fecha facturación</label>
		   		<input type="text" id="fecha_facturacion" name="fecha_facturacion" value ="{{$factura->fecha_facturacion}}" class="form-control" style="height:35px; width:50%" maxlength="200"/>
		   </div>
		    <div class="form-group">
		   		<label for="fecha_primer_pago">Fecha primer pago</label>
		   		<input type="text" id="fecha_primer_pago" name="fecha_primer_pago" value ="{{$factura->fecha_primer_pago}}"  class="form-control" style="height:35px; width:50%" maxlength="200" />
		   </div>
		    <div class="form-group">
		   		<label for="cantidad_cuotas">Cantidad cuotas</label>
		   		<input type="text" id="cantidad_cuotas" name="cantidad_cuotas" value ="{{$factura->cantidad_cuotas}}"  class="form-control" style="height:35px; width:50%" maxlength="200" />
		   </div>   
		   
		   <button class="btn btn-primary" type="submit" style="width:100px">Actualizar</button>
		   <a href="{{route('facturas.index')}}" class="btn btn-secondary" style="width:100px">Volver</a>
		   
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