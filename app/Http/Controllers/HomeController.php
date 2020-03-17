<?php
namespace App\Http\Controllers\Frontend\Auth;
namespace App\Http\Controllers;
use App\Mail\VerificationEmail;
use App\Mail\VerificationpassresetEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;
class HomeController extends Controller
{
    //
    public function login()
    {
    	return view('Home.pages.account.login');
    }
    public function register()
    {
    	return view('Home.pages.account.register');
    }
     public function postlogin(Request $Request)
    {
    	$this->validate($Request,[
           'email'=>'required',
           'password'=>'required|min:3|max:32'
           ],[
           'email.required'=>'bạn chưa nhập username',
           'password.required'=>'bạn chưa nhập password',
           'password.min'=>'password không được nhỏ hơn 3 kí tự',
           'password.max'=>'password không được lớn hơn 32 ký tự'
            ]);

        $email = $Request['email'];
        $password = $Request['password'];
        if  (Auth::attempt(['email'=>$email,'password'=>$password])) {
             $user = Auth::User();
       
   
         $_SESSION['username'] = $user->name;;
         $_SESSION['role'] = $user->role;
         if($_SESSION['role']==0)
         {
              return redirect('');
         }
         else
         {
            return redirect('admin/index');
         }
            
        }
        else
        {

           return redirect('login')->with('thongbao','Đăng nhập thất bại vui lòng kiểm tra lại tài khoản hoặc mật khẩu');
        }
    
    }
    public function postregister(Request $Request)
    {
    	$this->validate($Request,
                 [
                    'lastname' => 'required|min:2|max:50',
                    'firstname' => 'required|min:2|max:50',
                    'email' => 'required|email|max:255|unique:users,email',
                    'password' => 'required|min:6|max:32',
                    //'phone' => 'required|max:14confirmed',
                    //'address' => 'required|max:255',
                ],
                [
           
                    'lastname.required' => 'Hãy nhập vào họ của bạn',
                    'lastname.min'=>'Họ tên tối thiểu 2 ký tự',
                    'lastname.max' => 'Họ tên tối đa 50 ký tự',
                    'firstname.required' => 'Hãy nhập vào tên của bạn',
                    'firstname.min'=>'Họ tên tối thiểu 2 ký tự',
                    'firstname.max' => 'Họ tên tối đa 50 ký tự',

                    'email.required' => 'Hãy nhập vào địa chỉ Email',
                    'email.email' => 'Địa chỉ Email không đúng định dạng',
                    'email.max' => 'Địa chỉ Email tối đa 255 ký tự',
                    'email.unique' => 'Địa chỉ Email đã tồn tại',
                     // 'name.unique' => 'username đã tồn tại',
                    'password.required' => 'Hãy nhập mật khẩu',
                    'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
                    // 'password.confirmed' => 'Xác nhận mật khẩu không đúng',
                   
                ]
            );

           try{
                $user = new User;
                $user->name=$Request->lastname.$Request->firstname;
                $user->email=$Request->email;
                $user->password=bcrypt($Request->password);
              $user->remember_token= Str::random(50);
                $user->role=0;
                $user->save();
                $lastInsertedId = $user->id;
                $thisUser = User::findOrFail($lastInsertedId);

             //     $user = User::create([
             //    'name' => trim($Request->lastname.$Request->firstname),
             //   'email' => strtolower($Request->input('email')),
             //   'password' => bcrypt($Request->input('password')),
             //    'remember_token' => Str::random(50),
             //     'role'=>'0',
             // ]);

                 \Mail::to($thisUser['email'])->send(new VerificationEmail($thisUser));

                return redirect('login')->with('thongbao','Đăng ký thành công-Vui lòng kiểm tra mail để kích hoạt tài khoản');
              }
            catch(Exception $e) 
              {
                return redirect('login')->with('thongbao','Đăng ký k thành công');
              } 
    }
    public function resetpassword()
    {
        return view('Home.pages.account.resetpassword');
    }
    public function serchmail(Request $Request)
    {
        $this->validate($Request,
                 [
                    'email' => 'required|email|max:255',
                ],
                [
           
                    'email.required' => 'Hãy nhập vào địa chỉ Email',
                    'email.email' => 'Địa chỉ Email không đúng định dạng',
                    'email.max' => 'Địa chỉ Email tối đa 255 ký tự',
                ]
            );

           
                $user =User::where('email',$Request->email)->first();
                
               $user->remember_token= Str::random(50);
            
                $user->save();
                $lastInsertedId = $user->id;
                $thisUser = User::findOrFail($lastInsertedId);
              \Mail::to($thisUser['email'])->send(new VerificationpassresetEmail($thisUser));

                return redirect('login')->with('thongbao','Gửi mã thành công-Vui lòng kiểm tra mail để đổi mật khẩu');
             
          


    }
}

