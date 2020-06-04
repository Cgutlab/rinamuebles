<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    protected $table = 'producto_imagenes';
    protected $fillable = [
        'id', 'imagen', 'id_producto', 'orden'
    ];
}
