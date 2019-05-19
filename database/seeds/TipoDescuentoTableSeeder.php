<?php

use Illuminate\Database\Seeder;
use App\Models\TipoDescuento;
use App\Models\Empresa;

class TipoDescuentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipodescuento1 = TipoDescuento::create([
            'CODIGOTIPODESCUENTO' => 'TD-0000',
            'DESCRIPCIONTIPODESC' => 'programado',
            'PORCENTAJETIPODESC' => 10.1
        ]);
        $tipodescuento2 = TipoDescuento::create([
            'CODIGOTIPODESCUENTO' => 'TD-0001',
            'DESCRIPCIONTIPODESC' => 'fijo',
            'PORCENTAJETIPODESC' => 5.8
        ]);

        $empresa1 = Empresa::where('CODIGOEMPRESA', 'E-0000')->first();
        $empresa2 = Empresa::where('CODIGOEMPRESA', 'E-0001')->first();

        $tipodescuento1->empresa()->associate($empresa1)->save();
        $tipodescuento2->empresa()->associate($empresa2)->save();
    }
}
