<?php

namespace App\Models\Prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function peliculas () {
    	return $this->hasMany(Pelicula::class);
    }
}
