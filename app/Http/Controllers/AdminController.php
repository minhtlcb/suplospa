<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

class AdminController extends Controller
{
    //
    public function index()
    {
        $count_order = order::where('status',0)->count();
    	return view('Admin.pages.index',['count_order'=>$count_order]);
    }
     public function index2()
    {
        // $this->authorize('admin');
    	return view('Admin.pages.index2');
    }
    
    public function introduce()
    {
    	return view('Admin.pages.introduce.introduce');
    }
}
