<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    function carro() {
        return $this->hasMany('App\Carro','carro_id','carro_id');
    }
}
