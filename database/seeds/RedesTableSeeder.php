<?php

use Illuminate\Database\Seeder;

class RedesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('redes')->delete();
        
        \DB::table('redes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'facebook',
                'url' => 'https://es-la.facebook.com/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}