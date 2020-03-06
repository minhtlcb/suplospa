 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <small>Giới thiệu</small>
<form action="{{$introduce->id_introduce}}" method="POST" enctype="multipart/form-data">
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

  	<input type="text" name="title"  class="required" value="{{$introduce->title}}" style=" width:100%">
  
 	<p>Image</p>
<input type="file" name="image" id="image" >
<img src="../../../public/upload/introduce/{{$introduce->image}}" style="width: 25%;height: 25%;">
<p>Backgroup image</p>
<input type="file" name="backgroup_image">
<img src="../../../public/upload/introduce/{{$introduce->backgroup_image}}" style="width: 25%;height: 25%;">
<p>Nội dung</p>
   <textarea id="textarea" name="content">{{$introduce->content}}</textarea>

<button type="submit" class="btn btn-warning">UPDATE</button>

{{-- <button type="button" class="btn btn-warning"><a href="admin/introduce/update/{{$introduce->id_introduce}}">Update</a></button> --}}
{{-- <button type="button" class="btn btn-danger"><a href="#">Delete</a></button>
 --}}    <!-- /.content -->
</form>
  </div>

  

  @endsection