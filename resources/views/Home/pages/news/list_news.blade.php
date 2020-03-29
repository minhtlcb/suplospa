 @extends('Home.layouts.master')
  @section('content')

	<meta charset="UTF-8">
	<title>News</title>
	
	
<div>
	<div id="back-wrapper5" class="back-w-img" style="margin-top: 120px;">
      <div class="acount text-center">
      <h1>TIN TỨC </h1>
      <h6><a href="{{route('home')}}" class="phone">Trang chủ</a> / <a>Tin tức</a></h6>
      </div>
    </div>
    <div class="container">
    <div class="row alin">

         <div class="col-md-9">
	         <div class="row">
	         		@foreach($news as $val)
								<div class="col-md-5 alin1">
										
										<a href="#" class="overnight"><img class="img1" src="{{url('public/upload/blogs/'.$val->image)}}"></a>
								</div>
							
								<div class="col-md-7 alin1">
									<div class="article-title">
										<h2>
											<h5 href="#" class="phone">{{$val->title}}</h5>
										</h2>
									</div>
									<div class="sizef">
										Ngày: {{$val->created_at}} đăng bởi: {{$val->user->name}}
										<br>
										{!!$val->details!!}
										
									</div>
									<a href="{{url('newsdetail/'.$val->id_news)}}" class="viewArticleDetail phone" target="_blank">Xem thêm</a>
								</div>
								@endforeach
								
</div>
{{ $news->links() }}
</div>

@include('Home.layouts.left_menu_news')
</div>
</div>
</div>




  @endsection