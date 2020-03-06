<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table='product';
   protected $primaryKey = 'id_product';
    public function product_type()
    {
    	return $this->belongsTo('App\product_type','id_types','id_types');
    }
     public function trademark()
    {
    	return $this->belongsTo('App\trademark','id_trademark','id_trademark');
    }

     public function classification_group()
    {
        return $this->hasMany('App\classification_group','id_product','id_product');
    }

    public function classification_name()
    {
    	return $this->hasManyThrough('App\classification_name','App\classification_group','id_product','id_group','id_product');
    }
      public function image_product()
    {
        return $this->hasMany('App\image_product','id_product','id_product');
    }
}
