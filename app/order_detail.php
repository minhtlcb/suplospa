<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    //
    protected $table='oder_detail';
    //protected $primaryKey = 'id_order';

    public function order()
    {
    	return $this->belongsTo('App\order','id_order','id_order');

    }

    public function product()
    {
    	return $this->belongsTo('App\product','id_product','id_product');
    }
    public function classification_name()
    {
    	return $this->belongsTo('App\classification_name','id_classification ','id_classification ');
    }
}
