<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_category extends Model
{
    //
    protected $table='news_category';
       protected $primaryKey = 'id_category';
     public function news()
    {
    	return $this->hasMany('App\news','id_category','id_category');
    }
}
