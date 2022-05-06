<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\\Http\\Controllers\\Prueba')->group(function () {
    /* Autor */
    require app_path('Routes/AutorRoute.php');
    /* Peliculas */
    require app_path('Routes/PeliculaRoute.php');
    /* Categorias */
    require app_path('Routes/CategoriaRoute.php');
});


