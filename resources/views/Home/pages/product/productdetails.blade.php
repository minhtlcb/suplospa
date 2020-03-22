@extends('Home.layouts.master')
	@section('content')
 <div class="content-wrapper">







<title>Chi tiết sản phẩm</title>





   
   <!-- start banner-->
    <div class="abcxyz">
        <div class="contentlogin">
            <div class="contentlogin_top text-center ">
                <h1>{{$product->name}}</h1>
                <a class="hoverbanner" href="{{Route('home')}}">Trang chủ</a> 
                <span style="color: white" href="">/</span>
                <a class="hoverbanner" href="{{Route('product') }}">Sản phẩm nổi bật </a>
          
                <span class="abcxyz_tensp">/{{$product->name}}</span>
            </div>
        </div>
    </div>
    
<!--    end banner-->

<!-- start content -->
<div class="container-fluid" style="position: unset !important;">
<div class="row content2">
    <div class="col-md-12">
    <div class="container">
        <div class="row">



        <div class="col-md-5">
            <div class="row">
                
           
             @foreach($arr = json_decode($product->image, true) as $key=>$val)
  
                                        @continue;
                                     @endforeach

               <img class="img1 text-center" src="../public/upload/product/{{$val}}" >
        </div>
        
        <div class="row text-center ">
            <div class="container-fluid col-md-12">
                <div class="row img3 text-center">
                    <div class="img-slide text-center">

            <button class="leftbt"><</button>


             @foreach($arr = json_decode($product->image, true) as $key=>$val)
  
                                      
                                    

               <img class="img2" src="../public/upload/product/{{$val}}" >
            
            @endforeach
            <button class="rightbt">></button>                  
        </div>
        </div>
        </div>
        </div>
        </div>





        <div class="col-md-7">
        <div class="row">
        <div class="col-md-12">

            <div class="row tieude-chitietsp" style="border-bottom: 2px #cccc solid;">
                
                    <div class="col-md-12" style="padding: 0 !important ;">
                    <h5 class="tensp">{{$product->name}}</h5>

                    <div class="thuonghieu hihii">
                    <span>Thương hiệu:</span>
                    <a href="{{url('trademark',$product->trademark->id_trademark)}}">{{$product->trademark->name}}</a>
                    </div>

                    <div class="loaisp hihii">
                    <span>Loại:</span>
                    <a href="{{url('product_type',$product->product_type->id_types)}}">{{$product->product_type->name}}</a>
                    </div>

                    <div class="SKU hihii">
                    <span>SKU:</span>
                    <a href="">{{$product->sku}}</a>
                    </div>

                    <!-- <a style="margin-bottom: 5px;">Thương hiệu: Hyaluronic Loại: Gel dưỡng da SKU: MP1000000005</a> -->

                </div>
            </div>

            <div class="row">

                <form action="t" method="post" class="col-md-7" style="padding: 0 !important ;">
                @csrf
                <div class="price boder1" style="padding: 0 !important ;">
                <!-- <h5 class="gia1">Giá: 135,000đ</h5>
                <a class="gia1">Giá so sánh :250,000đ</a> -->
                <div class="title_price">
                                    Giá:
                                    <span class="price__ProductPrice">{{number_format(($product->price*(100-$product->discount)/100),0,",",".")}}đ</span>
                                </div>
                             
                                <div class="title_price_compare">

                                    Giá so sánh:
                                    <span>{{number_format(($product->price_comparison),0,",",".")}}đ</span>
                                </div>
                </div>

                <div class="content boder1">
                    <div class="aoluong">
                <a>{{$product->short_description}}</a>
                    </div>
                </div>

                <div class="function">
                   {{--  <div>
                                    <label class="label__size lbl-lablel" for="">Kích thước</label>
                                    <select class="choose_type" name="" id="">
                                        <option value="">Cỡ nhỏ</option>
                                        <option value="">Cỡ lớn</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="label_type lbl-lablel" for="">Tiêu đề</label>
                                    <select class="choose_type" name="" id="">
                                        <option value="">Lọ đứng</option>
                                        <option value="">Lọ tròn</option>
                                    </select>
                                </div> --}}
                    <h6 class="aoluong">Số lượng</h6>

                <div class=" aoluong">

                <div class="input-group"> 
                    <span class="input-group-btn">  
