<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDescuento extends Model
{
    protected $table = 'tipo_descuento';
    protected $primaryKey = 'CODIGOTIPODESCUENTO';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = [
        'CODIGOTIPODESCUENTO',
        'CODIGOEMPRESA',
        'DESCRIPCIONTIPODESC',
        'PORCENTAJETIPODESC'
    ];

    public function empresa(){
        return $this->belongsTo('App\Models\Empresa', 'CODIGOEMPRESA', 'CODIGOEMPRESA');
    }
}
