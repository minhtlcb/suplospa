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
      <h3 class="box-title">Gói thành viên</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 200px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>id</th>
          <th>Tên gói</th>
          <th>Ảnh</th>
          <th>Nội dung chi tiết</th>
          <th>Giá</th>
          <th>Thời gian tạo</th>
          <th>Thời gian cập nhập</th>
          <th>Thao tác</th>
        </tr>
        @foreach($membership_pakage as $sr)
        <tr>
          <td>{{$sr->id_pakage}}</td>
          <td>{{$sr->name}}</td>
          <td>{{$sr->image}}</td>
          <td>{{$sr->description}}</td>
          <td>{{$sr->price}}</td>
          <td>{{$sr->created_at}}</td>
          <td>{{$sr->updated_at}}</td>
          <td>
            <a class="btn btn-primary" href="update/{{$sr->id_package}}">Edit</a>
            <a class="btn btn-danger" href="delete/{{$sr->id_package}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.box-body -->
  </div>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $membership_pakage->links() }}
</div>

@endsection