 @extends('Home.layouts.master')
  @section('content')


	<title>Đăng kí</title>

  <form action="register" method="post">
  		{{csrf_field()}}
    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-succcess">
                           <b>{{session('thongbao')}}</b>
                        </div>
                        @endif
    <div id="back-wrapper5" class="back-w-img">
      <div class="acount text-center">
      <h1>TÀI KHOẢN </h1>
      <h6><a href="#" class="textdecoration">Trang chủ</a> / <a href="#" class="textdecoration">Tạo Tài Khoản</a></h6>
      </div>
    </div>
  <div class="container-fluid text-center"> 
 <h1 class="text-center" style="padding: 50px 0 50px 0;">Tạo Tài Khoản</h1> 
 <div class="row"> 
  <div class="col-md-4">
  </div>
  <div class="col-md-4"> 
    <div class="jumbotron">
   <div class="login-form"> 
   	<div class="form-group"> <input class="form-control" name="firstname" placeholder="Tên" id="login-name" type="text"> 
    </div>
    <div class="form-group"> <input class="form-control" name="lastname" placeholder="Họ" id="login-name" type="text"> 
    </div>
    <div class="form-group"> <input class="form-control" name="email" placeholder="Email" id="login-name" type="email"> 
    </div> 
    <div class="form-group"> <input class="form-control" name="password" placeholder="Password" id="login-pass" type="password"> 
    </div> 
{{--     <div class="checkbox"> <label><input type="checkbox">Đồng ý với điều khoản </label>  --}}
    </div> 
    <br> <input class="btn btn-info" type="submit" value="Đăng kí" >
{{--     <br> <a href="index.html"><small>Trở về</small> --}}
    <br> <a href="login"><small>Đăng Nhập</small></a>   
{{--     <br> <a href="#"><small>Quên mật khẩu</small></a> --}}
    </div> 
  </div>
  <div class="col-md-4">
  </div>
</div>
</form>




  @endsection