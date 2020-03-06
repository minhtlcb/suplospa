@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">

<h1>Tin tuyển dụng</h1>

  @if(session('thongbao'))
    <div class="alert alert-succcess">
       <b>{{session('thongbao')}}</b>
    </div>
  @endif

<table class="table">
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
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $recruitment->links() }}
</div>

@endsection