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
        $this->call(ClienteSeeder::class);
        //$this->call(DetallesPedidosSeeder::class);
        //$this->call(PedidosSeeder::class);    
        $this->call(ProductoTSeeder::class);        
        $this->call(SucursalSeeder::class);        
        $this->call(TallasSeeder::class);
    }
}
