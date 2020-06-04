<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Red;
class RedesController extends Controller
{
    public function index(){
        $redes = Red::get();
        return view('adm.redes.index', compact('redes'));
    }

    public function showCreate(){
        return null;
    }

    public function store(){
        return null;
    }

    public function showEdit($id)
    {
        $red = Red::find($id);
        return view('adm.redes.edit', compact('red'));
    }

    public function update(Request $request, $id)
    {
        $redes = Red::find($id);
        $redes->nombre = $request->nombre;
        $redes->url    = $request->url; 
        $redes->save();
        return redirect()->route('redes')->with('alert', "Registro actualizado exitósamente" );

    }

    public function eliminar(){
        return null;
    }
}