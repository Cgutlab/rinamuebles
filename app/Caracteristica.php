<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';
    protected $fillable = [
        'id', 'contenido', 'imagen', 'orden'
    ];
}
