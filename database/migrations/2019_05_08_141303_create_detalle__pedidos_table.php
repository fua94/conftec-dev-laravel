<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::dropIfExists('detalle_pedido');
        Schema::create('detalle_pedido', function (Blueprint $table) {
            
            $table->engine = 'MyISAM';
            $table->integer('numpedido')->unsigned()->primary();
            $table->foreign('numpedido')
            ->references('numpedido')->on('pedido');              

            $table->string('codigoproductot');
            $table->foreign('codigoproductot')
            ->references('codigoproductot')->on('producto_t');                        

            $table->integer('totalunidadespedido');

            $table->string('denominaciontalla');
            $table->foreign('denominaciontalla')
            ->references('denominaciontalla')->on('tallas');            

            $table->string('talla');
            $table->foreign('talla')
            ->references('talla')->on('tallas');  
            
            //$table->foreign(['denominaciontalla','talla'])->references(['numpedido','codigoproductot','denominaciontalla','talla'])
            //->on(['pedido','producto_t','tallas','tallas']); 
            //DB::statement('ALTER TABLE detalle_pedido MODIFY numpedido INTEGER NOT NULL AUTO_INCREMENT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedido');
    }
}
