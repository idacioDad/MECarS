<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    function user() {
        return $this->hasOne('App\User');
    }
}
