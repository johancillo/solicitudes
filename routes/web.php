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

// RUTAS DE CLIENTES

Route::get('/clientes', 'ClienteController@index')->name('clientes.index');

Route::get('/clientes/create','ClienteController@create')->name('clientes.create');
Route::post('/clientes/create','ClienteController@store')->name('clientes.store');

Route::get('/clientes/delete/{cliente}','ClienteController@delete')->name('clientes.delete');
Route::post('/clientes/delete/{cliente}','ClienteController@destroy')->name('clientes.destroy');

Route::get('/clientes/{cliente}','ClienteController@show')->name('clientes.show');
Route::post('/clientes/{cliente}','ClienteController@update')->name('clientes.update');


// RUTAS DE CONEXION

Route::get('/conexion/{empresa}','ConexionController@index')->name('conexion.index'); //muestra lista avances por id


//USUARIOS
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
