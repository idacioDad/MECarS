<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{

    
    protected $primaryKey = 'fabricante_id';
    protected $fillable = [
        'fabricante_nome'       
    ];

    function modelos() {
        return $this->hasMany('App\Modelo','modelo_id','modelo_id');
    }
}
