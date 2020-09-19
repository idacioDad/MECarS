<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessorio extends Model
{
    protected $primaryKey = 'acessorio_id';
    protected $fillable = [
        'acessorio_nome'       
    ];

    function carros() {
        return $this->belongsToMany('App\Carro', 'acessorio_carros','acessorio_id','carro_id');
    }
}
