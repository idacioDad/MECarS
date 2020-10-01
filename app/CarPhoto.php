<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{

    protected $primaryKey = 'carphoto_id';

    function carro() {
        return $this->belongsTo('App\Carro', 'id_carro','carro_id');
    }
}
