<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<30; $i++){
            DB::table('sucursal')->insert([            
                'codigosucursal'=> Str::random(10)        
            ]);
        }
    }
}
