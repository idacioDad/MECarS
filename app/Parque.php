<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parque extends Model
{
    function o() {
        return $this->hasMany('App\Carro','parque_id','carro_id');
    }
}
