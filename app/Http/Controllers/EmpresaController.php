<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Metadato;
use App\Empresa;
class EmpresaController extends Controller
{
    public function index()
    {
        $sliders   = Slider::where('seccion', 'empresa')->orderBy('orden', 'ASC')->get();
        $metadato  = Metadato::where('seccion', 'empresa')->first();
        $empresa   = Empresa::first();
        return view('public.empresa', compact('sliders', 'metadato', 'empresa'));
    }
}
