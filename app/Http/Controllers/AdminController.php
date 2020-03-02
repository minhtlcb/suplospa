<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
    	return view('Admin.pages.index');
    }
     public function index2()
    {
    	return view('Admin.pages.index2');
    }
    
    public function introduce()
    {
    	return view('Admin.pages.introduce.introduce');
    }
}
