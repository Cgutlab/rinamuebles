<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('empresa')->delete();
        
        \DB::table('empresa')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'Nuestra Historia',
                'contenido' => '<p>Somos una empresa dedicada al dise&ntilde;o, fabricaci&oacute;n e importaci&oacute;n de muebles contempor&aacute;neos con m&aacute;s de 20 a&ntilde;os en el mercado argentino.</p>

<p>Estamos ubicados en la localidad de San Justo, Provincia de Buenos Aires. Contamos con un sal&oacute;n de ventas exclusivo donde exhibimos nuestra colecci&oacute;n de productos.</p>

<p>Disponemos de un amplio Cat&aacute;logo de productos para equipar el hogar o espacio de trabajo, especializados en juegos de livings y equipamiento de dormitorios.</p>

<p>Fabricamos muebles con la perfecta combinaci&oacute;n con tecnolog&iacute;a y confort. Prestamos especial atenci&oacute;n a la calidad final, aportando excelentes terminaciones y detalles.</p>',
                'imagen' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-06-05 18:21:56',
            ),
        ));
        
        
    }
}