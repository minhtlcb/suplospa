@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">

    <h1>THÊM THƯƠNG HIỆU</h1>
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
      
      <p>Tên THƯƠNG HIỆU</p>
      <input type="text" name="name"  class="required"  style=" width:100%">
      <button type="submit" class="btn btn-warning">ADD</button>
    </form>
  </div>
@endsection