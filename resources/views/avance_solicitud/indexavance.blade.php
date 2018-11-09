
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
        
	 
  
	
          <div class="table-responsive" style="width: 140%;" >
			  
			  <a class="btn btn-primary" href="/solicitud/create" >Agregar Solicitud</a>
			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th>Id</th>
                 <!-- <th>Rut Empresa</th> -->
                  <th>Fecha Registro</th>
                <!--  <th>Horas Estimada</th> -->
				   <th>Descripción</th>
					<th>Rut Usuario</th>
			<!--		<th>Fecha Inicio</th> -->
			<!--		<th>Fecha Estimada</th> -->
					<th>Horas netas</th>
					<th>Tipo Hora</th>
					<th>Fecha Avance</th>
					<th>Detalle Avance</th>
                </tr>
              </thead>
              <tbody>
			  @foreach($consulta as $consultas) 
                <tr>
   
					<td>{{  $consultas->detalle_avance }}</td>  
				
					<td>
		
				
		<a href="#" class="btn btn-info btn-lg" >
		   <span class="glyphicon glyphicon-eye-open" ></span></a>
		   
		<a href="#" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> 
        </a>
		   
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
		  