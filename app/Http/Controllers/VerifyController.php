<?php

namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function VerifyEmail($token)
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
		
		return redirect('login')->with('thongbao','Bạn đã kích hoạt tài khoản thành công');;
    }
}
