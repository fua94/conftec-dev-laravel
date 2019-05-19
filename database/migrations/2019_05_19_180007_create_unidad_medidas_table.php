<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_medida', function (Blueprint $table) {
            $table->String('CODIGOUNIDADMEDIDA', 15);
            $table->String('CODIGOEMPRESA', 15)->nullable();
            $table->String('NOMBREUNIDADMEDIDA', 15);
            $table->String('DESCRIPCIONUNIDADMEDIDA', 100);

            $table->primary('CODIGOUNIDADMEDIDA');
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
        Schema::dropIfExists('unidad_medidas');
    }
}
