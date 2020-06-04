<?php

use Illuminate\Database\Seeder;

class DatosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('datos')->delete();
        
        \DB::table('datos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'direccion' => '{"calle":"Colectora Monse\\u00f1or Rodolfo Bufano","altura":"3057","localidad":"San Justo","provincia":"Buenos Aires","pais":null}',
                'telefono' => '["01144847667","01144849229"]',
                'email' => '[{"seccion":"principal","email":"info@rinamuebles.com.ar"}]',
                'terminos' => '<p>Estos son los terminos de la empresa:&nbsp;</p>',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:38:11',
            ),
        ));
        
        
    }
}