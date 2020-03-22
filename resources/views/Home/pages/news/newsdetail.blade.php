 @extends('Home.layouts.master')
  @section('content')
	<title>Chi tiết tin tức</title>
<div style="margin-top: 120px;"></div>
	
	<div id="back-wrapper5" class="back-w-img">
      <div class="acount text-center">
      <h4>{{$newsdetail->title}}</h4>
      <h6><a href="{{route('home')}}" class="phone">Trang chủ</a> / <a href="{{url('news')}}" class="phone">Tin tức</a> /<a>{{$newsdetail->title}}</a></h6>
      </div>
    </div>
    <div class="container colll">
    	<div class="row">
    		<div class="col-md-9">
    			<div>
    			<a href="#" class="overnight"><img class="img1 phone" src="https://file.hstatic.net/1000185703/article/white-skin_210fdefba33d43598393db4d0d94afe0.png">
    			</a>
    			<h1 class="title1">{{$newsdetail->title}}</h1>
    			<a class="time">Ngày: {{$newsdetail->created_at}} đăng bởi: {{$newsdetail->user->name}}</a> </div>
    			
    	      {!!$newsdetail->details!!}
    				<div class="row">
    <div class="comment-facebook">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=580750925983459&autoLogAppEvents=1"></script>
                <div class="fb-comments" data-href="https://facebook.com/mjnhnnnn/" data-width="100%" data-numposts="10"></div>
                </div>
</div>
    			
    		</div>
@include('Home.layouts.left_menu_news')
    	</div>
    </div>
@endsection




