@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>Banner</h1>
    @if(session('thongbao'))
      <div class="alert alert-succcess">
         <b>{{session('thongbao')}}</b>
      </div>
    @endif

    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Tiêu đề banner</th>
          <th>File</th>
          <th>Nội dung</th>
          <th>Thời gian tạo</th>
          <th>Thời gian cập nhập</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach($slide as $sr)
        <tr>
          <td>{{$sr->id_slide}}</td>
          <td>{{$sr->title}}</td>
          <td>{{$sr->file}}</td>
          <td>{{$sr->describe}}</td>
          <td>{{$sr->created_at}}</td>
          <td>{{$sr->updated_at}}</td>
          <td>
            <a class="btn btn-primary" href="update/{{$sr->id_slide}}">Edit</a>
            <a class="btn btn-danger" href="delete/{{$sr->id_slide}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
    <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
    {{ $slide->links() }}
  </div>
@endsection