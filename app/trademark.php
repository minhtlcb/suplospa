<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trademark extends Model
{
    //
    protected $table='trademark';
    protected $primaryKey = 'id_trademark';
    public function product()
    {
    	return $this->hasMany('App\product','id_trademark','id_trademark');
    }

}
