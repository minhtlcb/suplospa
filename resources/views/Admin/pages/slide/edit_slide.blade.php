@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>Sửa</h1>
    <form action="{{$slide->id_slide}}" method="POST" enctype="multipart/form-data">
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
      <input type="text" name="title" value="{{$slide->title}}" class="required"  style=" width:100%">

      <p>Hình ảnh</p>
      <input type="file" id="file" name="file" accept="image/*"/>
      <img src="../../../public/upload/banner/{{$slide->file}}" style="width: 25%;height: 25%;">

      <p>Nội dung</p>
      <textarea id="textarea" name="describe">{{$slide->describe}}</textarea>

      <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>

  </div>
@endsection