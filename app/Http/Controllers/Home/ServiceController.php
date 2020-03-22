<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\service;
use App\type_service;
class ServiceController extends Controller
{
    public function get($id_service)
    {
       $service= service::find($id_service);
       return view('Home/pages/service/service',['service'=>$service]);

    }
    public function gettype($id_type_service)
    {
    	$typelist=type_service::limit(5)->get();
    	  $typeservice= type_service::find($id_type_service);
       return view('Home/pages/service/typeservice',['typeservice'=>$typeservice,'typelist'=>$typelist]);
    }
}
