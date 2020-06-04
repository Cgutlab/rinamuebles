<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Producto;
use App\Metadato;
class BuscadorController extends Controller
{
    public function index(Request $request)
    {
        //dd('hola');
        //dd($request->datos);
        if(!is_null($request->datos))
            $coincidencias = Producto::where('nombre', 'LIKE', '%'.$request->datos.'%')->orwhere('contenido', 'LIKE', '%'.$request->datos.'%')->orderBy('seccion', 'ASC')->orderBy('orden', 'ASC')->get();
        else
            $coincidencias = null;
        $metadato = Metadato::where('seccion', 'home')->first();
        //dd($coincidencias);
        return view('public.buscador', compact('coincidencias'));
    }
}
