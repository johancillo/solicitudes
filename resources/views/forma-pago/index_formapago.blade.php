
@extends('layouts.main')

@section('content')




   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 100%;" >
			  
			  <a class="btn btn-primary" href="/formapago/create/" >Agregar forma de pago</a>

        <a class="btn btn-primary" href="/formapago/reporte/" >Reporte</a>
			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th  >Código</th>
                  <th  style="width: 20%;">Descripción</th>
                        <th ">Acciones</th>
                </tr>
              </thead>
              <tbody>
			  @foreach($formapagos as $formapago) 
                <tr>
                  <td>{{  $formapago->cod_forma_pago }}</td>
					<td>{{  $formapago->descripcion }}</td>

			
					<td>
		
		<a href="/formapago/update/{{$formapago->cod_forma_pago}}" class="btn btn-info btn-lg" >
		   <span class="glyphicon glyphicon-eye-open" ></span></a>
            <a href="/formapago/delete/{{$formapago->cod_forma_pago}}" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-trash" ></span>  
        </a>
		   </td>
	

                </tr>
               @endforeach
              </tbody>
            </table>

            {{ $formapagos->links() }}

          </div>
        </main>

@endsection