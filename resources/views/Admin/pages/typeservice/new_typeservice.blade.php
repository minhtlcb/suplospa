@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>Thêm loại dịch vụ</h1>
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

      <select name="id_service">
        @foreach($service as $value)
          <option value="{{$value->id_service}}">{{$value->name}}</option>
        @endforeach
      </select>

      <p>Image</p>
      <input type="file" name="image" >
      <p>Tên loại dịch vụ</p>
      <input type="text" name="name"  class="required"  style=" width:100%">
      <p>Nội dung</p>
      <textarea id="textarea" name="describe"></textarea>
      <button type="submit" class="btn btn-warning">ADD</button>
    </form>
  </div>
@endsection