
@extends('layouts.main')

@section('content')




  
         
	
          <div class="table-responsive" style="width: 100%;" >
			  

			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th  >Código</th>
                  <th  style="width: 80%;">Descripción</th>
                    
                </tr>
              </thead>
              <tbody>
			  @foreach($formapagos as $formapago) 
                <tr>
                  <td>{{  $formapago->cod_forma_pago }}</td>
					<td>{{  $formapago->descripcion }}</td>

		

                </tr>
               @endforeach
              </tbody>
            </table>

        

          </div>
     

@endsection