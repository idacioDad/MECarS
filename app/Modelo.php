<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{


     
    protected $primaryKey = 'modelo_id';
    protected $fillable = [
        'id_fabricante','modelo_nome'       
    ];

    function fabricantes() {
        return $this->belongsTo('App\Fabricante', 'id_fabricante','fabricante_id');
    }

    function carro() {
        return $this->hasMany('App\Carro','carro_id','carro_id');
    }
}
