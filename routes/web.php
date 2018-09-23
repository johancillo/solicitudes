<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets', 'TicketController@index')->name('tickets.index');

Route::get('/tickets/create','TicketController@create')->name('tickets.create');
Route::post('/tickets/create','TicketController@store')->name('tickets.store');

Route::get('/tickets/delete/{ticket}','TicketController@delete')->name('tickets.delete');
Route::post('/tickets/delete/{ticket}','TicketController@destroy')->name('tickets.destroy');


Route::get('/tickets/{ticket}','TicketController@show')->name('tickets.show');
Route::post('/tickets/{ticket}','TicketController@update')->name('tickets.update');
//Route::post('/tickets/{ticket}', 'TicketController@update')->name('tickets.update');