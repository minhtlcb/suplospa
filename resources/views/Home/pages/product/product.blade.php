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

                        <form action="search" method="post" class="search">
                            {{-- <form action="search" method="post" style="display: flex;"> --}}
                             @csrf
                            <input type="text" name="search" placeholder="&nbsp&nbsp tìm kiếm...">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        {{-- </form> --}}
                        </form>


                        <div class="timtheo">
                            <h2>TÌM THEO</h2>
                        </div>

                        <div class="find-show">
                            <button id="abcaa" class="accordion text-light asss">
                                THƯƠNG HỆU
                                <i id="daucong" class="fa fa-plus"></i>
                                <i id="dautru" class="fa fa-minus" style="display: none;"></i>
                            </button>
                            <div class="panel">



                                 @foreach($trademark as $value)
                                 <ul class="panell filter-vendor">
                                    <li>
                                    <input class="checkk" type="checkbox" name="trademark[]" id="checkkk1" value="{{$value->id}}">
                                    <!-- <p>Vichy</p> -->
                                    <label for="checkkk1">{{$value->name}}</label>
                                    </li>
                                </ul>
                              @endforeach
                              
                                <!--  <p>Lorem ipsum...</p> -->
                            </div>

                            <button class="accordion text-light assss">LOẠI
                                <i id="daucong1" class="fa fa-plus"></i>
                                <i id="dautru1" class="fa fa-minus" style="display: none;"></i>
                            </button>
                            <div class="panel ">
                                   @foreach($product_type as $value)
                                 <ul class="panell filter-type">
                                    <li>
                                    <input class="checkk" type="checkbox" name="product_type[]" id="checkkk2" value="{{$value->id}}">
                                    <!-- <p>Vichy</p> -->
                                    <label for="checkkk2">{{$value->name}}</label>
                                    </li>
                                </ul>
                              @endforeach
                                <!--  <p>Lorem ipsum...</p> -->
                            </div>

                            <button class="accordion text-light asssss">KHOẢNG GIÁ
                                <i id="daucong2" class="fa fa-plus"></i>
                                <i id="dautru2" class="fa fa-minus" style="display: none;"></i> 
                            </button>
                            <div class="panel">
                                <ul class="no-bullets filter-price clearfix">
                                    <li class="fitter-list-price" >
                                        <label>
                                            <input type="radio" name="price-filter" data-price="0:max" value="((price:product>=0))">
                                            <span>Tất cả</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input type="radio" name="price-filter" data-price="0:100000" value="((price:product<100000))">
                                            <span>Nhỏ hơn 100,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input type="radio" name="price-filter" data-price="100000:200000" value="((price:product>=100000)&amp;&amp;(price:product<200000))">
                                            <span>Từ 100,000₫ - 200,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input type="radio" name="price-filter" data-price="200000:300000" value="((price:product>=200000)&amp;&amp;(price:product<300000))">
                                            <span>Từ 200,000₫ - 300,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input type="radio" name="price-filter" data-price="300000:400000" value="((price:product>=300000)&amp;&amp;(price:product<400000))">
                                            <span>Từ 300,000₫ - 400,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input type="radio" name="price-filter" data-price="400000:500000" value="((price:product>=400000)&amp;&amp;(price:product<500000))">
                                            <span>Từ 400,000₫ - 500,000₫</span>
                                        </label>
                                    </li>
                                    <li class="fitter-list-price">
                                        <label>
                                            <input type="radio" name="price-filter" data-price="500000:max" value="((price:product>=500000))">
                                            <span>Lớn hơn 500,000₫</span>
                                        </label>
                                    </li>
                                </ul>

                            </div>
                        </div>
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
  @section('script')
   <script type="text/javascript">
    

// Đầu tiên chúng ta sẽ cần 3 biến
// total_page, cur_page và một câu truy vấn dữ liệu

var total_page, cur_page, collectionid, collectionSize;
total_page = 1 // Tổng trang
cur_page = 1; // Trang hiện tại
collectionid = '1000794733'; // Lưu collection id, để khi buyer click bỏ hết filter thì mình sẽ dựa vào id này để quay trở về trang bắt đầu.
collectionSize = 5;
var pageLimit = 12;
var timeOutFilter;
var check_slided_price = false; // Biến này để check phần filter price ( Nếu dùng input checkbox thì ko cần biến này )
var check_url_param = false; // Biến này để check link url có filter hay ko vd : /collections/all?price=0:500000&vendor=juno
var query = '';

var quantityProductLeft = collectionSize - (cur_page*pageLimit);
var loadingText = '<i class="fa fa-spinner fa-spin"></i> Loading...';
var productLeftText = ('Xem Thêm (còn '+ quantityProductLeft +' sản phẩm)');
var btnLoading = $('.btn-loading'), productsContainer = $('.product-list'), hideFilter = $('.not-filter'), imgResize= $('.image-resize');

function getProductLeft(){
    var quantityProductLeft = collectionSize - (cur_page*pageLimit);
    var _text = ('Xem Thêm (còn '+ quantityProductLeft +' sản phẩm)');
    return _text;
}

if(quantityProductLeft > 0){
    btnLoading.html(getProductLeft());
}else{
    btnLoading.hide();
}

