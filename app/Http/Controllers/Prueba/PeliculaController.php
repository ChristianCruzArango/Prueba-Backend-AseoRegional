<?php

namespace App\Http\Controllers\Prueba;

use App\Models\Prueba\Pelicula;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeliculaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelicula = Pelicula::with('categoria','autor')->get();
        return response()->json($pelicula,200);
    }

    /* Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $pelicula = Pelicula::create($request->all());
       return response()->json($pelicula,201);
   }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pelicula =  Pelicula::find($request->id)->update($request->all());
        return response()->json($pelicula, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $pelicula =  Pelicula::find($request->id)->delete();
       return response()->json($pelicula, 200);
    }
}
