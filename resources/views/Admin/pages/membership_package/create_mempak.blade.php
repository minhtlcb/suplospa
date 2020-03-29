@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

  <h1>Thêm gói thành viên</h1>
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
    
    <p>Tên gói</p>
    <input type="text" name="name"  class="required"  style=" width:100%">

    <p>Hình ảnh</p>
    <input type="file" id="image" name="image" accept="image/*"/>
    
    <p>Giá gói</p>
    <input type="number" name="price"  class="required" min="0" style=" width:50%">

    <p>Chi tiết</p>
    <textarea id="textarea" name="description"></textarea>


    <button type="submit" class="btn btn-warning">Thêm</button>
  </form>
  </div>
@endsection