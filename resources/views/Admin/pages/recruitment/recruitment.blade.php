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
      <h3 class="box-title">Tin tuyển dụng</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="recruitment" id="search_data" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover renderData">
        <thead>
          <tr>
            <th>id</th>
            <th>Tên công việc</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Thời gian tạo</th>
            <th>Thời gian cập nhập</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($recruitment as $sr)
          <tr>
            <td>{{$sr->id_recruitment}}</td>
            <td>{{$sr->name}}</td>
            <td>{{$sr->title}}</td>
            <td>{{$sr->describe}}</td>
            <td>{{$sr->created_at}}</td>
            <td>{{$sr->updated_at}}</td>
            <td>
              <a class="btn btn-primary" href="update/{{$sr->id_recruitment}}">Edit</a>
              <a class="btn btn-danger" href="delete/{{$sr->id_recruitment}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $recruitment->links() }}
</div>

@endsection