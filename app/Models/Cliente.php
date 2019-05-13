<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'CODIGOCLIENTE';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'CODIGOCLIENTE',
        'CODIGOEMPRESA',
        'NOMBRECLIENTE',
        'DIRECCIONCLIENTE',
        'EMPRESACLIENTE',
        'TIPOCLIENTE',
        'EMAILCLIENTE',
        'TELEFONOCLIENTE',
        'CODIGOCIUDADCLIENTE'
    ];
}
