<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto_t')->insert([        
            'codigoproductot'=> Str::random(10),
            'codigodisenadorproducto'=> Str::random(10),
            'codigounidadmedida'=> rand(1,10),
            'codigotipoproducto'=> rand(1,10),
            'descripcionproductot'=> Str::random(10),
        ]);
    }
}
