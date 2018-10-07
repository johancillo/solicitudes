
@extends('layouts.main')

@section('content')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Eliminar Solicitud: 12</h1>  
            <div class="btn-toolbar mb-2 mb-md-0">
            
                
        
            </div>
          </div>
          
       <form action="" method="post">
           <div class="form-group">
                <label for="id">Solicitud :</label>
                <input type="text" id="id" name="id" class="form-control" readonly="true" value="12" disabled/>
            </div>
            
           <div class="form-group">
                <label for="rut_empresa">Rut Empresa:</label>
                <input type="text" id="rut_empresa" name="rut_empresa" class="form-control" value="15" disabled/>
           </div>
            <div class="form-group">
                <label for="correo_cliente">Correo Cliente:</label>
                <input type="text" id="correo_cliente" name="correo_cliente" class="form-control" value="dasd@asda.ca" disabled/>
           
           <<a class="btn btn-warning">
            <span class="glyphicon glyphicon-inbox"></span> Eliminar
       </a>
       </form>
         
        </main>

@endsection
