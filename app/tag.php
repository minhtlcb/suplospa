<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table='tag';
	
	public function news()
    {
    	return $this->belongsToMany('App\tag');
    }
}
