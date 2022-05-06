<?php

use Illuminate\Support\Facades\Route;

Route::get('categorias','CategoriaController@index');
Route::post('create/categoria','CategoriaController@store');
Route::post('update/categoria','CategoriaController@update');
Route::get('delete/categoria','CategoriaController@destroy');
