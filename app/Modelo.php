<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    function fabricante() {
        return $this->belongsTo('App\Fabricante', 'id_fabricante','fabricante_id');
    }

    function carro() {
        return $this->hasMany('App\Carro','carro_id','carro_id');
    }
}
