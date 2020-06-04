<?php

use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('caracteristicas')->delete();
        
        \DB::table('caracteristicas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'contenido' => '<p>Materiales resistentes<br />
y de larga vida &uacute;til</p>',
                'imagen' => 'imagenes/caracteristicas/8YMHQRwcUtjjf1dEr1eAxdbBedXsnsJZyb5uw8Za.png',
                'orden' => 'aa',
                'created_at' => '2019-06-06 11:26:52',
                'updated_at' => '2019-06-06 11:26:52',
            ),
            1 => 
            array (
                'id' => 2,
                'contenido' => '<p>Confort y calidad<br />
garantizados</p>',
                'imagen' => 'imagenes/caracteristicas/yxq8AzwBQFY8QnAPg5kJ61zsRZwLTCrVvK0ZJFxv.png',
                'orden' => 'ab',
                'created_at' => '2019-06-06 11:27:38',
                'updated_at' => '2019-06-06 11:27:38',
            ),
            2 => 
            array (
                'id' => 3,
                'contenido' => '<p>Detalles y terminaciones<br />
de alta calidad</p>',
                'imagen' => 'imagenes/caracteristicas/f0yqjpb171k8DzmqZjjC12wShFUChX6fv2yzDRne.png',
                'orden' => 'ac',
                'created_at' => '2019-06-06 11:28:48',
                'updated_at' => '2019-06-06 11:28:48',
            ),
        ));
        
        
    }
}