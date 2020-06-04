<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoRelacion extends Model
{
    protected $table = 'producto_relacionados';
    protected $fillable = [
        'id', 'id_producto',  'id_relacionado'
    ];
}
