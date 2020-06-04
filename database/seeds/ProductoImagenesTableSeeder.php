<?php

use Illuminate\Database\Seeder;

class ProductoImagenesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('producto_imagenes')->delete();
        
        \DB::table('producto_imagenes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes/Producto/RSY3ElPCc9XCUwb6LUqBP0INttqHCX7eysy92MES.jpeg',
                'id_producto' => 2,
                'orden' => 'aa',
                'created_at' => '2019-06-06 13:25:53',
                'updated_at' => '2019-06-06 13:25:53',
            ),
            1 => 
            array (
                'id' => 3,
                'imagen' => 'imagenes/Producto/lfOnTt5z3jV5dxJewuJELEiDMb5Q67ofh6ptI3gs.jpeg',
                'id_producto' => 3,
                'orden' => 'aa',
                'created_at' => '2019-06-06 13:26:40',
                'updated_at' => '2019-06-06 13:26:40',
            ),
            2 => 
            array (
                'id' => 4,
                'imagen' => 'imagenes/Producto/1ijc7KvypKGyRBEs0EenuBD7KgGID34bPMaJsPbf.jpeg',
                'id_producto' => 4,
                'orden' => 'aa',
                'created_at' => '2019-06-06 13:27:29',
                'updated_at' => '2019-06-06 13:27:29',
            ),
            3 => 
            array (
                'id' => 5,
                'imagen' => 'imagenes/Producto/oyND8k4y4LlcKDQjyUpQULst34voDwFSaDNfAR3U.jpeg',
                'id_producto' => 5,
                'orden' => 'aa',
                'created_at' => '2019-06-06 13:28:33',
                'updated_at' => '2019-06-06 13:28:33',
            ),
            4 => 
            array (
                'id' => 6,
                'imagen' => 'imagenes/Producto/UaOMuKZVNjRxe7dS7zZrynujQEmdxtUafG0oINKf.jpeg',
                'id_producto' => 1,
                'orden' => 'aa',
                'created_at' => '2019-06-06 13:59:51',
                'updated_at' => '2019-06-06 13:59:51',
            ),
            5 => 
            array (
                'id' => 17,
                'imagen' => 'imagenes/Producto/ckmh7CK8bE6WtoI614lTnZLE2JuQPIFK7cZNIz6p.jpeg',
                'id_producto' => 11,
                'orden' => 'aa',
                'created_at' => '2019-06-06 14:56:56',
                'updated_at' => '2019-06-06 14:56:56',
            ),
            6 => 
            array (
                'id' => 18,
                'imagen' => 'imagenes/Producto/idzFVN7Za55op5VCkv0VFxiBcf6jxmMXt8b1bdDc.jpeg',
                'id_producto' => 12,
                'orden' => 'aa',
                'created_at' => '2019-06-06 14:57:31',
                'updated_at' => '2019-06-06 14:57:31',
            ),
            7 => 
            array (
                'id' => 19,
                'imagen' => 'imagenes/Producto/6mefz3uTkUa3PC8fLbgJBJPjC8RZe153xc8cbC7a.jpeg',
                'id_producto' => 10,
                'orden' => 'aa',
                'created_at' => '2019-06-06 14:58:16',
                'updated_at' => '2019-06-06 14:58:16',
            ),
            8 => 
            array (
                'id' => 20,
                'imagen' => 'imagenes/Producto/G3X9r4vd2EvPA4rQwmwIymYC3aTqKoOnaXvGSKbJ.jpeg',
                'id_producto' => 13,
                'orden' => 'aa',
                'created_at' => '2019-06-06 14:59:36',
                'updated_at' => '2019-06-06 14:59:36',
            ),
            9 => 
            array (
                'id' => 21,
                'imagen' => 'imagenes/Producto/47eiV2WX3KRXrMIypX74GAp4v3kHzu4Sr7GCKyHr.jpeg',
                'id_producto' => 14,
                'orden' => 'aa',
                'created_at' => '2019-06-06 15:00:22',
                'updated_at' => '2019-06-06 15:00:22',
            ),
            10 => 
            array (
                'id' => 23,
                'imagen' => 'imagenes/Producto/3vbc3FwiWU9VjBFbSgiMbWlti6DlAmHvYpGsGVgY.jpeg',
                'id_producto' => 9,
                'orden' => 'aa',
                'created_at' => '2019-06-06 15:03:01',
                'updated_at' => '2019-06-06 15:03:01',
            ),
        ));
        
        
    }
}