if ( collectionid == 0 ) {
    query = "/search?q=filter=((collectionid:product>" + collectionid + ')';
} else {
    query = "/search?q=filter=((collectionid:product=" + collectionid + ')';
} 
var genQuery = function(){
    url_param = ''; // Biến này dùng để lưu phần filter của buyer đưa lên url
    _query = query ; // Biến này để lưu câu truy vấn dữ liệu
    price = '',vendor = '', size1 = '', size2 = '', size3 = '', color = '' , type = '';
    url_price = 'price=',url_vendor = 'vendor=',url_color = 'color=',url_size1 = 'size=',url_size2 = 'size=',url_size3 = 'size=',url_type= 'type=';

    if ( check_slided_price ) {
        price = jQuery('.filter-price input[type=radio]:checked').val();
        url_price = url_price + jQuery('.filter-price input[type=radio]:checked').attr('data-price');
        url_param = url_param + url_price + '&';
        _query = _query + '&&' + price;
    } else {
        url_price = '';
    }

    if ( jQuery('.filter-vendor input:checked').length > 0 ) {
        jQuery('.filter-vendor li').each(function(){
            if ( jQuery(this).find('input').is(':checked') ) {              
                vendor = vendor + jQuery(this).find('input').val() + '||';
                url_vendor = url_vendor + $(this).find('label').attr('data-filter') + ',';          
            }
        });
        vendor = vendor + '####';
        vendor = '(' + vendor.split('||####')[0] + ')';
        url_vendor = url_vendor + '####';
        url_vendor = url_vendor.split(',####')[0];
        url_param = url_param + url_vendor + '&';
        _query = _query + '&&' + vendor;
    } else {
        url_vendor = '';
    }

    if ( jQuery('.filter-type input:checked').length > 0 ) {
        jQuery('.filter-type li').each(function(){
            if ( jQuery(this).find('input').is(':checked') ) {              
                type = type + jQuery(this).find('input').val() + '||';
                url_type = url_type + $(this).find('label').attr('data-filter') + ',';          
            }
        });
        type = type + '####';
        type = '(' + type.split('||####')[0] + ')';
        url_type = url_type + '####';
        url_type = url_type.split(',####')[0];
        url_param = url_param + url_type + '&';
        _query = _query + '&&' + type;
    } else {
        url_type = '';
    }

   

    var query_final = _query + ')';
    if ( check_slided_price == false && jQuery('.filter-type input:checked').length == 0 && jQuery('.filter-vendor input:checked').length == 0 && jQuery('.filter-variant input:checked').length == 0) {
        if ( collectionid == 0 ) {
            query_final = "/search?q=filter=(collectionid:product>" + collectionid + ")";
        } else {
            query_final = "/search?q=filter=(collectionid:product=" + collectionid + ")";
        } 
        if ( check_url_param ) {
            history.pushState(null, null, window.location.pathname);
        }
    } else {
        url_param = url_param + '####';
        url_param = url_param.split('&####')[0];        
        if ( check_url_param ) {
            history.pushState(null, null, '?' + url_param );
        }
        if ( cur_page >= 1 && check_url_param ) {
            history.pushState(null, null, '?' + url_param );
        }
    }
    query_final = query_final.replace('/search?q=filter=', '');
    query_final = encodeURIComponent(query_final);
    query_final = '/search?q=filter=' + query_final;
    return query_final;
}

// Ở đây chúng ta sẽ setTimeout cho function này vì khi khách sản click liên tục sẽ dẫn đến
// trạng request nhiều lần, nên mình sẽ setTimeout 1s để khi khách hàng click liên tục
// sẽ không bị request nhiều lần nữa.
var filter_append_product = function(){
    clearTimeout(timeOutFilter);
    timeOutFilter = setTimeout(function(){      
        total_page = 0,cur_page = 1;            
        url = genQuery();
        jQuery.ajax({
            url: url + '&view=pagesize',
            success:function(data){
                total_page = parseInt(data.split('####')[0]);
                collectionSize = parseInt(data.split('####')[1]);
                console.log('collection-size=' + collectionSize);
                btnLoading.hide();
                if ( total_page > 1 ) {
                    btnLoading.html(getProductLeft());
                    btnLoading.show();
                }
            }
        });
        //lay trang dau tien
        jQuery.ajax({
            url: url + '&view=filter',
            success:function(data){             
                loadingcomplete = true; 
                //$('.empty').remove(); // Xóa phần thông báo hết hàng or không tìm thấy khi filter -> đặt class empty vào đoạn html đó
                productsContainer.html(''); // Xóa dữ liệu củ
                hideFilter.remove();
                productsContainer.append(data);
            }
        });
    },1000);
}

var filter_append_product_by_page = function(queryByPage){
    jQuery.ajax({
        url: queryByPage,
        success:function(data){             
            loadingcomplete = true; 
            productsContainer.html(data);
            hideFilter.remove();
        }
    });
}

// Khi buyer click vào input mình sẽ bắt sự kiện change của nó và chạy function filter_append_product() để get dữ liệu.
jQuery(document).ready(function(){
    jQuery('.filter-vendor input').change(function(){       
   filter_append_product();
    });
    jQuery('.filter-type input').change(function(){     
        filter_append_product();
    });

    jQuery('.filter-price input').change(function(){        
        check_slided_price = true;
        filter_append_product();
    });      

});



      
  </script>
  @endsection