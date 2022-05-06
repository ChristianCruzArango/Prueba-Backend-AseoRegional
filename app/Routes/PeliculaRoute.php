<?php

use Illuminate\Support\Facades\Route;

Route::get('peliculas','PeliculaController@index');
Route::post('create/pelicula','PeliculaController@store');
Route::post('update/pelicula','PeliculaController@update');
Route::get('delete/pelicula','PeliculaController@destroy');
