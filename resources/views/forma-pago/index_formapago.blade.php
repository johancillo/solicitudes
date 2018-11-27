
@extends('layouts.main')

@section('content')




   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 80%;" >
			  
			  <a class="btn btn-primary" href="/formapago/create/" >Agregar forma de pago</a>
			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th  >Código</th>
                  <th ">Descripción</th>
                        <th ">Acciones</th>
                </tr>
              </thead>
              <tbody>
			  @foreach($formapagos as $formapago) 
                <tr>
                  <td>{{  $formapago->cod_forma_pago }}</td>
					<td>{{  $formapago->descripcion }}</td>

			
					<td>
		
		<a href="#" class="btn btn-info btn-lg" >
		   <span class="glyphicon glyphicon-eye-open" ></span></a>
		   </td>
	

                </tr>
               @endforeach
              </tbody>
            </table>

            {{ $formapagos->links() }}

          </div>
        </main>

@endsection