<?php

use Illuminate\Database\Seeder;

class LogosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logos')->delete();
        
        \DB::table('logos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen' => 'imagenes/logo/r92mm8zcCJe6w5b2u2lsgHbILVaKoxPRDOr6kjU2.png',
                'seccion' => 'header',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:25:04',
            ),
            1 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes/logo/mhGablq3eFctcdit4TDPN9VGwccNaf1I5ejffYEV.png',
                'seccion' => 'footer',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 15:25:14',
            ),
        ));
        
        
    }
}