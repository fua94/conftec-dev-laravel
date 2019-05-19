<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table = 'unidad_medida';
    protected $primaryKey = 'CODIGOUNIDADMEDIDA';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = [
        'CODIGOUNIDADMEDIDA',
        'CODIGOEMPRESA',
        'NOMBREUNIDADMEDIDA',
        'DESCRIPCIONUNIDADMEDIDA'
    ];

    public function empresa(){
        return $this->belongsTo('App\Models\Empresa', 'CODIGOEMPRESA', 'CODIGOEMPRESA');
    }
}
