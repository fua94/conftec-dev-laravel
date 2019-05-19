<?php

use Illuminate\Database\Seeder;
use App\Models\UnidadMedida;
use App\Models\Empresa;

class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidadMedida1 = UnidadMedida::create([
            'CODIGOUNIDADMEDIDA' => 'UM-0000',
            'NOMBREUNIDADMEDIDA' => 'metros',
            'DESCRIPCIONUNIDADMEDIDA' => 'SI'
        ]);
        $unidadMedida2 = UnidadMedida::create([
            'CODIGOUNIDADMEDIDA' => 'UM-0001',
            'NOMBREUNIDADMEDIDA' => 'pulgadas',
            'DESCRIPCIONUNIDADMEDIDA' => 'Ingles'
        ]);

        $empresa1 = Empresa::where('CODIGOEMPRESA', 'E-0000')->first();
        $empresa2 = Empresa::where('CODIGOEMPRESA', 'E-0001')->first();

        $unidadMedida1->empresa()->associate($empresa1)->save();
        $unidadMedida2->empresa()->associate($empresa2)->save();
    }
}
