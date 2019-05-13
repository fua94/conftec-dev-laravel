<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'CODIGOCLIENTE' => 'C-0001',
            'CODIGOEMPRESA' => 'E-0001',
            'NOMBRECLIENTE' => 'jose Salgado',
            'DIRECCIONCLIENTE' => 'Av Maestro',
            'EMPRESACLIENTE' => 'Juan SA',
            'TIPOCLIENTE' => 'A',
            'EMAILCLIENTE' => 'jsalgado@email.com',
            'TELEFONOCLIENTE' => '0974623743',
            'CODIGOCIUDADCLIENTE' => 'UIO'
        ]);
        Cliente::create([
            'CODIGOCLIENTE' => 'C-0002',
            'CODIGOEMPRESA' => 'E-0001',
            'NOMBRECLIENTE' => 'isa granja',
            'DIRECCIONCLIENTE' => 'Av Colon',
            'EMPRESACLIENTE' => 'Juan SA',
            'TIPOCLIENTE' => 'A',
            'EMAILCLIENTE' => 'igranja@email.com',
            'TELEFONOCLIENTE' => '0945623232',
            'CODIGOCIUDADCLIENTE' => 'UIO'
        ]);
    }
}
