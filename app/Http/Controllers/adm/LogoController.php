<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logo;
class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::orderBy('id', 'ASC')->get();
        return view('adm.logo.index', compact('logo'));
    }
    public function showCreate()
    {
        return view('adm.logo.create');
    }

    public function store(Request $request, Logo $item)
    {
        if ($request->hasFile('imagen'))
        {
            $path = $request->file('imagen')->store('imagenes/logo');
            $item->imagen      = $path;
        }
        $item->seccion   = $request->seccion;
        $item->save();
        return redirect()->route('logo')->with('status', 'Se añadio un nuevo Logo.');
}

    public function showEdit($id)
    {
        $logo = Logo::find($id);
        return view('adm.logo.edit', compact('logo'));
    }

    public function update(Request $request, $data)
    {
        $logo = Logo::find($data);
        if ($request->hasFile('imagen'))
        {
            $path = $request->file('imagen')->store('imagenes/logo');
            $logo->imagen      = $path;
        }
        else
            $logo->imagen      = $logo->imagen;

        $logo->seccion = $request->seccion;
        $logo->save();
            return redirect()->route('logo')->with('alert', "Registro actualizado exitósamente" );
    }
}
