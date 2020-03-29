 @extends('Home.layouts.master')
  @section('content')


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reset Password</title>
	<link rel="stylesheet" href="style/csslogin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-desktop">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>
  <form action="resetpassword" method="post">
      @csrf
	<div id="back-wrapper5" class="back-w-img">
      <div class="acount text-center">
      <h1>TÀI KHOẢN </h1>
      <h6><a href="#" class="textdecoration">Trang chủ</a> / <a href="#" class="textdecoration">Tài Khoản</a></h6>
      </div>
    </div>
  <div class="container-fluid text-center"> 
 <h1 class="text-center" style="padding: 50px 0 0px 0;">Cài đặt lại mật khẩu?</h1>
 <a>Mật khẩu sẽ được gửi về email của bạn</a> 
 <div class="row"> 
  <div class="col-md-4">
  </div>
  <div class="col-md-4"> 
    <div class="jumbotron"> 
    <div class="form-group"> <input class="form-control" name="email" placeholder="Email" id="email" type="email"> 
    </div>  
 		 <input class="btn btn-info" type="submit" value="Gửi"></a> 
    <br> <a href="login"><small>Bỏ Qua</small>
  </div>
  <div class="col-md-4">
  </div>
</div>
</form>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</body>
</html>




  @endsection