<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Ciudad;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente1 = Cliente::create([
            'CODIGOCLIENTE' => 'C-0001',
            'NOMBRECLIENTE' => 'jose Salgado',
            'DIRECCIONCLIENTE' => 'Av Maestro',
            'EMPRESACLIENTE' => 'Juan SA',
            'TIPOCLIENTE' => 'C',
            'EMAILCLIENTE' => 'jsalgado@email.com',
            'TELEFONOCLIENTE' => '0974623743',
            'CODIGOCIUDADCLIENTE' => 'UIO'
        ]);
        $cliente2 = Cliente::create([
            'CODIGOCLIENTE' => 'C-0002',
            'NOMBRECLIENTE' => 'isa granja',
            'DIRECCIONCLIENTE' => 'Av Colon',
            'EMPRESACLIENTE' => 'Juan SA',
            'TIPOCLIENTE' => 'H',
            'EMAILCLIENTE' => 'igranja@email.com',
            'TELEFONOCLIENTE' => '0945623232',
            'CODIGOCIUDADCLIENTE' => 'UIO'
        ]);

        $empresa1 = Empresa::where('CODIGOEMPRESA', 'E-0000')->first();
        $empresa2 = Empresa::where('CODIGOEMPRESA', 'E-0001')->first();
        $ciudad1 = Ciudad::where('CODIGOCIUDAD', 'UIO')->first();
        $ciudad2 = Ciudad::where('CODIGOCIUDAD', 'GYE')->first();

        $cliente1->empresa()->associate($empresa1)
                ->ciudad()->associate($ciudad1)->save();
        $cliente2->empresa()->associate($empresa2)
                ->ciudad()->associate($ciudad2)->save();

    }
}
