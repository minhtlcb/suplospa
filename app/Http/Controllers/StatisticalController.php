<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\order_detail;

class StatisticalController extends Controller
{
    public function orderStatistics()
    {
        $order = order::get();
        $new = order::where('status',0)->get();
        $processing = order::where('status',1)->paginate(10);
        $cancel = order::where('status',20)->paginate(10);
        $complete = order::where('status',2)->paginate(10);
        $return = order::where('status',2)->paginate(20);
        return view('Admin.pages.statistical.statistics_order',['new'=>$new,'processing'=>$processing,'cancel'=>$cancel,'complete'=>$complete,'return'=>$return,'order'=>$order]);
    }
    public function getOrderAjax(Request $request)
    {
    	$start = $request->start."";
    	$end = $request->end."";
    	try {
			$new = order::where('status',0)->whereBetween('created_at',[$start,$end])->get();
	        $processing = order::where('status',1)->whereBetween('created_at',[$start,$end])->get();
	        $cancel = order::where('status',20)->whereBetween('created_at',[$start,$end])->get();
	        $complete = order::where('status',2)->whereBetween('created_at',[$start,$end])->get();
	        $return = order::where('status',2)->whereBetween('created_at',[$start,$end])->get();
    	} catch (Exception $e) {
    		return $e;		
    	}
        return ['new'=>$new,'processing'=>$processing,'cancel'=>$cancel,'complete'=>$complete,'return'=>$return];
    }
}