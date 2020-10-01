<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguradora extends Model
{

    protected $primaryKey = 'seguradora_id';
    protected $fillable = [
        'seguradora_nome','seguradora_logo', 'seguradora_email','seguradora_contacto'       
    ];

    function documentos() {
        return $this->hasMany('App\Documento','documento_id','documento_id');
    }

    function endereco() {
        return $this->hasOne('App\Endereco','id_seguradora','seguradora_id');
    }
}
