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
            <th>Tên danh mục</th>
            <th>Thời gian tạo</th>
            <th>Cập nhập</th>
            <th>Thao tác</th>
          </tr>
          @foreach($news_category as $sr)
            <tr>
              <td>{{$sr->id_category}}</td>
              <td>{{$sr->name}}</td>
              <td>{{$sr->created_at}}</td>
              <td>{{$sr->updated_at}}</td>
              <td>
                <a class="btn btn-primary" href="update/{{$sr->id_category}}">Edit</a>
                <a class="btn btn-danger" href="delete/{{$sr->id_category}}">Delete</a>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

    {{ $news_category->links() }}
  </div>

@endsection