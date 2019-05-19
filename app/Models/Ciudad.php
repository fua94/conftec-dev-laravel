<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'CODIGOCIUDAD';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = [
        'CODIGOCIUDAD',
        'NOMBRECIUDAD'
    ];

    public function clientes(){
        return $this->hasMany('App\Models\Cliente', 'CODIGOCLIENTE', 'CODIGOCLIENTE');
    }
}
