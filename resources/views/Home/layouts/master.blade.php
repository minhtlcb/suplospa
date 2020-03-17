<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public/home/style/csslogin.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="{{url('public/home/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/home/fontawesome-free-5.12.1-desktop')}}">
  <link rel="stylesheet" href="{{asset('public/sanpham/sanphamcss.css')}}">
  <link rel="stylesheet" href="{{asset('public/chitietsanpham/chitietsp.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



@yield('content')


<script type="text/javascript" src="{{asset('public/stylejs/style.js')}}"></script>
<script type="text/javascript" src="{{url('public/home/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@yield('script')

</body>
</html>
