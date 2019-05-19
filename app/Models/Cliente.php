<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'CODIGOCLIENTE';
    public $timestamps = false;
    protected $keyType = 'string';
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

    public function empresa(){
        return $this->belongsTo('App\Models\Empresa', 'CODIGOEMPRESA', 'CODIGOEMPRESA');
    }

    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad', 'CODIGOCIUDADCLIENTE', 'CODIGOCIUDAD');
    }
}
