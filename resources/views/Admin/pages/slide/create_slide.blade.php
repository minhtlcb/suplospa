@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>Tạo banner mới</h1>
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

      <p>Tiêu đề banner</p>
      <input type="text" name="title"  class="required"  style=" width:100%">

      <p>Hình ảnh</p>
      <input type="file" id="file" name="file" accept="image/*"/>

      <p>Nội dung</p>
      <textarea id="textarea" name="describe"></textarea>

      <button type="submit" class="btn btn-warning">Thêm</button>
    </form>
  </div>
@endsection