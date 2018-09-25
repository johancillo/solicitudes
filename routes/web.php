<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/solicitudes', 'TicketController@index')->name('tickets.index');

Route::get('/solicitud/create','TicketController@create')->name('tickets.create');
Route::post('/tickets/create','TicketController@store')->name('tickets.store');

Route::get('/solicitud/delete/{ticket}','TicketController@delete')->name('tickets.delete');
Route::post('/solicitud/delete/{ticket}','TicketController@destroy')->name('tickets.destroy');


Route::get('/solicitud/{ticket}','TicketController@show')->name('tickets.show');
Route::post('/solicitud/{ticket}','TicketController@update')->name('tickets.update');
//Route::post('/tickets/{ticket}', 'TicketController@update')->name('tickets.update');