
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" >
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom" >
            <h1 class="h2">Empresas</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
			
				
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta Semana
              </button>
            </div>
          </div>
	
          <div class="table-responsive" style="width: 100%;" >
			  
			  <a class="btn btn-primary" href="/empresa/create" >Agregar Empresa</a>
			  
            <table class="table table-striped table-sm" >
              <thead>
                <tr>
                
                 
                  <th>Rut Empresa</th>
                  <th>Razon Social</th>
                  <th>Nombre Empresa</th>
				   <th>Telefono</th>
					<th>Direccion</th>
					<th>Giro</th>
					<th>Acciones</th>
					
                </tr>
              </thead>
              <tbody>
			  @foreach($empresas as $empresa) 
                <tr>
                  <td>{{  $empresa->id }}</td>
					<td>{{  $empresa->razon_social }}</td>
					<td>{{  $empresa->nombre_empresa }}</td>
					<td>{{  $empresa->telefono }}</td>
					<td>{{  $empresa->direccion }}</td>
					<td>{{  $empresa->giro }}</td>
			
					<td>
		
			
		<a href="/empresa/{{ $empresa->id }}" class="btn btn-info btn-lg">
		   <span class="glyphicon glyphicon-eye-open"></span></a>
		
		<a href="#" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-inbox"></span> 
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

@endsection