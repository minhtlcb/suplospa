<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function get()
    {
        $user = User::paginate(10);
    	return view('Admin.pages.user.user',['user'=>$user]);
    }
    
     public function search(Request $Request)
    {
    	//$product = User::where('email', 'like', '%' . $request->get('q') . '%')->get();
    	$user = User::where('email',$Request->search)->first();
    	return view('Admin.pages.user.user',['user'=>$user]);
    }
     public function update(Request $Request)
    {
    	//$product = User::where('email', 'like', '%' . $request->get('q') . '%')->get();
    	$id=$Request->id;
    	$user = User::find($id);
    	$user->role=$Request->role;
    	$user->save();
    	return redirect('admin/user/get')->with('thongbao','bạn đã sửa thành công');
    }
}
