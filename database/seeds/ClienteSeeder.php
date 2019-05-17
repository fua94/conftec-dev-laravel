<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<30; $i++){
            DB::table('cliente')->insert([            
                'codigocliente'=> Str::random(10)    
            ]);
        }
    }
}
