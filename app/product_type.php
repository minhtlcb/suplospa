<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    //
     protected $table='product_type';
     protected $primaryKey = 'id_types';

    public function product()
    {
    	return $this->hasMany('App\product','id_types','id_types');
    }
}
