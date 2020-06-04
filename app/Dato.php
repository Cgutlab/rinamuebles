<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $table = 'datos';
    protected $fillable = [
        'id', 'telefono', 'email', 'direccion', 'terminos'
    ];
}
