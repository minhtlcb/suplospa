@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">

<h1>Danh mục tin tức</h1>

  @if(session('thongbao'))
    <div class="alert alert-succcess">
       <b>{{session('thongbao')}}</b>
    </div>
  @endif

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Tên danh mục</th>
      <th>Thời gian tạo</th>
      <th>Cập nhập</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
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
  </tbody>

</table>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $news_category->links() }}
</div>

@endsection