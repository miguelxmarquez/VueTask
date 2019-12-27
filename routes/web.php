<?php

Route::get('/', function () {
    return view('welcome');
});

// Task Routes for API REST
Route::get('/task', 'TaskController@index');
Route::get('/task/search', 'TaskController@show');
Route::put('/task/update', 'TaskController@update');
Route::post('/task/save', 'TaskController@store');
Route::delete('/task/destroy/{id}', 'TaskController@destroy');
