@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">
    @if($countt>=0)
    {
      {{'bạn chỉ có thể thêm 1 bài giới thiệu'}}
    }
    @else
    <h1>Giới thiệu</h1>
    <form action="add" method="POST" enctype="multipart/form-data">
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
      <p>Tiêu đề</p>
      <input type="text" name="title"  class="required"  style=" width:100%">

      <p>Image</p>
      <input type="file" name="image" id="image" >

      <p>Backgroup image</p>
      <input type="file" name="backgroup_image" >

      <p>Nội dung</p>
      <textarea id="textarea" name="content"></textarea>

      <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>
  </div>
  @endif
@endsection
