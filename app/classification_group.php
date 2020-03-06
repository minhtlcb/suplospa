<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classification_group extends Model
{
    //
      protected $table='classification_group';
   protected $primaryKey = 'id_group';
    public function product()
    {
    	return $this->belongsTo('App\product','id_product','id_group');
    }
     public function classification_name()
    {
    	return $this->hasMany('App\classification_name','id_group','id_group');
    }
}
