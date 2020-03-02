<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    //
     protected $table='cart';

    public function users()
    {
    	return $this->belongsTo('App\User','id','id');
    }
    public function product()
    {
    	return $this->hasMany('App\product','id_product','id_product');
    }
}
