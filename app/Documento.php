<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    function seguradora() {
        return $this->belongsTo('App\Seguradora', 'id_seguradora','seguradora_id');
    }
}
