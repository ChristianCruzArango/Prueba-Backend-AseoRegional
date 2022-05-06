<?php

namespace App\Models\Prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function peliculas () {
    	return $this->hasMany(Pelicula::class);
    }

    use HasFactory;
}
