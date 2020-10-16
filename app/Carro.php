<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{

    protected $primaryKey = 'carro_id';
    protected $fillable = [
        'id_parque','id_modelo','id_categoria','carro_preco',
        'carro_ano_fabrico','carro_Km','carro_foto',
        'carro_motorSize','carro_motorCode','carro_conducao',
        'carro_caixa','carro_versaoClasse','carro_volante',
        'carro_corExterna','carro_combustivel','carro_assentos',
        'carro_portas','carro_peso','carro_lotacao','car_foto'      
    ];

    function acessorios() {
        return $this->belongsToMany('App\Acessorio', 'acessorio_carros','id_carro','id_acessorio');
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

    function carphotos() {
        return $this->hasMany('App\CarPhoto', 'id_carro','carphoto_id');
    }

}
