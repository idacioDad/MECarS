<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessorio extends Model
{
    function carro() {
        return $this->belongsToMany('App\Carro', 'acessorio_carros','acessorio_id','carro_id');
    }
}
