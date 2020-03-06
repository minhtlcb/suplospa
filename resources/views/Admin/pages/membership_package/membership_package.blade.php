@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">

<h1>Gói thành viên</h1>

  @if(session('thongbao'))
    <div class="alert alert-succcess">
       <b>{{session('thongbao')}}</b>
    </div>
  @endif

<table class="table">
  <thead>
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
  </thead>
  <tbody>
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
  </tbody>

</table>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $membership_pakage->links() }}
</div>

@endsection