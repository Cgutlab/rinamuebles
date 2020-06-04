<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Producto;
use App\ProductoImagen;
use App\Familia;
use App\Caracteristica;
class ProductoController extends Controller
{
    public function index($seccion)
    {
        if($seccion =="producto"){
            $productos = Producto::where('seccion','producto')->orderBy('id_superior', 'ASC')->orderBy('orden', 'ASC')->get();
            $titulo    = "Productos";
        } 
        if($seccion =="ambiente"){
            $productos = Producto::where('seccion','ambiente')->orderBy('orden', 'ASC')->get();
            $titulo    = "Ambientes";
        }  
        return view('adm.producto.index', compact('productos', 'seccion','titulo'));
    }
    public function showCreate($seccion)
    {
        $familias        = Familia::orderBy('orden', 'ASC')->get();
        $caracteristicas = Caracteristica::orderBy('orden', 'ASC')->get();
        $productos       = Producto::where('seccion', 'producto')->orderBy('orden', 'ASC')->get();
        $tamaño    = '465x335px';
        if($seccion =="producto"){
            $titulo    = "Productos";
            $tamaño    = '465x335px';
        } 
        if($seccion =="ambiente"){
            $titulo    = "Ambientes";
            $tamaño    = '725x485px';
        }  
        return view('adm.producto.create', compact('familias','caracteristicas','productos','titulo', 'tamaño', 'seccion'));
    }
    public function store(Request $request, Producto $item)
    {
        
        $galeria = [];
        if($request->hasFile('imagenes'))
            for ($i=0; $i < count($request->imagenes); $i++) {
                $ruta        = $request->file('imagenes.'.$i)->store('imagenes/Producto');
                $orden       = $request->orden_imagen[$i];
                $galeria[$i] = [
                    'imagen'  => $ruta, 
                    'orden' => $orden
                ];
            }
        
        $item->nombre           = $request->nombre;
        $item->contenido        = $request->contenido;
        $item->id_superior      = $request->familia;
        if(!is_null($request->caracteristicas))
            $item->caracteristicas = implode(',',$request->caracteristicas);
        else
            $item->caracteristicas = null;
        $item->seccion          = $request->seccion;
        $item->orden            = $request->orden;
        $item->save();
        
        $relacionados = [];
        if(!is_null($request->relacionados)){
            for ($i=0; $i < count($request->relacionados); $i++) {
                $relacionados[$i] = [
                    'id_relacionado'  => $request->relacionados[$i],
                ];
            }
        }
        $item->imagenes()->createMany($galeria);
        if(!is_null($relacionados))
            $item->relacionados()->attach($relacionados);
        $seccion = $request->seccion;
        //dd($item->caracteristicas);
        return redirect()->route('productos' ,$seccion)->with('alert', 'Registro Almacenado Exitosamente.');
}

    public function showEdit($id)
    {
        $productos    = Producto::where('seccion', 'producto')->orderBy('orden', 'ASC')->get();
        $producto     = Producto::find($id);
        $familias     = Familia::orderBy('orden', 'ASC')->get();
        $caracteristicas = Caracteristica::orderBy('orden', 'ASC')->get();
        $galeria      = $producto->imagenes;
        $relacionados = [];
        
        if($producto->seccion =="producto"){
            $titulo    = "Productos";
            $tamaño    = '465x335px';
        } 
        if($producto->seccion =="ambiente"){
            $titulo    = "Ambientes";
            $tamaño    = '725x485px';
        }  
        foreach ($producto->relacionados as $key => $value) {
            $relacionados[] = $value->pivot->id_relacionado;
        }
        $p_caracteristicas = explode(",", $producto->caracteristicas);
        return view('adm.producto.edit', compact('producto', 'p_caracteristicas', 'galeria', 'relacionados','familias','productos','caracteristicas','titulo', 'tamaño'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        //declaramos un array para almacenar la galeria
        //comprobamos que en el array de imagen_e exista un null
        //En caso de tener contenido lo guardamos junto a su orden
        //En caso de no tener le asignamos la nueva imagen y su orden
        $galeria = [];
        for ($i=0; $i < count($request->imagen_e); $i++) {
            if(!is_null($request->imagen_e[$i])){
                $ruta       = $request->imagen_e[$i];
                $orden      = $request->orden_imagen[$i];
            }
            else{
                $ruta       = $request->file('imagenes.'.$i)->store('imagenes/Producto');
                $orden      = $request->orden_imagen[$i];
            }
            $galeria[$i] = [
                'orden'  => $orden, 
                'imagen' => $ruta
            ];
        }

        $producto->nombre           = $request->nombre;
        $producto->contenido        = $request->contenido;
        $producto->id_superior      = $request->familia;
        if(!is_null($request->caracteristicas))
            $producto->caracteristicas = implode(',',$request->caracteristicas);
        else
            $producto->caracteristicas = null;
        $producto->seccion          = $request->seccion;
        $producto->orden            = $request->orden;
        $producto->save();

        //Declaramos un array y le insertamos los id de las bases relacionadas
        $relacionados = [];
        if(!is_null($request->relacionados)){
            for ($i=0; $i < count($request->relacionados); $i++) {
                $relacionados[$i] = [
                    'id_relacionado'  => $request->relacionados[$i],
                ];
            }
        }
        //Eliminamos los registros anteriores y volvemos a cargar
        
        $producto->imagenes()->delete();
        $producto->imagenes()->createMany($galeria);
        //Eliminamos los registros anteriores y volvemos a cargar
        if(!is_null($request->relacionados)){
            $producto->relacionados()->detach();
            $producto->relacionados()->attach($relacionados);
        }
        $seccion = $request->seccion;
        return redirect()->route('productos', $seccion)->with('alert', "Registro actualizado exitósamente" );
    }

    public function eliminar($id){
        $producto = Producto::find($id);
        $seccion  = $producto->seccion;
        foreach ($producto->imagenes as $key => $value) {
            Storage::delete($value->imagen);
        }
        $producto->imagenes()->delete();
        $producto->relacionados()->detach();
        $producto->delete();
        return redirect()->route('productos',$seccion)->with('alert', "Registro eliminado exitósamente" );
    }
}
