<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            
            $table->integer('numpedido')->autoIncrement();                        

            $table->string('codigosucursal');            
            $table->foreign('codigosucursal')
            ->references('codigosucursal')->on('sucursal');

            $table->string('codigocliente');            
            $table->foreign('codigocliente')
            ->references('codigocliente')->on('cliente');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
