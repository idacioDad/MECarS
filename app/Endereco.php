<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $primaryKey = 'endereco_id';
    protected $fillable = [
        'id_endereco','id_seguradora','id_parque','id_tracker',
        'id_user','ender_provincia','distrito_cidade','ender_rua_Av'       
    ];
}

function seguradora() {
    return $this->belongsTo('App\Seguradora', 'id_seguradora','seguradora_id');
}

function parques() {
    return $this->belongsTo('App\Parque', 'id_parque','parque_id');
}

function tracker() {
    return $this->belongsTo('App\Tracker','id_tracker','tracker_id');
}

function users() {
    return $this->belongsTo('App\User', 'id_user','id');
}