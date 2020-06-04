<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'id', 'nombre', 'contenido', 'seccion', 'id_superior', 'orden'
    ];

    public function relacionados() {
        return $this->belongsToMany('App\Producto', 'producto_relacionados', 'id_producto', 'id_relacionado');
    }
/*  Ver que hacer con esto o eliminarlo
    public function listRelacionados() {
        return $this->hasMany('App\Producto', 'producto_relacionados', 'id_producto');
    }
*/
    public function familia(){
        return $this->belongsTo('App\Familia', 'id_superior');
    }

    public function imagenes() {
        return $this->hasMany('App\ProductoImagen', 'id_producto')->orderBy('orden', 'ASC');
    }
}
