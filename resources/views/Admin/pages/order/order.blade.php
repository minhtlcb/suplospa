@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">
    <h1>ĐƠN HÀNG MỚI</h1>
    @if(session('thongbao'))
      <div class="alert alert-succcess">
        <b>{{session('thongbao')}}</b>
      </div>
    @endif

    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>user đặt hàng</th>
            <th>Địa chỉ</th>
            <th>Tổng tiền</th>
            <th>Phương thức thanh toán</th>
            <th>Ghi chú</th>
            <th>Ngày đặt hàng</th>
            <th>Chi tiết</th>
            <th>Hủy đơn</th>
            <th>Xử lý</th>
          </tr>
        </thead>
        <tbody>
          @foreach($order as $value)
            <tr>
              <td>{{$value->id_order}}</td>
              @if($value->id==0)
                <td>Người dùng chưa đăng kí</td>
              @else
                <td>{{$value->user->name}}</td>
              @endif

              <td>{{$value->address}}</td>
              <td>{{$value->total_price}}</td>
              @if($value->payment_method==1)
                <td>Thanh toán khi nhận hàng</td>
              @else
                <td>no method</td>
              @endif
              <td>{{$value->not}}</td>
              <td>{{$value->created_at}}</td>
              <td><a href="orderdetail/{{$value->id_order}}">Chi tiết</a></td>
              <td><a href="cancel/{{$value->id_order}}">Hủy đơn</a></td>
              <td><a href="handlingdelivery/{{$value->id_order}}">Xử lý</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $order->links() }}
  </div>
@endsection