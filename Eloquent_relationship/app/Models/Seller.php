<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
     function productInfo(){
        return $this->hasOne('App\Models\Product');
        // return $this->hasOne('App\Models\Product','owner_id');
    }

    function productManyInfo(){
        return $this->hasMany('App\Models\Product');
        // return $this->hasOne('App\Models\Product','owner_id');
    }
}