<button id="btnminus" onclick="truvl()" type="button" class="btn btn-default btn-number aooo" data-type="plus"> 
                        <span class="fa fa-minus" style="width: 20px; height: 28px;">   
                        </span> 
                      </button>    
                    </span> 
        <input id="value_sl" name="quanti" class="form-control input-number text-center"  value="1" type="text"  style="background-color: white">
        <span class="input-group-btn">    
                        <button id="btnplus" onclick="cong()" type="button" class="btn btn-default btn-number aooo" data-type="plus"> 
                            <span class="fa fa-plus" style="width: 20px; height: 28px;" ></span> 
                        </button>    
                    </span> 
   </div>


   <div class="row">
    <div class="col-md-12 button-muangay">
   <div class="aoluong">
    <button type="submit" class="text-center addproduct" value=""><a href="{{url('cart/'.$product->id_product)}}">Thêm Vào Giỏ Hàng</a></button>
    <button type="button" class="text-center addproduct1"><a href="{{url('cart/'.$product->id_product)}}">Mua Ngay</a></button>
            </div>
           <!--  <div class="muangay aoluong">
            <button type="button" class="text-center addproduct1">Mua Ngay</button>
        </div> -->
        </div>
        
       <!--  <div class="col-md-4">
            <div class="muangay aoluong">
            <button type="button" class="text-center addproduct1">Mua Ngay</button>
        </div>
        </div> -->
        </div>
        </div>
                </div>

               </form>






                <div class="col-md-5 ship">
                    
                    <div class="button-ship">
                <button type="button">
                    <span class="fas fa-truck"></span>
                    <a>MIỄN PHÍ VẬN CHUYỂN</a>
                </button>
                <button type="button">
                    <span class="fas fa-money-check"></span>
                    <a>THANH TOÁN ĐẢM BẢO</a>
                </button>
                <button type="button">
                    <span class="fas fa-globe"></span>
                    <a>HỖ TRỢ 24/7</a>
                </button>
                <button type="button">
                    <span class="fas fa-undo-alt"></span>
                    <a>HOÀN TRẢ MIỄN PHÍ</a>
                </button>
                </div>
                

            </div>

            </div>
        </div>      
        </div>  
        


    </div>
    </div>


    <div class="row thongtinsp">
      {!! $product->long_description !!}
        
    </div>




<div class="row">
   <!--  <div class="comment-facebook">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=580750925983459&autoLogAppEvents=1"></script>
                <div class="fb-comments" data-href="https://facebook.com/mjnhnnnn/" data-width="100%" data-numposts="10"></div>
                </div> -->
</div>


<!-- sản phẩm liên quan -->
<div class="row">
    <div class="sanphamlienquan">
        <h1>SẢN PHẨM LIÊN QUAN</h1>
    </div>
    <div id="sanphamlienquan" class="allsp col-md-12">
        @foreach($relate as $value)
                           
                            <div class="sanphamcon">
                                <div class="imgsp">
                                      @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
                                        @continue;
                                     @endforeach

                                    <img src="../public/upload/product/{{$val}}"  width="100%" height="200px">

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
                             
                                     <a class="xemchitiet" href="{{$value->id_product}}">Xem Chi Tiết</a>
                                    <a class="muangay" href="">Mua Ngay</a>
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
                    <!-- sản phẩm liên quan -->


<!-- sản phẩm đã xem -->
<div class="row">
    <div class="sanphamlienquan">
        <h1>SẢN PHẨM ĐÃ XEM</h1>
    </div>
    <div id="sanphamdaxem" class="allsp col-md-12">
            @foreach($view as $value)
                           <div class="sanphamcon">
                                <div class="imgsp">
                                      @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
                                        @continue;
                                     @endforeach

                                    <img src="../public/upload/product/{{$val}}"  width="100%" height="200px">

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
                             
                                     <a class="xemchitiet" href="{{$value->id_product}}">Xem Chi Tiết</a>
                                    <a class="muangay" href="">Mua Ngay</a>
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
<!-- sản phẩm đã xem -->






</div>




</div>
</div>
</div>
</div>





  

  @endsection

