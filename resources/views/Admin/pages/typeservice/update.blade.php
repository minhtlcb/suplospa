@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>Sửa</h1>
    <form action="{{$typeservice->id_type_service}}" method="POST" enctype="multipart/form-data">
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
          <option 
            @if($typeservice->id_service == $value->id_service)
              {{"selected"}}
            @endif
          value="{{$value->id_service}}">{{$value->name}}</option>
        @endforeach
      </select>
      
      <p>Image</p>
      <input type="file" name="image" >
      <img src="../../../public/upload/typeservice/{{$typeservice->image}}" style="width: 25%;height: 25%;">
      <p>Tên loại dịch vụ</p>
      <input type="text" name="name" value="{{$typeservice->name}}" class="required"  style=" width:100%">
      <p>Nội dung</p>
      <textarea id="textarea" name="describe">/{{$typeservice->describe}}</textarea>
      <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>
  </div>
@endsection