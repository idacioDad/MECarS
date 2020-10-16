<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{

    protected $primaryKey = 'carphoto_id';

    protected $fillable = [
        'id_carro','car_foto'      
    ];


    function carros() {
        return $this->belongsTo('App\Carro', 'id_carphoto','carro_id');
    }
}
