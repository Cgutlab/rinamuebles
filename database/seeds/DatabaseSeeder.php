<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HomeTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(FamiliasTableSeeder::class);
        $this->call(CaracteristicasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(ProductoImagenesTableSeeder::class);
        $this->call(ProductoRelacionadosTableSeeder::class);
        $this->call(RedesTableSeeder::class);
        $this->call(LogosTableSeeder::class);
        $this->call(DatosTableSeeder::class);
        $this->call(MetadatosTableSeeder::class);
    }
}
