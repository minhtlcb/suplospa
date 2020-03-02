<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table='product';

    public function product_type()
    {
    	return $this->belongsTo('App\product_type','id_types','id_types');
    }
     public function trademark()
    {
    	return $this->belongsTo('App\trademark','id_trademark','id_trademark');
    }
      public function classification_group1()
    {
    	return $this->belongsTo('App\classification_group1','id_product','id_product');
    }
      public function classification_group2()
    {
    	return $this->belongsTo('App\classification_group2','id_product','id_product');
    }
    public function classification_name()
    {
    	return $this->hasManyThrough('App\classification_name','App\classification_group1','id_product','id_product','id_product');
    }
}
