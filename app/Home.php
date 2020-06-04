<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    protected $fillable = [
        'id', 'titulo', 'contenido', 'imagen', 'seccion', 'orden'
    ];
}
