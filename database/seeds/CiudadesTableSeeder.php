<?php

use Illuminate\Database\Seeder;
use App\Models\Ciudad;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([
            'CODIGOCIUDAD' => 'UIO',
            'NOMBRECIUDAD' => 'Quito'
        ]);
        Ciudad::create([
            'CODIGOCIUDAD' => 'GYE',
            'NOMBRECIUDAD' => 'Guayaquil'
        ]);
    }
}
