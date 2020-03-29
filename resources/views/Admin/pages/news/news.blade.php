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
      <h3 class="box-title">Danh mục tin tức</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 200px;">
          <input type="text" id="search_data" name="blogs" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" onclick="ajaxSearch()" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover renderData">
        <thead>
          <tr>
            <th>Id</th>
            <th>Loại tin tức</th>
            <th>Người tạo/cập nhập</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Nội dung</th>
            <th>Thời gian tạo</th>
            <th>Thời gian cập nhập</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($news as $val)
          <tr>
            <td>{{$val->id_news}}</td>
            <td>{{$val->news_category->name}}</td>
            <td>{{$val->user->name}}</td>
            <td>{{$val->title}}</td>
            <td>{{$val->image}}</td>
            <td>{{$val->details}}</td>
            <td>{{$val->created_at}}</td>
            <td>{{$val->updated_at}}</td>
            <td>
              <a class="btn btn-primary" href="update/{{$val->id_news}}">Edit</a>
              <a class="btn btn-danger" href="delete/{{$val->id_news}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

  {{ $news->links() }}
</div>

@endsection