<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
     protected $table='service';
     protected $primaryKey = 'id_service';
     public function typeservice()
    {
    	return $this->hasMany('App\type_service','id_service','id_service');
    }
}
