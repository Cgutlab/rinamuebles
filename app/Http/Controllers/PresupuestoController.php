<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Presupuesto;
use App\Metadato;
use App\Dato;
class PresupuestoController extends Controller
{
    public function index(Request $request)
    {
        if(!is_null($request->producto) )
            $producto = 'Estoy interesado en el producto:'.$request->producto;
        else
            $producto = null;
        $metadato  = Metadato::where('seccion', 'presupuesto')->first();
        $terminos  = Dato::first()['terminos'];
        return view('public.presupuesto', compact('metadato', 'terminos', 'producto'));
    }
    public function enviarMail(Request $request)
    {
        if ($request->hasFile('archivo'))
        {
            $data['archivo'] = $request->file('archivo')->store('archivo');
        }
        else
            $data['archivo'] = null;

        $datos                 = Dato::first();
        $emails                = json_decode($datos->email, true);
        $data['email_empresa'] = $emails[0]['email'];
        dd($data);
        $data['nombre']        = $request->nombre;
        $data['localidad']     = $request->localidad;
        $data['email']         = $request->email;
        $data['telefono']      = $request->telefono;
        $data['informacion']   = $request->informacion;
        $secret                = '6Ldbq5oUAAAAAMeEl8qxphxTxeoaPJl3uuDbUfHj';
        $response              = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$request->{'g-recaptcha-response'}."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $g_response            = json_decode($response);
        //$g_response->success   = true;
        if($g_response->success===true) {
            Mail::to($data['email_empresa'])->send(new Presupuesto($data));
            return redirect()->route('presupuesto')->with('alert', "Solicitud realizada exitósamente" );
        }
        else{
            return redirect()->route('presupuesto')->with('recaptcha-error', true);
        }
    }
}
