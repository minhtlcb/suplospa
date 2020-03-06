@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">
    <h1>Sửa</h1>
    <form action="{{$news->id_news}}" method="POST" enctype="multipart/form-data">
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
      <input type="text" name="title"  class="required"  style=" width:100%" value="{{$news->title}}" >

      <p>Phân loại</p>
      <select name="id_category">
        @foreach($news_category as $value)
          <option 
            @if($news->id_category == $value->id_category)
              {{"selected"}}
            @endif
          value="{{$value->id_category}}">{{$value->name}}</option>
        @endforeach
      </select>
      <p>Hình ảnh</p>
      <input type="file" id="image" name="image" accept="image/*"/>
      <img src="../../../public/upload/blogs/{{$news->image}}" style="width: 25%;height: 25%;">

      <p>Nội dung</p>
      <textarea id="textarea" name="details">{{$news->details}}</textarea>

      {{-- <button class="btn btn-default" onclick="{{back()}}">Trở lại</button> --}}
      <button type="submit" class="btn btn-warning">Cập nhập</button>
    </form>
  </div>
@endsection