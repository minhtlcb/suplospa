@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>UPDATE THƯƠNG HIỆU</h1>
    <form action="{{$trademark->id_trademark}}" method="POST" enctype="multipart/form-data">
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
      
      <p>Tên thương hiệu</p>
      <input type="text" name="name" value="{{$trademark->name}}" class="required"  style=" width:100%">
      <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>
  </div>
@endsection