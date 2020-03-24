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