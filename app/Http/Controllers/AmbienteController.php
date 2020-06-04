<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Metadato;
class AmbienteController extends Controller
{
    public function index()
    {
        $metadato  = Metadato::where('seccion', 'ambientes')->first();
        $ambientes = Producto::where('id_superior', null)->orderBy('orden', 'ASC')->get();
        return view('public.ambientes', compact('ambientes', 'metadato'));
    }
    public function ambiente($id)
    {
        $metadato = Metadato::where('seccion', 'ambientes')->first();
        $ambiente = Producto::find($id);
        return view('public.ambiente', compact('ambiente', 'metadato'));
    }
}
