@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">
    @if(session('thongbao'))
      <div class="alert alert-succcess">
         <b>{{session('thongbao')}}</b>
      </div>
    @endif

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">DANH SÁCH SẢN PHẨM</h3>
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 200px;">
            <input type="text" id="search_data" name="product" class="form-control pull-right" placeholder="Nhập tên dịch vụ">
            <div onclick="ajaxSearch()" class="input-group-btn">
              <div class="btn btn-default"><i class="fa fa-search"></i></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover renderData">
          <thead>
            <tr>
              <th>ID</th>
              <th>Loại sản phẩm</th>
              <th>Thương hiệu</th>
              <th>Tên sản phẩm</th>
              <th>Image</th>
              <th>Số lượng</th>
              <th>New</th>
              <th>Delete</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product as $value)
              <tr>
                <td>{{$value->id_product}}</td>
                <td>{{$value->product_type->name}}</td>
                <td>{{$value->trademark->name}}</td>
                <td>{{$value->name}}</td>
                @foreach($arr = json_decode($value->image, true) as $key=>$val)
                  <td class="des"><img src="../../public/upload/product/{{$val}}" style="width: 100px;height: 100px;"></td>
                @endforeach
                <td>{{$value->quantity}}</td>
                <td>
                @if($value->new==1)
                  {{'HOT'}}
                @else
                  {{$value->new}}
                  </td>
                @endif
                <td><a href="delete/{{$value->id_product}}">Delete</a></td>
                <td><a href="update/{{$value->id_product}}">Edit</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

    <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
    {{ $product->links() }}

  </div>
@endsection