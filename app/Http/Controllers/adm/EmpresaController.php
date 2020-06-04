<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Empresa;
class EmpresaController extends Controller
{
    public function index(){
        return null;
    }

    public function showCreate(){
        return null;
    }

    public function store(){
        return null;
    }

    public function showEdit()
    {
        
        $empresa = Empresa::first();
        return view('adm.empresa.edit', compact('empresa'));
    }

    public function update(Request $request, $data)
    {
        $empresa = Empresa::find($data);
        $empresa->titulo    = $request->titulo;
        $empresa->contenido = $request->contenido;
        $empresa->save();
        return redirect()->route('empresa')->with('alert', "Registro actualizado exitósamente" );

    }

    public function eliminar(){
        return null;
    }
}
