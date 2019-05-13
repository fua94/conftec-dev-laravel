<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('pedido')->insert([               
            'codigosucursal'=> Str::random(10),
            'codigocliente'=> Str::random(10),                 
        ]);
    }
}