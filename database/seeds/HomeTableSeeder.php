<?php

use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home')->delete();
        
        \DB::table('home')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'Nuestros productos',
                'contenido' => NULL,
                'imagen' => 'imagenes/home/sPBL9J9FYDyXZlgfe788OKbaWIprXCy1ucBnVSXU.jpeg',
                'seccion' => 'producto',
                'orden' => 'aa',
                'created_at' => NULL,
                'updated_at' => '2019-06-05 17:58:02',
            ),
            1 => 
            array (
                'id' => 2,
                'titulo' => 'Somos fabricantes',
                'contenido' => '<p>Lo invitamos a visitar nuestro sal&oacute;n de ventas ubicados en la localidad de San Justo, Provincia de Buenos Aires.</p>

<p>Disponemos de un amplio Cat&aacute;logo de productos para equipar el hogar o espacio de trabajo. Somos especialistas en juegos de livings y equipamiento de dormitorios.</p>',
                'imagen' => 'imagenes/home/ddMtGuhKeVbmdc4pcusxOeysbnKdDlXCLwPUQkw4.jpeg',
                'seccion' => 'empresa',
                'orden' => 'aa',
                'created_at' => NULL,
                'updated_at' => '2019-06-07 12:04:30',
            ),
            2 => 
            array (
                'id' => 3,
                'titulo' => 'Desarrollos a Medida',
                'contenido' => '<p>Dise&ntilde;amos y fabricamos los muebles adaptados a tus necesidades, gustos y espacios. Consult&aacute; con nuestro equipo de profesionales para mayor informaci&oacute;n.</p>',
                'imagen' => 'imagenes/home/qdlMFq0B5NrXNCK6P8zdFO8Ql7aL7rBkKKhv4Yt0.png',
                'seccion' => 'desarrollo',
                'orden' => 'aa',
                'created_at' => NULL,
                'updated_at' => '2019-06-07 11:46:29',
            ),
            3 => 
            array (
                'id' => 4,
                'titulo' => 'Ambientes Realizados',
                'contenido' => NULL,
                'imagen' => 'imagenes/home/a29USrFGQN6gJeY0BDlwNImd0kz754sK9E5vTFq3.jpeg',
                'seccion' => 'amoblamiento',
                'orden' => 'aa',
                'created_at' => NULL,
                'updated_at' => '2019-06-05 17:59:49',
            ),
        ));
        
        
    }
}