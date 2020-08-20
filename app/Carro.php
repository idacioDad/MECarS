<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    function acessorio() {
        return $this->belongsToMany('App\Acessorio', 'acessorio_carros','carro_id','acessorio_id');
    }

    function categoria() {
        return $this->belongsTo('App\Categoria', 'id_categoria','categoria_id');
    }

    function modelo() {
        return $this->belongsTo('App\Modelo', 'id_modelo','modelo_id');
    }

    function parque() {
        return $this->belongsTo('App\Parque', 'id_parque','parque_id');
    }

}
