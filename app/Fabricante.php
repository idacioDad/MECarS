<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    function modelo() {
        return $this->hasMany('App\Modelo','modelo_id','modelo_id');
    }
}
