<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $primaryKey = 'id';
    protected $fillable = [
        'session_id', 'id_user', 'id_carro', 'quantity'       
    ];

    public function carro() {
        return $this->belongsTo('App\Carro', 'id_carro','carro_id');
    }

    public function user() {
        return $this->belongsTo('App\User','id');
    }

    /*
    public static function userCartItems(){
        if(Auth::chek()){
            $userCarts = Cart::where('user_id',Auth::user()->id)->get()->toArray();
        }else{
            $userCarts = Cart::where('session_id',Session::get('session_id'))->get()->toArray();
        }
            return $userCarts;
    }*/

}
