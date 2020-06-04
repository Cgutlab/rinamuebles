<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen' => 'imagenes/slider/kVGW3n9ssVBnLZ4fmVnfPqZBkOJMg1BzKmi5J8NQ.jpeg',
                'contenido' => '<p><strong>Especialistas en Mobiliario</strong></p>

<p>Dedicados al dise&ntilde;o, a la fabricaci&oacute;n y venta de mobiliario. Visite nuestro showroom en San Justo</p>',
                'seccion' => 'home',
                'orden' => 'aa',
                'created_at' => '2019-06-05 18:17:02',
                'updated_at' => '2019-06-05 18:17:02',
            ),
            1 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes/slider/1RYjQZM2EJQiqQefcvqpNuPv7dxBkpWJ5PVZb1kp.jpeg',
                'contenido' => '<p><strong>Descubr&iacute;&nbsp;nuevos espacios</strong></p>

<p>Dedicados al dise&ntilde;o, a la fabricaci&oacute;n y venta de mobiliario.<br />
Visite nuestro showroom en San Justo</p>',
                'seccion' => 'empresa',
                'orden' => 'aa',
                'created_at' => '2019-06-05 18:27:59',
                'updated_at' => '2019-06-05 18:27:59',
            ),
        ));
        
        
    }
}