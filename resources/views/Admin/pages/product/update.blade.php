  @extends('Admin.layouts.master')
  @section('content')
 <div class="content-wrapper">

<h1>THÊM SẢN PHẨM
</h1>
<form action="{{$product->product}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
       @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-succcess">
                           <b>{{session('thongbao')}}</b>
                        </div>
                        @endif
{{-- <select name="id_service">
  @foreach($service as $value)
<option value="{{$value->id_service}}">{{$value->name}}</option>
@endforeach
</select> --}}
Loại sản phẩm:
<select name="id_types">
  @foreach($product_type as $value)
<option 
@if($product->id_types == $value->id_types)
  {{"selected"}}
  @endif
value="{{$value->id_types}}">{{$value->name}}</option>
@endforeach
</select>


Loại dịch vụ:
  <select name="id_trademark">
  @foreach($trademark as $value)
<option 
@if($product->id_trademark == $value->id_trademark)
  {{"selected"}}
  @endif
value="{{$value->id_trademark}}">{{$value->name}}</option>
@endforeach
</select>
<p>SKU</p><input type="text" name="sku" value="{{$product->sku}}"  class="required"  style=" width:100%">
<p>Tên sản phẩm</p><input type="text" name="name" value="{{$product->name}}"  class="required"  style=" width:100%">
  @foreach($arr = json_decode($product->image, true) as $key=>$val)
  <td class="des"><img src="../../../public/upload/product/{{$val}}" style="width: 100px;height: 100px;"></td>
    @endforeach


<div id="chonfile">Thay đổi image

  <input type="file" name="image[]" style=" width:100%"></div>
 <div id='themfile'><a>THÊM FILE</a></div>

<p>Mô tả ngắn</p>  <textarea id="textarea[]" name="short_description"  style=" width:100%">{{$product->short_description}}"</textarea>
<p>Mô tả chi tiết</p><textarea id="textarea" name="long_description">{{$product->long_description}}"</textarea>
<div class="hides"><p>Gía</p><input type="text" name="price" value="{{$product->price}}"   style=" width:100%"></div>

<p>Gía so sánh</p><input type="number" name="price_comparison" size="1" min="0" value="{{$product->price_comparison}}"  style=" width:100%">
<div class="hides"><p>Số lượng</p>
<input type="number" name="quantity" size="1" min="0" value="{{$product->quantity}}"  style=" width:100%">
New:<input type="checkbox" name="new" @if($product->new==1)
checked="checked">
@else
>
@endif
<p>Giảm giá</p>
<input type="number" name="discount" size="1" min="0" value="{{$product->discount}}">

</div>

<table class="table">
<div class="add">

</table>
{{-- <div class="themthuoctinh">
<a>THÊM THUỘC TÍNH SẢN PHẨM</a>
  </div> --}}
<button type="submit" class="btn btn-warning">UPDATE</button>

{{-- <button type="button" class="btn btn-warning"><a href="admin/introduce/update/{{$introduce->id_introduce}}">Update</a></button> --}}
{{-- <button type="button" class="btn btn-danger"><a href="#">Delete</a></button>
 --}}    <!-- /.content -->
</form>





  </div>

  
  @endsection