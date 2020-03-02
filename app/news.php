<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
     protected $table='news';

    public function user()
    {
    	return $this->belongsTo('App\User','id','id');
    }

     public function news_category()
    {
    	return $this->belongsTo('App\news_category','id_category','id_category');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }
}
