<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_service extends Model
{
    protected $table='type_service';
    protected $primaryKey = 'id_type_service';

    public function service()
    {
      return $this->belongsTo('App\service','id_service','id_service');
    }
    
    public function user()
    {
    	return $this->belongsTo('App\User','id','id');
    }
}
