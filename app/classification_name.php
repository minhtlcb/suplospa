<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classification_name extends Model
{
    //
      protected $table='classification_name';
   protected $primaryKey = 'id_classification';
    public function classification_group()
    {
    	return $this->belongsTo('App\classification_group','id_group','id_classification');
    }
}
