<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parque extends Model
{

    protected $primaryKey = 'parque_id';
    protected $fillable = [
        'parque_nome','parque_logo', 'parque_email','parque_contacto'       
    ];

    function carros() {
        return $this->hasMany('App\Carro','parque_id','carro_id');
    }
}
