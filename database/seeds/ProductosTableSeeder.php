<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('productos')->delete();
        
        \DB::table('productos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Sofá Chester',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'producto',
                'caracteristicas' => '1,2,3',
                'id_superior' => 1,
                'orden' => 'aa',
                'created_at' => '2019-06-06 13:24:50',
                'updated_at' => '2019-06-06 13:24:50',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Sofá Chaise Long',
                'contenido' => '<p>El Sof&aacute; Chaise Longes el sof&aacute; rey de nuestra f&aacute;brica de sof&aacute;s. Somos fabricantes y todos los modelos que aparecen en la pagina pueden hacerse a medida. En nuestro cat&aacute;logo podr&aacute; encontrar la mayor gama de sof&aacute;s chaise longue. La mejor relaci&oacute;n calidad-precio del mercado.</p>',
                'seccion' => 'producto',
                'caracteristicas' => '1,2,3',
                'id_superior' => 1,
                'orden' => 'ab',
                'created_at' => '2019-06-06 13:25:53',
                'updated_at' => '2019-06-06 13:25:53',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Butacones',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'producto',
                'caracteristicas' => '1,2,3',
                'id_superior' => 1,
                'orden' => 'ac',
                'created_at' => '2019-06-06 13:26:40',
                'updated_at' => '2019-06-06 13:26:40',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Tres Cuerpos',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'producto',
                'caracteristicas' => '1,2,3',
                'id_superior' => 1,
                'orden' => 'ad',
                'created_at' => '2019-06-06 13:27:29',
                'updated_at' => '2019-06-06 13:27:29',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Rinconeros',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'producto',
                'caracteristicas' => '1,2,3',
                'id_superior' => 1,
                'orden' => 'ae',
                'created_at' => '2019-06-06 13:28:33',
                'updated_at' => '2019-06-06 13:28:33',
            ),
            5 => 
            array (
                'id' => 9,
                'nombre' => 'Espacio Minimalista',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'ambiente',
                'caracteristicas' => NULL,
                'id_superior' => NULL,
                'orden' => 'aa',
                'created_at' => '2019-06-06 14:53:20',
                'updated_at' => '2019-06-06 15:03:01',
            ),
            6 => 
            array (
                'id' => 10,
                'nombre' => 'Máxima Funcionalidad',
                'contenido' => '<p>Rina Amoblamientos trabaj&oacute; junto con el conjunto de Apartamentos de San Justo para realizar un proyecto integral en el amoblamiento de livings y juegos de comedor. Fabricamos muebles con la perfecta combinaci&oacute;n con tecnolog&iacute;a y confort. Prestamos especial atenci&oacute;n a la calidad final, aportando excelentes terminaciones y detalles.</p>',
                'seccion' => 'ambiente',
                'caracteristicas' => NULL,
                'id_superior' => NULL,
                'orden' => 'ab',
                'created_at' => '2019-06-06 14:56:01',
                'updated_at' => '2019-06-06 14:56:01',
            ),
            7 => 
            array (
                'id' => 11,
                'nombre' => 'Moderno y Minimalista',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'ambiente',
                'caracteristicas' => NULL,
                'id_superior' => NULL,
                'orden' => 'ac',
                'created_at' => '2019-06-06 14:56:56',
                'updated_at' => '2019-06-06 14:56:56',
            ),
            8 => 
            array (
                'id' => 12,
                'nombre' => 'Innovador y Equilibrado',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'ambiente',
                'caracteristicas' => NULL,
                'id_superior' => NULL,
                'orden' => 'ad',
                'created_at' => '2019-06-06 14:57:31',
                'updated_at' => '2019-06-06 14:57:31',
            ),
            9 => 
            array (
                'id' => 13,
                'nombre' => 'Espacio Reducidos',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'ambiente',
                'caracteristicas' => NULL,
                'id_superior' => NULL,
                'orden' => 'ae',
                'created_at' => '2019-06-06 14:59:36',
                'updated_at' => '2019-06-06 14:59:36',
            ),
            10 => 
            array (
                'id' => 14,
                'nombre' => 'Líneas Rectas',
                'contenido' => '<p>Proximamente mas contenido</p>',
                'seccion' => 'ambiente',
                'caracteristicas' => NULL,
                'id_superior' => NULL,
                'orden' => 'af',
                'created_at' => '2019-06-06 15:00:22',
                'updated_at' => '2019-06-06 15:00:22',
            ),
        ));
        
        
    }
}