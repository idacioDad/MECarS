<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguradora extends Model
{
    function documento() {
        return $this->hasMany('App\Documento','seguradora_id','documento_id');
    }
}
