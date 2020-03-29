<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class VerifypassController extends Controller
{
    public function verifypass($token)
    {
		if($token == null) {
			return redirect('login')->with('thongbao','Không có token');
		}

		$user = User::where('remember_token',$token)->first();

		if($user == null )
		{
			return redirect('login')->with('thongbao','Token sai');
		}

		$user->update([
			// 'email_verified' => 1,
			'email_verified_at' =>Carbon::now(),
			'remember_token' => ''
		]);

		return view('Home.pages.user.resetpassword',['user'=>$user]);
    }
}
