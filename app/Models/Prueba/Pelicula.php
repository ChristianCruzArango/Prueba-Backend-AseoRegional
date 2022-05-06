<?php

namespace App\Models\Prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'autor_id',
        'categoria_id',
        'fecha_lanzamiento',
        'productora'
    ];

    public function categoria () {
    	return $this->belongsTo(Categoria::class);
    }

    public function autor () {
    	return $this->belongsTo(Autor::class);
    }
}
