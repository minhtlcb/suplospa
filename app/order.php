<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
     protected $table='order';

    public function user()
    {
    	return $this->belongsTo('App\User','id','id');

    }

    public function order_detail()
    {
    	return $this->hasMany('App\order_detail','id_order','id_order');
    }

     
}
