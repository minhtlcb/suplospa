@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>Thêm tin tức</h1>
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
      <p>Tên tin tức</p>
      <input type="text" name="title"  class="required"  style=" width:100%">

      <p>Phân loại</p>
      <select name="id_category">
        @foreach($news_category as $value)
            <option value="{{$value->id_category}}">{{$value->name}}</option>
        @endforeach
      </select>
        
      <p>Hình ảnh</p>
      <input type="file" id="image" name="image" accept="image/*"/>

      <p>Nội dung</p>
      <textarea id="textarea" name="details"></textarea>

      <button type="submit" class="btn btn-warning">Thêm</button>
    </form>
  </div>
@endsection