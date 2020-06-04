<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Home;
class HomeController extends Controller
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

    public function showEdit($seccion)
    {
        
        $home     = Home::where('seccion', $seccion)->first();
        switch ($seccion) {
            case 'amoblamiento':
                $tamaño = '550x244px';
                break;
            case 'producto':
                $tamaño = '550x243px';
                break;
            case 'desarrollo':
                $tamaño = '695x375px';
                break;
            default:
               $tamaño = '535x296px';
                break;
        }
        return view('adm.home.edit', compact('home','tamaño', 'seccion'));
    }

    public function update(Request $request, $data)
    {
        $contenido = Home::find($data);
        if ($request->hasFile('imagen'))
        {
            Storage::delete($contenido->imagen);
            $path = $request->file('imagen')->store('imagenes/home');
        }else{
            $path = $contenido->imagen;
        }
        $contenido->titulo    = $request->titulo;
        $contenido->contenido = $request->contenido;
        $contenido->imagen    = $path;
        $contenido->seccion   = $request->seccion;
        $contenido->orden     = $request->orden;
        $contenido->save();
        return redirect()->route('home_show', $request->seccion)->with('alert', "Registro actualizado exitósamente" );

    }

    public function eliminar(){
        return null;
    }

}
