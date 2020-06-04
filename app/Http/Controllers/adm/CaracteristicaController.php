<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Caracteristica;
class CaracteristicaController extends Controller
{
    public function index()
    {
        $caracteristicas = Caracteristica::orderBy('orden', 'asc')->get();
        return view('adm.caracteristicas.index', compact('caracteristicas'));
    }

    public function showCreate()
    {
        return view('adm.caracteristicas.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagen'))
        {
            $path = $request->file('imagen')->store('imagenes/caracteristicas');
        }
        else
        $path = null;
        
        $caracteristica = new Caracteristica();
        $caracteristica->contenido = $request->contenido;
        $caracteristica->imagen = $path;
        $caracteristica->orden  = $request->orden;
        $caracteristica->save();
        return redirect()->route('caracteristicas')->with('alert', "Registro almacenado exitósamente" );
    }

    public function showEdit($id)
    {
        $caracteristica = Caracteristica::find($id);
        return view('adm.caracteristicas.edit', compact('caracteristica'));
    }

    public function update(Request $request, $id)
    {
        $caracteristica = Caracteristica::find($id);
        if ($request->hasFile('imagen'))
        {
            Storage::delete($caracteristica->imagen);
            $path = $request->file('imagen')->store('imagenes/caracteristicas');
        }else{
            $path = $caracteristica->imagen;
        }

        $caracteristica->contenido  = $request->contenido;
        $caracteristica->imagen  = $path;
        $caracteristica->orden   = $request->orden;
        $caracteristica->save();
        return redirect()->route('caracteristicas')->with('alert', "Registro actualizado exitósamente");
    }

    public function eliminar($id){
        $caracteristica = Caracteristica::find($id);
        Storage::delete($caracteristica->imagen);
        $caracteristica->delete();
        return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
    }
}
