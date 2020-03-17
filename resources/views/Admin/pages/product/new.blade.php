 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>THÊM SẢN PHẨM
</h1>
<form action="add" method="POST" enctype="multipart/form-data">
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
<option value="{{$value->id_types}}">{{$value->name}}</option>
@endforeach
</select>
Loại dịch vụ:
 	<select name="id_trademark">
 @foreach($trademark as $value)
<option value="{{$value->id_trademark}}">{{$value->name}}</option>
@endforeach
</select>
<p>SKU</p><input type="text" name="sku"  class="required"  style=" width:100%">
<p>Tên sản phẩm</p><input type="text" name="name"  class="required"  style=" width:100%">
<div id="chonfile">image

  <input type="file" name="image[]" style=" width:100%"></div>
 <div id='themfile'><a>THÊM FILE</a></div>

<p>Mô tả ngắn</p> <textarea id="textarea[]" name="short_description"  style=" width:100%"></textarea>
<p>Mô tả chi tiết</p><textarea id="textarea" name="long_description"></textarea>
<div class="hides"><p>Gía</p><input type="number" name="price" size="1" value="0" min="0"  style=" width:100%"></div>

<p>Gía so sánh</p><input type="number" name="price_comparison" size="1" value="0" min="0"   style=" width:100%">
<div class="hides"><p>Số lượng</p>
<input type="number" name="quantity" size="1" value="0" min="0"  style=" width:100%"></div>
New:<input type="checkbox" name="new">
<p>Giảm giá</p>
<input type="number" name="discount" size="1" value="0" min="0" >


<div class="themthuoctinh">
<a>THÊM THUỘC TÍNH SẢN PHẨM</a>
  </div>
  <div class="themnhom">
<a>THÊM NHÓM</a>
  </div>
  <table class="table">
<div class="add"></div>
 
</table>
<button type="submit" class="btn btn-warning">ADD</button>

{{-- <button type="button" class="btn btn-warning"><a href="admin/introduce/update/{{$introduce->id_introduce}}">Update</a></button> --}}
{{-- <button type="button" class="btn btn-danger"><a href="#">Delete</a></button>
 --}}    <!-- /.content -->
</form>





  </div>

  

  @endsection

  
