<?php

use Illuminate\Database\Seeder;

class FamiliasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('familias')->delete();
        
        \DB::table('familias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Sillones',
                'imagen' => 'imagenes/familia/aGoTdhc8YgMznGopv3Iy8TeovfsHjBqdeFNh5y51.jpeg',
                'orden' => 'aa',
                'created_at' => '2019-06-05 19:25:05',
                'updated_at' => '2019-06-05 19:55:39',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Camas',
                'imagen' => 'imagenes/familia/31u9ok8KVKOwFwqdxlGv12IxhcH7aCkzOR3SvPUi.jpeg',
                'orden' => 'ab',
                'created_at' => '2019-06-05 19:46:27',
                'updated_at' => '2019-06-05 19:46:27',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Juegos de living',
                'imagen' => 'imagenes/familia/89kI8EV5rPyg5GxWt7tlurPYr2yTZAKT2WFiERpp.jpeg',
                'orden' => 'ac',
                'created_at' => '2019-06-05 19:50:43',
                'updated_at' => '2019-06-05 19:50:43',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Mesas y sillas',
                'imagen' => 'imagenes/familia/IKoMzeermDdjKC1ABcKdsBJcwbfs8DwCgAIJBgAR.jpeg',
                'orden' => 'ad',
                'created_at' => '2019-06-05 19:51:32',
                'updated_at' => '2019-06-05 19:51:32',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Respaldo de camas',
                'imagen' => 'imagenes/familia/FfROOGzSHsaNFRs2lFjDioODHuaBDj7kP0YYd60r.jpeg',
                'orden' => 'ae',
                'created_at' => '2019-06-05 19:52:02',
                'updated_at' => '2019-06-05 19:52:02',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Mesas ratonas',
                'imagen' => 'imagenes/familia/8aszdOdxwqcdl8qqKc05roAlkrd8IRjuxYf9BR4B.jpeg',
                'orden' => 'af',
                'created_at' => '2019-06-05 19:52:42',
                'updated_at' => '2019-06-05 19:52:42',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Comodas',
                'imagen' => 'imagenes/familia/zbtMr8CZvX04vBzyArkVLXv6M15W6lqnrvJUG4Mn.jpeg',
                'orden' => 'ag',
                'created_at' => '2019-06-05 19:53:22',
                'updated_at' => '2019-06-05 19:53:22',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Racks de Tv',
                'imagen' => 'imagenes/familia/ppDO6ZswXHGGbpZCrgFxj051oInIZ4FM8pDzHkZF.jpeg',
                'orden' => 'ah',
                'created_at' => '2019-06-05 19:53:56',
                'updated_at' => '2019-06-05 19:53:56',
            ),
        ));
        
        
    }
}