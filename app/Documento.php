<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{

    protected $primaryKey = 'documento_id';
    protected $fillable = [
        'documento_nome','id_seguradora','id_parque','id_tracker', 'documento_descr'      
    ];

  function seguradoras() {
        return $this->belongsTo('App\Seguradora', 'id_seguradora','seguradora_id');
    }  

    function trackers() {
        return $this->belongsTo('App\Tracker', 'id_tracker','tracker_id');
    }

    function parques() {
        return $this->belongsTo('App\Parque', 'id_parque','parque_id');
    }

}
