<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    
    protected $primaryKey = 'tracker_id';
    protected $fillable = [
        'tracker_nome','tracker_logo', 'tracker_email','tracker_contacto'       
    ];

    function documentos() {
        return $this->hasMany('App\Documento','seguradora_id','documento_id');
    }

}
