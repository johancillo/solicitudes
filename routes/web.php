<?php


Route::get('/', function () {
    return view('Auth/login');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/





// ------------------ RUTAS DE PRUEBA
//Route::get('/x', 'TicketController@holamundo')->name('tickets.index'); // RUTA DE PRUEBAS



 //-------------RUTAS SOLICITUDES-------------
Route::get('/solicitudes', 'TicketController@index')->name('tickets.index');

Route::get('/solicitud/create','TicketController@create')->name('tickets.create');
Route::post('/solicitud/create','TicketController@store')->name('tickets.store');

Route::get('/solicitud/delete/{ticket}','TicketController@delete')->name('tickets.delete');
Route::post('/solicitud/delete/{ticket}','TicketController@destroy')->name('tickets.destroy');

Route::get('/solicitud/{ticket}','TicketController@show')->name('tickets.show');
Route::post('/solicitud/{ticket}','TicketController@update')->name('tickets.update');
//Route::post('/tickets/{ticket}', 'TicketController@update')->name('tickets.update');

Route::get('/solicitud/reporte/{fi}/{fe}', 'TicketController@reportExcelTickets')->name('tickets.reporte');


//--------------------------------------------------------

//---RUTAS EMPRESA--------
Route::get('/empresas', 'EmpresaController@index')->name('empresa.index');

Route::get('/empresa/create','EmpresaController@create')->name('empresa.create');
Route::post('/empresa/create','EmpresaController@store')->name('empresa.store');

Route::get('/empresa/delete/{empresa}','EmpresaController@delete')->name('empresa.delete');
Route::post('/empresa/delete/{empresa}','EmpresaController@destroy')->name('empresa.destroy');


Route::get('/empresa/{empresa}','EmpresaController@show')->name('empresa.show');
Route::post('/empresa/{empresa}','EmpresaController@update')->name('empresa.update');
//----------------------------------------------------


//RUTA AVANCE SOLICITUD

//Route::get('/avance/{avanceSolicitud}','AvanceSolicitudController@show')->name('avanceSolicitud.show');
	
Route::get('/avance/{ticket}','AvanceSolicitudController@mostrar')->name('avanceSolicitud.mostrar');//abre ventana de creacion avance

Route::post('/avance/{ticket}','AvanceSolicitudController@store')->name('avanceSolicitud.store');//almacenamiento


Route::get('/avances/solicitud/{ticket}','AvanceSolicitudController@index')->name('avanceSolicitud.index'); //muestra lista avances por id


// MUESTRA LOS AVANCES DE UNA SOLICITUD
Route::get('/avances/solicitud/modificar/{avanceSolicitud}','AvanceSolicitudController@show')->name('avanceSolicitud.show');
//ACTUALIZA UNA SOLICITUD
Route::post('/avances/solicitud/modificar/{avanceSolicitud}','AvanceSolicitudController@update')->name('avanceSolicitud.update');




//------------------------------------------------------------------------------------
// RUTAS DE CLIENTES

Route::get('/clientes', 'ClienteController@index')->name('clientes.index');

Route::get('/clientes/solicitudes/{cliente}', 'ClienteController@mostrar_por_solicitud')->name('clientes.mostrar_por_solicitud');


Route::get('/clientes/reporte/{cliente}', 'ClienteController@reportExcelCliente')->name('clientes.reportExcelCliente');// REPORTE


Route::get('/clientes/create','ClienteController@create')->name('clientes.create');
Route::post('/clientes/create','ClienteController@store')->name('clientes.store');

Route::get('/clientes/delete/{cliente}','ClienteController@delete')->name('clientes.delete');
Route::post('/clientes/delete/{cliente}','ClienteController@destroy')->name('clientes.destroy');

Route::get('/clientes/{cliente}','ClienteController@show')->name('clientes.show');
Route::post('/clientes/{cliente}','ClienteController@update')->name('clientes.update');


//----------------------------------------------------------------------------------------------------
// RUTAS DE CONEXION

Route::get('/conexion/{empresa}','ConexionController@index')->name('conexion.index'); //muestra lista avances por id
Route::get('/conexion/mostrar/{empresa}','ConexionController@mostrar')->name('conexion.mostrar');
Route::post('/conexion/mostrar/{empresa}','ConexionController@store')->name('conexion.store');


Route::get('/conexion/create','ConexionController@create')->name('conexion.create');


Route::get('/conexion/delete/{conexion}','ConexionController@delete')->name('conexion.delete');
Route::post('/conexion/delete/{conexion}','ConexionController@destroy')->name('conexion.destroy');

 Route::get('/conexion/update/{conexion}','ConexionController@show')->name('conexion.show');
Route::post('/conexion/update/{conexion}','ConexionController@update')->name('conexion.update');

//----------------------------------------------------------------
//RUTAS DE FACTURA

Route::get('/facturas', 'FacturaController@index')->name('facturas.index');

Route::get('/factura/create','FacturaController@create')->name('facturas.create');
Route::post('/factura/create','FacturaController@store')->name('facturas.store');

Route::get('/factura/delete/{factura}','FacturaController@delete')->name('facturas.delete');
Route::post('/factura/delete/{factura}','FacturaController@destroy')->name('facturas.destroy');

Route::get('/factura/{factura}','FacturaController@show')->name('facturas.show');
Route::post('/factura/{factura}','FacturaController@update')->name('facturas.update');

//---------------------------------------------------------------------------------------------
// RUTAS DE PAGOS
Route::get('/pago/{factura}', 'PagoController@index')->name('pagos.index');

Route::get('/pago/create/{factura}','PagoController@create')->name('pagos.create');
Route::post('/pago/create/{factura}','PagoController@store')->name('pagos.store');

Route::get('/pago/delete/{pago}','PagoController@delete')->name('pagos.delete');
Route::post('/pago/delete/{pago}','PagoController@destroy')->name('pagos.destroy');

Route::get('/pago/update/{pago}','PagoController@show')->name('pagos.show');
Route::post('/pago/update/{pago}','PagoController@update')->name('pagos.update');



// RUTA DE FORMA DE PAGO-----------------------------------------------------------------------

Route::get('/formapago', 'FormaPagoController@index')->name('formapago.index');



Route::get('/formapago/reporte/{type}', 'FormaPagoController@reportExcel')->name('formapago.reporte');

Route::get('/formapago/reportExcelSolicitud/{fi}', 'FormaPagoController@reportExcelSolicitud')->name('formapago.reportExcelSolicitud');




Route::get('/formapago/create/','FormaPagoController@create')->name('formapago.create');
Route::post('/formapago/create/','FormaPagoController@store')->name('formapago.store');

Route::get('/formapago/delete/{pago}','FormaPagoController@delete')->name('formapago.delete');
//Route::post('/formapago/delete/{pago}','FormaPagoController@destroy')->name('formapago.destroy');

Route::get('/formapago/update/{formaPago}','FormaPagoController@show')->name('formapago.show');
Route::post('/formapago/update/{formaPago}','FormaPagoController@update')->name('formapago.update');



//--------------------------------------------------------------------
//USUARIOS
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/hola', function () {

	$formapagos = formaPago::latest();
    $pdf = PDF::loadView('forma-pago.index_formapago', compact('formapagos'));


	return $pdf->stream();


});

