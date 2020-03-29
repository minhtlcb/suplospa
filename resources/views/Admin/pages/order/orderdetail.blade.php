@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">

<h1>CHI TIẾT ĐƠN HÀNG({{$id_order}})</h1>
@if(session('thongbao'))
<div class="alert alert-succcess">
<b>{{session('thongbao')}}</b>
</div>
@endif
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Id sản phẩm</th>
<th>Tên sản phẩm</th>

<th>Image</th>
<th>Số lượng</th>
<th>Gía bán</th>


</tr>
</thead>
<tbody>
@foreach($order_detail as $value)
<tr>
<td>{{$value->id_order}}</td>
<td>{{$value->product->id_product}}</td>
<td>{{$value->product->name}}</td>

@foreach($arr = json_decode($value->product->image, true) as $key=>$val)

@endforeach

<td class="des"><img src="../../../public/upload/product/{{$val}}" style="width: 100px;height: 100px;"></td>


{{-- td>{{$value->image}}</td> --}}

<td>{{$value->quantity}}</td>
<td>{{$value->price}}</td>


</tr>
@endforeach
</tbody>

</table>









<button type="button" class="btn btn-warning"><a href="{{ URL::previous() }}">Back</a></button>
{{ $order_detail->links() }}
{{-- 
@foreach ($image_product as $value)
@foreach($arr = json_decode($value->image, true) as $key=>$val)


{{ $val}} <br>

@endforeach --}}

{{-- 	
@endforeach --}}


</div>




@endsection