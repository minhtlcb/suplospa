@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">

<h1>ĐƠN HÀNG BỊ HỦY</h1>
@if(session('thongbao'))
<div class="alert alert-succcess">
<b>{{session('thongbao')}}</b>
</div>
@endif
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>user đặt hàng</th>
<th>Địa chỉ</th>
<th>Tổng tiền</th>
<th>Phương thức thanh toán</th>
<th>Ghi chú</th>
<th>Ngày đặt hàng</th>
<th>Trạng thái</th>
<th>Chi tiết</th>


</tr>
</thead>
<tbody>
@foreach($order as $value)
<tr>
<td>{{$value->id_order}}</td>
@if($value->id==0)
{
<td>Người dùng chưa đăng kí</td>
}
@else
<td>{{$value->user->name}}</td>
@endif

<td>{{$value->address}}</td>
<td>{{$value->total_price}}</td>
@if($value->payment_method==1)
<td>Thanh toán khi nhận hàng</td>
@endif
<td>{{$value->not}}</td>
<td>{{$value->created_at}}</td>
@if($value->status==10)
<td>Hủy đơn</td>
@elseif($value->status==20)
<td>Hàng bị trả</td>
@endif
<td><a href="orderdetail/{{$value->id_order}}">Chi tiết</a></td>


</tr>
@endforeach
</tbody>

</table>
{{-- <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
--}}
{{ $order->links() }}
{{-- 
@foreach ($image_product as $value)
@foreach($arr = json_decode($value->image, true) as $key=>$val)


{{ $val}} <br>

@endforeach --}}

{{-- 	
@endforeach --}}


</div>




@endsection