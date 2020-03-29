@extends('Home.layouts.master')
@section('content')
    <div style="margin-top: 120px">
    <div id="back-wrapper5" class="back-w-img">
      <div class="acount text-center">
      <h4>{{$typeservice->name}}</h4>
      <h6><a href="{{route('home')}}" class="phone">Trang chủ</a> / <a class="phone">{{$typeservice->name}}</a></h6>
      </div>
    </div>
    <div class="container colll">
        <div class="row">
            <div class="col-md-9">
                <div>
                <a href="#" class="overnight"><img class="img1 phone" src="{{url('public/upload/typeservice/'.$typeservice->image)}}" style="width: 900px;height: 400px;">
                </a>
                <h1 class="title1">{{$typeservice->name}}</h1>
                <a class="time">Ngày: {{$typeservice->created_at}} đăng bởi: {{$typeservice->user->name}}</a> </div>
                
                    <a class="bio2">
     {{$typeservice->describe}}


                    </a>
                    <div class="row">
    <div class="comment-facebook">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=580750925983459&autoLogAppEvents=1"></script>
                <div class="fb-comments" data-href="https://facebook.com/mjnhnnnn/" data-width="100%" data-numposts="10"></div>
                </div>
</div>
                
            </div>
            <div class="col-md-3">
    <table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">hỗ trợ khách hàng</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th>
            <i class="fas fa-envelope-square">
        <a class="phone sizef" href="mailto: thinh.ngo99pc@gmail.com">Email: support@suplo.com </a></i><br>
        <i class= "fa fa-phone">
        <a class="phone sizef" href="0975275961">Hottline : 0934 323 882 </a>
      </i>
      </th>
    </tr>
  </tbody>
</table>



    <table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">các dịch vụ khác</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th style="float: left;">
      	@foreach($typelist as $value)
        	
          <div class="phone sizeff">
        <a class="phone sizeff" href="typeservice/{{$value->id_type_service}}"> >{{$value->name}}</a><br>
      </div>
 
          @endforeach
 
      </th>
    </tr>
  </tbody>
</table>



    <table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">Đăng kí tư vấn</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th>
            <form>
          <div class="contact-form-wrapper">
          <div class="form-group"> 
            <a class="contact2">Họ tên của bạn</a>
            <input class="form-control" value="" placeholder="Họ tên của bạn" id="login-name" type="text"> 
    </div>
    <div class="form-group">
      <a class="contact2">Địa Chỉ</a>
     <input class="form-control" value="" placeholder="Địa chỉ của bạn" id="login-name" type="adress"> 
    </div>
    <div class="form-group">
      <a class="contact2">Số Điện Thoại </a>
     <input class="form-control" value="" placeholder="Số điện thoại" id="login-name" type="phone"> 
    </div> 
    <div class="form-group"> 
      <a class="contact2">Nội Dung</a>
     <textarea class="form-control" placeholder="Nội dung" style="height:200px;"> </textarea>
    </div> 
    <br> <input class="btn btn-info"  type="submit" value="Gửi">
</div>
</form>
      </th>
    </tr>
  </tbody>
</table>

<table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">từ khóa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th style="float: left;">
        <a class="phone sizef boder1" href="#"> Dịch vụ</a>
        <a class="phone sizef boder1" href="#"> Làm đẹp</a>
      </th>
    </tr>
  </tbody>
</table>

</div>
        </div>
    </div>
</div>




@endsection