 @extends('Home.layouts.master')
  @section('content')



    <title>Dịch vụ</title>

    <!--	start banner-->
    <div style="margin-top:120px;" > </div>
    <div class="abcxyz">
        <div class="contentlogin">
            <div class="contentlogin_top text-center ">
                <h1>{{$service->name}}</h1>
                <a class="hoverbanner" href="{{route('home')}}">Trang chủ</a> 
                <span style="color: white" href="">/</span>               
                <span class="abcxyz_tensp">{{$service->name}}</span>
            </div>
        </div>
    </div>
<!--	end banner-->
 <!-- Dịch vụ title -->
<div class="row">
    <div class="title-service">
        <h1 href="#">{{$service->name}}</h1>
        {!!$service->describe!!}
    </div>
</div>
<!-- Dịch vụ title -->

<!-- dịch vụ content -->
<div class="container" style="height: auto;">
<div class="row col-md-12">
	@foreach($service->typeservice as $value)

    <div class="col-md-4 service-wrapper">
        <div class="baoquanh">
        <img class="img1" src="{{url('public/upload/typeservice/'.$value->image)}}">
        <div class="baoquanh-content">
        <h6 class="title2"> {{$value->name}} </h6>
        <div class="baoquanh-content-2" style="height: 80px; text-overflow: ellipsis;overflow: hidden; ">
        <a class="bio2"> {!!$value->describe!!} </a>
    </div>
</div>
        <a href="{{url('typeservice/'.$value->id_type_service)}}" class="btnxemthem"><button class="btnxt text-center"> Xem thêm</button></a>
    </div>
    </div>

 @endforeach
</div>
</div>


<!-- dịch vụ content -->

<!-- logo thương hiệu -->
<div class="section__logothuonghieu">
    <div class="container-fluid logothuonghieu__container">
        <div class="container logothuonghieu--imagelogo">
            <div class="row row--logotuonghieu">
                <a class="link__thuonghieu col-md-3" href="#">
                    <img src="https://theme.hstatic.net/1000185703/1000238955/14/image_brand_1.png?v=2350" alt="">
                </a>
                <a class="link__thuonghieu col-md-3" href="#">
                    <img src="https://theme.hstatic.net/1000185703/1000238955/14/image_brand_3.png?v=2350" alt="">
                </a>
                <a class="link__thuonghieu col-md-3" href="#">
                    <img src="https://theme.hstatic.net/1000185703/1000238955/14/image_brand_4.png?v=2350" alt="">
                </a>
                <a class="link__thuonghieu col-md-3" href="#">
                    <img src="https://theme.hstatic.net/1000185703/1000238955/14/image_brand_2.png?v=2350" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- logo thương hiệu -->

@endsection