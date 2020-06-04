<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pablo Cabañuz',
                'username' => 'pablo',
                'email' => NULL,
                'email_verified_at' => NULL,
                'isAdmin' => 1,
                'password' => '$2y$10$UzrHag7kAUWnAvXHPj2K8uAwodury6Dq7aRrK1Ix6BWFAIMfwY8US',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-05-27 13:41:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Carlos Sierra',
                'username' => 'carlos',
                'email' => NULL,
                'email_verified_at' => NULL,
                'isAdmin' => 1,
                'password' => '$2y$10$1Vc7juiShAMOVJO0Wr.cxOCj8BRGBt60aSauaD2ICcCzZBeed19su',
                'remember_token' => NULL,
                'created_at' => '2019-05-27 13:41:45',
                'updated_at' => '2019-05-27 13:41:45',
            ),
        ));
        
        
    }
}