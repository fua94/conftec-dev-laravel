<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_descuento', function (Blueprint $table) {
            $table->String('CODIGOTIPODESCUENTO', 15);
            $table->String('CODIGOEMPRESA', 15)->nullable();
            $table->String('DESCRIPCIONTIPODESC', 50);
            $table->decimal('PORCENTAJETIPODESC', 10, 2);

            $table->primary('CODIGOTIPODESCUENTO');
            $table->foreign('CODIGOEMPRESA')->references('CODIGOEMPRESA')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_descuento');
    }
}
