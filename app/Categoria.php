<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $primaryKey = 'categoria_id';
    protected $fillable = [
        'categoria_nome'       
    ];

    function carros() {
        return $this->hasMany('App\Carro','carro_id','carro_id');
    }
}
