<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{
    public function index($seccion)
    {
        $slider = slider::where('seccion',$seccion)->orderBy('orden', 'asc')->get();
        return view('adm.slider.index',compact('slider', 'seccion'));
    }

    public function showCreate($seccion)
    {
        $seccion = $seccion;
        return view('adm.slider.create',compact('seccion'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagen'))
        {
            $path = $request->file('imagen')->store('imagenes/slider');
        }
        else
            $path = null;
        $slider = new Slider();
        $slider->contenido = $request->contenido;
        $slider->imagen    = $path;
        $slider->seccion   = $request->seccion;
        $slider->orden     = $request->orden;
        $slider->save();
        return redirect()->route('slider', $slider->seccion)->with('alert', "Registro almacenado exitósamente" );
    }

    public function showEdit($id)
    {
        $slider = Slider::find($id);
        return view('adm.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->hasFile('imagen'))
        {
            Storage::delete($slider->imagen);
            $path = $request->file('imagen')->store('imagenes/slider');
        }else{
            $path = $slider->imagen;
        }

        $slider->contenido = $request->contenido;
        $slider->imagen    = $path;
        $slider->seccion   = $request->seccion;
        $slider->orden     = $request->orden;
        $slider->save();
        return redirect()->route('slider', $slider->seccion)->with('alert', "Registro actualizado exitósamente" );
    }

    public function eliminar($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
    }
}
