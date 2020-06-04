<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dato;
class DatoController extends Controller
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
        $dato     = Dato::first();
        $telefono = null;
        $email    = null;
        $terminos = null;
        $direccion= null;
        if($dato){
            //convertimos el json en arrays
            if($seccion == 'telefono')
        	    $telefono  = json_decode($dato->telefono, true);
            if($seccion == 'email')
                $email     = json_decode($dato->email, true);
            if($seccion == 'direccion')
                $direccion = json_decode($dato->direccion, true);
            if($seccion == 'terminos')
                $terminos  = $dato->terminos;
        }
        //los mandamos a la vista
        return view('adm.datos.edit', compact('telefono','email','direccion', 'terminos', 'seccion'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $dato = Dato::first();
    
        if ($request->seccion=='telefono') {
            //convertimos en json para almacenarlo
            $telefono = [];
            for ($i=0; $i < count($request->telefono); $i++) { 
                $telefono[$i] =  $request->telefono[$i];
            
            }
	        $dato->telefono  = json_encode($telefono);
        }
        if($request->seccion=='email'){
            $email = [];
            for ($i=0; $i < count($request->seccion_email); $i++) {
                $email[$i] = [
                    "seccion" => $request->seccion_email[$i],
                    "email" => $request->email[$i]
                ];
            }
        	$dato->email     = json_encode($email);
        }
        if($request->seccion == 'direccion'){
            $direccion = [
                'calle' => $request->calle,
                'altura' => $request->altura,
                'localidad' => $request->localidad,
                'provincia' => $request->provincia,
                'pais' => $request->pais
            ];
            $dato->direccion = json_encode($direccion);
        }
        if($request->seccion == 'wsp')
            $dato->wsp       = $request->wsp;

        if($request->seccion == 'terminos')
            $dato->terminos  = $request->terminos;
        
        $dato->save();
        return redirect()->route('datos_show', $request->seccion)->with('alert', "Registro actualizado exitósamente" );

    }

    public function eliminar(){
        return null;
    }
}
