<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;
use App\Metadato;
use App\Dato;
class ContactoController extends Controller
{
    public function index(Request $request)
    {
        $metadato  = Metadato::where('seccion', 'presupuesto')->first();
        $terminos  = Dato::first()['terminos'];
        return view('public.contacto', compact('metadato', 'terminos'));
    }
    public function enviarMail(Request $request)
    {

        $datos                 = Dato::first();
        $emails                = json_decode($datos->email, true);
        $data['email_empresa'] = $emails[0]['email'];
        $data['nombre']        = $request->nombre;
        $data['localidad']     = $request->localidad;
        $data['email']         = $request->email;
        $data['telefono']      = $request->telefono;
        $data['mensaje']       = $request->informacion;
        $secret                = '6Ldbq5oUAAAAAMeEl8qxphxTxeoaPJl3uuDbUfHj';
        $response              = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$request->{'g-recaptcha-response'}."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $g_response            = json_decode($response);
        //$g_response->success   = true;
        if($g_response->success===true) {
             Mail::to($data['email_empresa'])->send(new Contacto($data));
            return redirect()->route('contacto')->with('alert', "Solicitud realizada exitósamente" );
        }
        else{
            return redirect()->route('contacto')->with('recaptcha-error', true);
        }
    }
}
