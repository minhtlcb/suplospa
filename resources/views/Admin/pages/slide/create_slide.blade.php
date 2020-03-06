@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

  <h1>Thêm tin tuyển dụng</h1>
  <form action="postadd" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $err)
          {{$err}}<br>
        @endforeach
      </div>
    @endif
    @if(session('thongbao'))
      <div class="alert alert-succcess">
        <b>{{session('thongbao')}}</b>
      </div>
    @endif
    
    <p>Tên tuyển dụng</p>
    <input type="text" name="name"  class="required"  style=" width:100%">

    <p>Tiêu đề</p>
    <input type="text" name="title"  class="required"  style=" width:100%">

    <p>Nội dung</p>
    <textarea id="textarea" name="describe"></textarea>

    <button type="submit" class="btn btn-warning">Thêm</button>
  </form>
  </div>
@endsection