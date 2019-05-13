<?php

use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'CODIGOEMPRESA' => 'E-0000',
            'NOMBREEMPRESA' => 'PUCE'
        ]);
        Empresa::create([
            'CODIGOEMPRESA' => 'E-0001',
            'NOMBREEMPRESA' => 'MONTRAN'
        ]);
    }
}
