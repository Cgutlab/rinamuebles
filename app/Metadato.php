<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadato extends Model
{
    protected $table = 'metadatos';
    protected $fillable = [
        'id', 'keywords', 'descripcion', 'seccion'
    ];
}
