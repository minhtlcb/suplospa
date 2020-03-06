<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image_product extends Model
{
    //
      protected $table='image_product';
   protected $primaryKey = 'id_image';
   public $timestamps = false;
      public function product_type()
    {
    	return $this->belongsTo('App\product','id_product','id_image');
    }
}
