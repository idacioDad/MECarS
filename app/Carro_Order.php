<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro_Order extends Model
{
    function user() {
        return $this->hasMany('App\User');
    }
}
