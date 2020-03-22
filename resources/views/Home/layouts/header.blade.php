
    <!-- start header -->

    <div class="col-md-12 header">

            <div class="header-top">
                <div class="header-top-left header-top-">
                    <a href="">support@suplo.vn</a>
                    <a href="">0934 323 882</a>
                </div>
    
                <div class="header-top-right header-top-">
                    <a href="">Giờ mở cửa: Từ 8:00 - 22:00 tất cả các ngày trong tuần</a>
                    <a href="{{url('login')}}">Đăng nhập</a>
                    <a href="">/</a>
                    <a href="{{url('register')}}">Đăng ký</a>
                </div>
            </div>
    
            <div class="header-bot">
                <div class="container-fluid menu">
                    <!-- <div class="overlay"></div> -->
                    <!--  <video class="video-bg" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="../video/videobg.webm" type="video/mp4">
        </video> -->
                    <div class="container-fluid h-100">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">
                                <img src="{{url('public/img/suplo-logo.webp')}}">
                            </a>
    
                            <button hidden class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                                <span class="navbar-toggler-icon"></span>
                            </button>
    
                            <!-- <label for="nav-mobile-input" class="collapse navbar-collapse menunavbar" id="navbarSupportedContent"></label> -->
    
    <label for="nav-mobile-input" class="navbar_btn" id="navbarSupportedContent">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Octicons-three-bars.svg/675px-Octicons-three-bars.svg.png" width="28px" height="28px" alt="">
                        </label>
    
    <input type="checkbox" hidden  name="" class="nav__input" id="nav-mobile-input">
    
                            <label for="nav-mobile-input" class="overlay"></label>
    
                                <ul class="navbar-nav mr-auto">
    
    <h1  hidden >Suplo Spa - SUPLO BEAUTY & SPA 2</h1>
    
    <label for="nav-mobile-input" class="nav__mobile_close">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Red_X.svg/1200px-Red_X.svg.png" alt="" width="15px" height="15px">
                                </label>
    
    
                                    <li id="trangchu2" class="nav-item nav-item-index">
                                        <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                                        
                                    </li>
    
                                    <li id="minh" onclick="myFunction()"  class="nav-item dropdown">
                                        <a  class="nav-link dropdown-toggle" href="#" 
                                        id="navbarDropdown" data-toggle="dropdown"> Dịch vụ</a> 

                                      <div id="dichvudropp" class=" dichvudrop">
                                        <div class="container dichvudrop--container">
                                            <div class="row row-megamunu ">
                                                    @foreach($servicec as $value)
                                                <div class="dichvudrop__dichvu col-md-3">
                                                    <a class="qwer" href="{{url('detailservice/'.$value->id_service)}}">{{$value->name}} </a>
                                                 

                                                    @if(count($value->typeservice)>0)

                                                    <div class="dichvudrop__dichvu--chitiet">
                                                       @foreach($value->typeservice as $val)
                                                        
                                                          <a href="{{url('typeservice/'.$val->id_type_service)}}">{{$val->name}}</a>

                                                        @endforeach
                                                    </div>
                                                   @endif
                                                </div>
                                                   @endforeach
                                              
    
                                            </div>
    
                                        </div>
                                    </div>
    
    
                                    </li>
    
    
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('product')}}">Sản phẩm</a>
                                    </li>
                                    <li  class="nav-item dropdown" >                                   
                                        <a  class="nav-link" href="{{url('news')}}" dropdown-toggle="collapse" href="#" id="navbarDropdown" data-toggle="dropdown">Tin tức</a>
                                         <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
    
    
    
                                    <li class="nav-item dropdown dropdown-menucap2">
                                        <a class="nav-link dropdown-toggle" href="{{url('recruitment')}}" id="navbarDropdown" data-toggle="dropdown">
                    Tuyển dụng
                    </a>
                                        <!-- <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div> -->
                                        <ul class="sub-menu">
                                <li class="menucon menucon-one"><a href="{{url('recruitment')}}">tuyển dụng 1</a></li>
    
                                <li class="menucon tuyendung2 "><a href="{{url('recruitment')}}">tuyển dụng 2</a>
                                    <ul class="sub-menu sub-menu2">
                                        <li class="menucon menucon-one"><a href="{{url('recruitment')}}">tuyển dụng 2.1</a>
                                        <li class="menucon"><a href="{{url('recruitment')}}">tuyển dụng 2.2</a>
                                    </ul>
                                    </li>
                            </ul>
                                    </li>
    
    
    
    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('introduce')}}">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('contact')}}">Liên hệ</a>
                                    </li>
                                    <li class="nav-item nav-item-hoivien">
                                        <button class="btn-hoivien">Hội viên</button>
                                    </li>
    
                                    <label for="nav-giohang" class="nav-item cartt">
                                        <i class="fa fa-shopping-cart"></i>
                                    </label>
                                
                                </ul>
                                <!-- <div class="over_lay"></div> -->
    
    
                                
                            <!-- </div> -->
                        </nav>
                       
    
    
    
    
                                 <input type="checkbox" hidden name="" class="nav__inputt" id="nav-giohang">
    
                                <label for="nav-giohang" class="overlayy"></label>
    
                            <form action="giohang.php" method="post" class="nav__mobliee" style="overflow: scroll;">
                               
                                <label for="nav-giohang" class="nav__mobile_closes" >
                                    
                                   <i class="fa fa-times" aria-hidden="true"></i>
                                </label>
  
                                <h2>GIỎ HÀNG</h2>
                                  <div id="cart">
                                @if(isset($cart))

                                
                             @foreach($cart as $value)
                                <ul class="nav__mobile-lists">
                            
                                    <div class="cart-headerr">
                                    <li class="cart-img">
                                          @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
                                        @continue;
                                         @endforeach

                                   
                                      <img id="#" src="{{url('public/upload/product/'.$val)}}" width="70px" height="70px">
                                    </li>
                                    <li class="cart-name-product">
                                        <a href="">
                                   {{$value->name}}
                                    </a>
                                </li>                          
                                    </div>
    
    
                                    <div class="size">
                                     {{--  <li>Cỡ nhỏ, lọ đứng</li> --}}
                                    </div>
                                   {{--  <div class="price-all"> --}}
                                   
        
       
           {{--             <div class="input-group"> 
                    <span class="input-group-btn">  
<button id="btnminus" onclick="truvl()" type="button" class="btn btn-default btn-number aooo" data-type="plus"> 
                        <span class="fa fa-minus" style="width: 20px; height: 28px;">   
                        </span> 
                      </button>    
                    </span> 
 --}}

        @foreach ($sessioncart as $key => $value2) 
           
             @if( $value->id_product == $key)
               @foreach ($value2 as $s => $va)
          
           <div class="a">
            <input type="hidden" name="id_product" value="{{$value->id_product}}" id="id_product">
   <input type="button" value="-" class="qty-minus">



   <input type="number" name="quantity" value="{{$va}}" id="qty" >

    @php
 $sumprice+=(($va*($value->price))*(100-$value->discount))/100
 @endphp

   <input type="button" value="+" class="qty-plus">
 <input type="hidden"  value="{{$value->quantity}}" id="totalquantity">
