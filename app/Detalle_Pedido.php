<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Pedido extends Model
{
    protected $table = 'detalle_pedido';
    protected $primaryKey = 'numpedido';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['numpedido','codigoproductot','totalunidadespedido','denominaciontalla','talla'];
}
