<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'numpedido';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['codigosucursal','codigocliente'];
}