</div>

          @endforeach
       @endif


@endforeach

 
        
{{--         <span class="input-group-btn">    
                        <button id="btnplus" onclick="cong()" type="button" class="btn btn-default btn-number aooo" data-type="plus"> 
                            <span class="fa fa-plus" style="width: 20px; height: 28px;" ></span> 
                        </button>    
                    </span> 
   </div> --}}       <div class="price-all">
                                   
        
       


                                    <div class="price-sp">{{number_format((($va*$value->price)*(100-$value->discount)/100),0,",",".")}}đ</div>
                                   
                                    </div>
                                </ul>
                                @endforeach
                     
                         
    
                                <div class="note">
                                 
                                <span>Chú thích cho cửa hàng</span>
                                <textarea class="form-textarea" placeholder="Nội dung" style="height:100px;"> </textarea>
                                <div class="tongtien">
                                  <li class="price-sp" >Tổng Tiền</li>
                                  <li class="price-sp">{{number_format(($sumprice),0,",",".")}}đ</li>
                                </div>
                                <input type="button" class="thanhtoan" name="" value="Thanh Toán">
                               
                                </div>

                               @else
                               <p>Gio hang trong</p>
@endif
</div>
                           </form>

                    </div>
                </div>
            </div>
    
        </div>
    
        <!-- end header -->


