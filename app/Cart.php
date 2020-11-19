<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    function carro() {
        return $this->belongsTo('App\Carro', 'id_carro','carro_id');
    }

    function user() {
        return $this->belongsTo('App\User');
    }

}
