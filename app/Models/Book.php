<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Configura el nombre de la tabla si no coincide con el plural del modelo
    protected $table = 'books';

    // Especifica los campos que son asignables
    protected $fillable = [
        'title',
            'author',
            'description',
            'publication_year'
            ];

    // Especifica que la clave primaria es 'id_book'
    protected $primaryKey = 'id';

    // Si la clave primaria no es autoincremental, añade esto
    public $incrementing = true;

    // Si la clave primaria no es de tipo entero, añade esto
    protected $keyType = 'int';
}


