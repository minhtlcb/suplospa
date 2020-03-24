 	@extends('Home.layouts.master')
	@section('content')
    <div style="margin-top: 200px;">
 <div class="content-wrapper">



    <title>Sản Phẩm</title>



   

	
	
	
<!--	start banner-->

    <div class="abcxyz">
        <div class="contentlogin">
            <div class="contentlogin_top">
                <h1>SẢN PHẨM NỔI BẬT</h1>
            </div>
            <div class="contentlogin_bot">
                <ul>
                    <li><a href="{{Route('home')}}">Trang chủ</a></li>
                    <li style="margin: 0 5px">/</li>
                    <li>Sản phẩm nổi bật</li>
                </ul>
            </div>
        </div>
    </div>
	
<!--	end banner-->
	
	
	
	
    <!-- </div>
</div> -->
	
	
	
	
<!--	start content-product-->
    <div class="container content-sp">
        <div class="row">
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-12">
                
                <div class="row">
                    <div class="col-md-3 sanpham-left">

                       {{--  <form action="search" method="post" class="search">
                           
                             @csrf
                            <input type="text" name="search" placeholder="&nbsp&nbsp tìm kiếm...">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                      
                        </form>
 --}}

                        <div class="timtheo">
                            <h2>TÌM THEO</h2>
                        </div>
          <form action="ajax/searchpost" method="post" id="formajax">
                    @csrf
                        <div class="find-show">
                            <div id="abcaa" class="accordion text-light asss">
                                THƯƠNG HỆU
                                <i id="daucong" class="fa fa-plus"></i>
                                <i id="dautru" class="fa fa-minus" style="display: none;"></i>
                            </div>
                            <div class="panel">



                                 @foreach($trademark as $value)
                                 <ul class="panell filter-vendor">
                                    <li>

                                    <label>

                                        <input class="checkk" type="checkbox" name="trademark[]" id="checkkk1" value="{{$value->id_trademark}}">

                                        {{$value->name}}</label>
                                    <!-- <p>Vichy</p> -->
                                  
                                    </li>
                                </ul>
                              @endforeach
                              
                                <!--  <p>Lorem ipsum...</p> -->
                            </div>

                            <div class="accordion text-light assss">LOẠI
                                <i id="daucong1" class="fa fa-plus"></i>
                                <i id="dautru1" class="fa fa-minus" style="display: none;"></i>
                            </div>
                            <div class="panel ">
                                   @foreach($product_type as $value)
                                 <ul class="panell filter-type">
                                    <li>
                                    <label> 
                                 <input class="checkk" type="checkbox" name="product_type[]" id="checkkk2" value="{{$value->id_types}}"> 
                                        {{$value->name}}</label>
                                    <!-- <p>Vichy</p> -->
                                  
                                    </li>
                                </ul>
                              @endforeach
                                <!--  <p>Lorem ipsum...</p> -->
                            </div>

                            <div class="accordion text-light asssss">KHOẢNG GIÁ
                                <i id="daucong2" class="fa fa-plus"></i>
                                <i id="dautru2" class="fa fa-minus" style="display: none;"></i> 
                            </div>
                            <div class="panel">
                                <ul class="no-bullets filter-price clearfix">
                                    <li class="fitter-list-price" >
                                        <label>
                                            <input class="checkk"  type="radio" name="price_filter[]"  value="0">
                                            <span>Tất cả</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input class="checkk"  type="radio" name="price_filter[]"  value="100000">
                                            <span>Nhỏ hơn 100,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input class="checkk"  type="radio" name="price_filter[]"  value="200000">
                                            <span>Từ 100,000₫ - 200,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input class="checkk"  type="radio" name="price_filter[]"  value="300000">
                                            <span>Từ 200,000₫ - 300,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input class="checkk"  type="radio" name="price_filter[]"  value="400000">
                                            <span>Từ 300,000₫ - 400,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input class="checkk" type="radio" name="price_filter[]"  value="500000">
                                            <span>Từ 400,000₫ - 500,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input class="checkk" type="radio" name="price_filter[]" value="1">
                                            <span>Lớn hơn 500,000₫</span>
                                        </label>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        </form>
                        <div class="all-img-sp">
                            <div class="img-sp-left"></div>
                            <div class="img-sp-right"></div>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-6 sanpham-right">
                        <div class="img">
                            <img src="https://file.hstatic.net/1000185703/collection/collection-banner.png" alt="" width="830px">
                        </div>
                        <h3>SẢN PHẨM NỔI BẬT</h3>
                        <p>Các sản phẩm chăm sóc và làm đẹp của Suplo Beauty & Spa được đặt và nhập trực tiếp từ các thương hiệu nước ngoài nổi tiếng nhất trên thế giới, đảm bảo sẽ đem tới cho khách hàng những sản phẩm chất lượng tốt nhất.</p>
                        <p>Nếu bạn còn đang băn khoăn về một địa chỉ làm đẹp đáng tin cậy, hãy để Suplo Beauty & Spa đồng hành cùng bạn ngay hôm nay. Với đẳng cấp vượt trội mang tầm quốc tế, Suplo xứng đáng là chốn thiên đường, chăm sóc cho vẻ đẹp, sức khỏe và tâm hồn của bạn!</p>
                     
                        <div class="allsp">
                        	@foreach($product as $value)
                            <div class="sanphamcon">
                                <div class="imgsp">
                                	  @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
            	                        @continue;
                                     @endforeach

                                    <img src="public/upload/product/{{$val}}"  width="100%" height="200px">

                                </div>
                                <div class="tensp">
                                    <h1>{{$value->name}}</h1>
                                </div>
                                <div class="giasp">

                                    <h2>{{number_format(($value->price*(100-$value->discount)/100),0,",",".")}}đ
                                     <del>{{number_format(($value->price_comparison),0,",",".")}}</del>
                                 </h2>
                                </div>
                                <div class="buttonsp">
                             
                                     <a class="xemchitiet" href="productdetails/{{$value->id_product}}">Xem Chi Tiết</a>
                                    <a class="muangay" href="{{url('cart/'.$value->id_product)}}">Mua Ngay</a>
                                </div>
                                @if($value->discount!=null)
                                <div class="giamgia">

                                    <p>{{$value->discount}}%</p>

                                </div>
                                @endif
                                  @if($value->new!=null)
                                <div class="moi">
                                    <p>Mới</p>

                                </div>
                                @endif
                            </div>
                           @endforeach
                        
                            </div>


                          

                        </div>
                    </div>
                  
                </div>

                <!-- <div class="col-md-4" style="background-color: blue;height: 100px"></div>
                    <div class="col-md-6" style="background-color: yellow;height: 200px"></div> -->
            </div>
            <!-- <div class="col-md-1"></div> -->

        </div>
    </div>
<!--	end content-product-->
	
	
</div>



  

  

  @endsection
 