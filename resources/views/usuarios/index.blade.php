
@extends('layouts.main')

@section('content')




   <main role="main" class="col-md-9 ml-sm-auto col-lg-30 pt-1 px-4" >
         
	
          <div class="table-responsive" style="width: 140%;" >
			  
			  <a class="btn btn-primary" href="/register" >Registrar</a>
			  
			  
			  <br><br>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                  <th>Nombre</th>
                 <!-- <th>Rut Empresa</th> -->
                  <th>Correo</th>
                <!--  <th>Horas Estimada</th> -->
				   <th>Rut</th>
					<th>Ver</th>

					
                </tr>
              </thead>
              <tbody>
			  @foreach($users as $user) 
                <tr>
                  <td>{{  $user->name }}</td>
               
					<td>{{  $user->email }}</td>
				
					<td>{{  $user->rut_usuario }}</td>
			
					<td>
			
		<a href="#" class="btn btn-info btn-lg" >
		   <span class="glyphicon glyphicon-eye-open" ></span></a>


		
    	</td>
    

                </tr>
               @endforeach
              </tbody>
            </table>

            {{ $users->links() }}

          </div>


          	 

        </main>

@endsection