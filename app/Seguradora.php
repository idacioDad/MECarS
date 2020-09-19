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
        return $this->hasMany('App\Documento','seguradora_id','documento_id');
    }
}
