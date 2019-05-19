<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'CODIGOEMPRESA';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = [
        'CODIGOEMPRESA',
        'NOMBREEMPRESA'
    ];

    public function clientes(){
        return $this->hasMany('App\Models\Cliente', 'CODIGOCLIENTE', 'CODIGOCLIENTE');
    }
}
