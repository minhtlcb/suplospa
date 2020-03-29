@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">
    <h1>GIỚI THIỆU</h1>
    @if(session('thongbao'))
      <div class="alert alert-succcess">
        <b>{{session('thongbao')}}</b>
      </div>
    @endif
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>title</th>
          <th>image</th>
          <th>backgroup_image</th>
          <th>content</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($introduce as $value)
          <tr>
            <td>{{$value->id_introduce}}</td>
            <td>{{$value->title}}</td>
            <td class="des"><img src="../../public/upload/introduce/{{$value->image}}" style="width: 150px;height: 150px;"></td>
            <td class="des"><img src="../../public/upload/introduce/{{$value->backgroup_image}}" style="width: 150px;height: 150px;"></td>
            <td>{{$value->content}}</td>
            <td><a class="btn btn-default" href="update/{{$value->id_introduce}}">Edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @if($count==0)
      <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
    @endif
  </div>
@endsection