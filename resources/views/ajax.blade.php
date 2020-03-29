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