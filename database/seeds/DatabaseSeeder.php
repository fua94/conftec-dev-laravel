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
        $this->call(EmpresasTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(UnidadMedidaSeeder::class);
        $this->call(TipoDescuentoTableSeeder::class);
    }
}
