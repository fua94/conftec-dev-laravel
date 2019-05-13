<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_t', function (Blueprint $table) {
            $table->string('codigoproductot');
            $table->string('codigodisenadorproducto');
            $table->integer('codigounidadmedida');
            $table->integer('codigotipoproducto');
            $table->string('descripcionproductot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_t');
    }
}
