<?php

use Illuminate\Database\Seeder;

class MetadatosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('metadatos')->delete();
        
        \DB::table('metadatos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'keyword' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'descripcion' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'seccion' => 'home',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:06:59',
            ),
            1 => 
            array (
                'id' => 2,
                'keyword' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'descripcion' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'seccion' => 'empresa',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:07:05',
            ),
            2 => 
            array (
                'id' => 3,
                'keyword' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'descripcion' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'seccion' => 'producto',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:07:11',
            ),
            3 => 
            array (
                'id' => 4,
                'keyword' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'descripcion' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'seccion' => 'amboblamiento',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:07:26',
            ),
            4 => 
            array (
                'id' => 5,
                'keyword' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'descripcion' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'seccion' => 'presupuesto',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:07:33',
            ),
            5 => 
            array (
                'id' => 6,
                'keyword' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'descripcion' => 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas',
                'seccion' => 'contacto',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:07:39',
            ),
        ));
        
        
    }
}