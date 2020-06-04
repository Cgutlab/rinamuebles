<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Producto;
use App\Caracteristica;
use App\Metadato;
class ProductoController extends Controller
{
    public function index()
    {
        $metadato  = Metadato::where('seccion', 'producto')->first();
        $familias  = Familia::where('active', '1')->orderBy('orden', 'ASC')->get();
        return view('public.familia', compact('familias', 'metadato'));
    }
    public function productos($id)
    {
        $metadato      = Metadato::where('seccion', 'producto')->first();
        $familia       = Familia::find($id);
        $familias      = Familia::where('active', '1')->orderBy('orden', 'ASC')->get();
        $productos     = Producto::orderBy('orden', 'ASC')->get();
        $producto_list = Producto::where('id_superior', $id)->orderBy('orden', 'ASC')->get();
        return view('public.productos', compact('productos', 'familias','familia', 'metadato','producto_list'));
    }
    public function producto($id)
    {
        $metadato         = Metadato::where('seccion', 'producto')->first();
        $familias         = Familia::where('active', '1')->orderBy('orden', 'ASC')->get();
        $caracteristicas  = Caracteristica::orderBy('orden', 'ASC')->get();
        $productos        = Producto::orderBy('orden', 'ASC')->get();
        $producto         = Producto::find($id);
        foreach ($caracteristicas as $key => $value) {
            if(in_array($value->id, explode(",", $producto->caractersticas)))
                $caracteristicas->forget($key);
        }
        return view('public.producto', compact('productos', 'familias', 'metadato','producto', 'caracteristicas'));
    }
}
