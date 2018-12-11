
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
        
          <div class="table-responsive" style="width: 120%;" >
			  
			  <a  href="#" class="btn btn-success">
		    <span class="glyphicon glyphicon-plus"></span> Agregar Avance
	   </a>	
			  <a class="btn btn-info" href="javascript:history.back()" >Volver</a>
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th>Fecha Registro</th>   
                  <th>Hora Registro</th>  
				          <th>Descripción</th>
					        <th>Rut Usuario</th>
					        <th>Horas netas</th>
					        <th>Tipo Hora</th>
					     <!--   <th>Fecha Avance</th> -->
					        <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
			  @foreach($consulta as $consultas) 
                <tr>
   
					 <!--  <td>{{  $consultas->id_solicitud }}</td>-->
              <td>{{  date('d-m-Y', strtotime( $consultas->fecha_reg_avance)) }}</td>  
              <td>{{  date('H:i', strtotime( $consultas->fecha_reg_avance)) }}</td>  
              <td>{{  $consultas->detalle_avance }}</td>  
              <td>{{  $consultas->rut_usuario }}</td>  
              <td>{{  $consultas->horas_netas }}</td>
              <td>{{  $consultas->tipo_hora }}</td>
            <!--  <td>{{ date('d-m-Y', strtotime($consultas->fecha_avance))   }}</td>                    -->
            

				
					<td>
		
				
		<a href="/avances/solicitud/modificar/{{$consultas->id}}" class="btn btn-info btn-lg" >
		   <span class="glyphicon glyphicon-pencil" ></span></a>
		   
		   
		<a href="#" class="btn btn-danger btn-lg">
          <span class="glyphicon glyphicon-trash" ></span>  
        </a>				
				
                </tr>
               @endforeach
              </tbody>
            </table>

      


          </div>
        </main>
  
<script type="text/javascript">

    $('.date').datepicker({  

      // format: 'mm-dd-yyyy',
	   Language: "es",
        autoclose: true

     });  

</script>  



@endsection
		  