 @extends('Home.layouts.master')
  @section('content')


  <title>Đăng Nhập</title>

  <form action="login" method="post">

    <div id="back-wrapper5" class="back-w-img">
      <div class="acount text-center">
      <h1>TÀI KHOẢN </h1>
      <h6><a class="textdecoration phone">Trang chủ</a> / <a>Tài Khoản</a></h6>
      </div>
    </div>
  <div class="container-fluid text-center"> 
 <h1 class="text-center" style="padding: 50px 0 50px 0;">Đăng nhập</h1> 
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
 <div class="row"> 
  <div class="col-md-4">
  </div>
  <div class="col-md-4"> 
    <div class="jumbotron">
   <div class="login-form"> 
    <div class="form-group"> <input class="form-control" name="email" placeholder="Email" id="login-name" type="text"> 
    </div> 
    <div class="form-group"> <input class="form-control" name="password" placeholder="Password" id="login-pass" type="password"> 
    </div> 
    <div class="checkbox"> <label><input type="checkbox"> Ghi nhớ </label> 
    </div> 
    <br> <input class="btn btn-info" type="submit" value="Đăng Nhập"> 
    <br> <a href="San_pham.html"><small>Trở về</small>
    <br> <a href="register.html"><small>Đăng kí</small></a>   
    <br> <a href="resetpassword.html"><small>Quên mật khẩu</small></a>
    </div> 
  </div>
  <div class="col-md-4">
  </div>
</form>




  @endsection