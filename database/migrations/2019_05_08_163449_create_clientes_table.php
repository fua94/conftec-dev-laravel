<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->String('CODIGOCLIENTE', 13);
            $table->String('CODIGOEMPRESA', 15)->nullable();
            $table->String('NOMBRECLIENTE', 50);
            $table->String('DIRECCIONCLIENTE');
            $table->String('EMPRESACLIENTE', 75);
            $table->String('TIPOCLIENTE', 1);
            $table->String('EMAILCLIENTE', 50);
            $table->String('TELEFONOCLIENTE', 10);
            $table->String('CODIGOCIUDADCLIENTE', 3)->nullable();

            $table->primary('CODIGOCLIENTE');
            $table->foreign('CODIGOEMPRESA')->references('CODIGOEMPRESA')->on('empresa');
            $table->foreign('CODIGOCIUDADCLIENTE')->references('CODIGOCIUDAD')->on('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
