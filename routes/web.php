<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/solicitudes', 'TicketController@index')->name('tickets.index');

Route::get('/solicitud/create','TicketController@create')->name('tickets.create');
Route::post('/solicitud/create','TicketController@store')->name('tickets.store');

Route::get('/solicitud/delete/{ticket}','TicketController@delete')->name('tickets.delete');
Route::post('/solicitud/delete/{ticket}','TicketController@destroy')->name('tickets.destroy');


Route::get('/solicitud/{ticket}','TicketController@show')->name('tickets.show');
Route::post('/solicitud/{ticket}','TicketController@update')->name('tickets.update');
//Route::post('/tickets/{ticket}', 'TicketController@update')->name('tickets.update');


Route::get('/empresas', 'EmpresaController@index')->name('empresa.index');

Route::get('/empresa/create','EmpresaController@create')->name('empresa.create');
Route::post('/empresa/create','EmpresaController@store')->name('empresa.store');

Route::get('/empresa/delete/{empresa}','EmpresaController@delete')->name('empresa.delete');
Route::post('/empresa/delete/{empresa}','EmpresaController@destroy')->name('empresa.destroy');


Route::get('/empresa/{empresa}','EmpresaController@show')->name('empresa.show');
Route::post('/empresa/{empresa}','EmpresaController@update')->name('empresa.update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
