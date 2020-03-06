@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">

  <h1>Danh mục tin tức</h1>

    @if(session('thongbao'))
      <div class="alert alert-succcess">
         <b>{{session('thongbao')}}</b>
      </div>
    @endif

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Id_cate</th>
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
  <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

  {{ $news->links() }}
</div>

@endsection