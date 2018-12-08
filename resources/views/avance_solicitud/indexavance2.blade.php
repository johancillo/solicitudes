
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
        
          <div class="table-responsive" style="width: 80%;" >			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th>Fecha Registro</th>   
          
				          <th>Descripción</th>
					        <th>Rut Usuario</th>
					        <th>Horas netas</th>
					        <th>Tipo Hora</th>
					 
                </tr>
              </thead>
              <tbody>
			  @foreach($consulta as $consultas) 
                <tr>
            
					    <td>{{  date('d-m-Y', strtotime( $consultas->fecha_reg_avance)) }}</td>  
              <td>{{  $consultas->detalle_avance }}</td>  
              <td>{{  $consultas->rut_usuario }}</td>  
              <td>{{  $consultas->horas_netas }}</td>
              <td>{{  $consultas->tipo_hora }}</td>
        
				
                </tr>
               @endforeach
              </tbody>
            </table>

      


          </div>
        </main>
  



@endsection
		  