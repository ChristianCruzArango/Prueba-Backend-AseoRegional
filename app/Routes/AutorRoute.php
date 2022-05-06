<?php

use Illuminate\Support\Facades\Route;

Route::get('autors','AutorController@index');
Route::post('create/autor','AutorController@store');
Route::post('update/autor','AutorController@update');
Route::get('delete/autor','AutorController@destroy');
