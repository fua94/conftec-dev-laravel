<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallesPedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = collect([2, 3, 4, 5, 6, 7, 8, 9, 10]);
        DB::table('detalle_pedido')->insert([            
            'codigoproductot'=> Str::random(10),
            'totalunidadespedido'=> rand(1,10),
            'denominaciontalla'=> Str::random(10),
            'talla'=> Str::random(10),        
        ]);
    }
}
