<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Logo;
use App\Dato;
use App\Red;
use App\Metadato;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        //Logos
        $logo_footer  = Logo::where('seccion', "footer")->first();
        $logo_header  = Logo::where('seccion', "header")->first();
        View::share('logo_footer', $logo_footer);
        View::share('logo_header', $logo_header);

        //metadatos
        $metadato     = Metadato::where('seccion', 'home')->first();
        View::share('metadato', $metadato);


        //Datos de la Empresa
        $datos     = Dato::first();
        $direccion = json_decode(optional($datos)->direccion, true);
        $telefonos = json_decode(optional($datos)->telefono,true);
        $telefono  = $telefonos[0];
        $emails    = json_decode(optional($datos)->email,true);
        $email     = $emails[0]['email'];
        unset($emails[0]);
        View::share('direccion', $direccion);
        View::share('telefono_header', $telefono);
        View::share('telefonos', $telefonos);
        View::share('emails', $emails);
        View::share('email', $email);


        //Redes sociales
        $redes = Red::first();
        View::share('redes', $redes);
    }
}
