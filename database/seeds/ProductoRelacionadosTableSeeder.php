<?php

use Illuminate\Database\Seeder;

class ProductoRelacionadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('producto_relacionados')->delete();
        
        \DB::table('producto_relacionados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_producto' => 2,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_producto' => 3,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_producto' => 4,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_producto' => 4,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_producto' => 5,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_producto' => 5,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'id_producto' => 5,
                'id_relacionado' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'id_producto' => 1,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'id_producto' => 1,
                'id_relacionado' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'id_producto' => 1,
                'id_relacionado' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 26,
                'id_producto' => 11,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 27,
                'id_producto' => 11,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 28,
                'id_producto' => 11,
                'id_relacionado' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 29,
                'id_producto' => 12,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 30,
                'id_producto' => 12,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 31,
                'id_producto' => 12,
                'id_relacionado' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 32,
                'id_producto' => 10,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 33,
                'id_producto' => 10,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 34,
                'id_producto' => 10,
                'id_relacionado' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 35,
                'id_producto' => 13,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 36,
                'id_producto' => 13,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 37,
                'id_producto' => 13,
                'id_relacionado' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 38,
                'id_producto' => 14,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 39,
                'id_producto' => 14,
                'id_relacionado' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 40,
                'id_producto' => 14,
                'id_relacionado' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 44,
                'id_producto' => 9,
                'id_relacionado' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 45,
                'id_producto' => 9,
                'id_relacionado' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 46,
                'id_producto' => 9,
                'id_relacionado' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}