{{--  	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">
@foreach($introduce as $introduce)
@endforeach
    <!-- Content Header (Page header) -->
    <small>Giới thiệu</small>
<form action="update/{{$introduce->id_introduce}}" method="POST" enctype="multipart/form-data">
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
<img src="../../public/upload/introduce/{{$introduce->image}}" style="width: 25%;height: 25%;">
<p>Backgroup image</p>
<input type="file" name="backgroup_image" >
<img src="../../public/upload/introduce/{{$introduce->backgroup_image}}" style="width: 25%;height: 25%;">
<p>Nội dung</p>
   <textarea id="textarea" name="content">{{$introduce->content}}</textarea>

<button type="submit" class="btn btn-warning">UPDATE</button>

{{-<button type="button" class="btn btn-warning"><a href="admin/introduce/update/{{$introduce->id_introduce}}">Update</a></button> --}}
{{-- <button type="button" class="btn btn-danger"><a href="#">Delete</a></button>
 --}}    <!-- /.content -->
{{-- </form>
  </div>

  

  @endsection --}} 
    @extends('Admin.layouts.master')
  @section('content')
 <div class="content-wrapper">

<h1>GIỚI THIỆU
</h1>
 @if(session('thongbao'))
                        <div class="alert alert-succcess">
                           <b>{{session('thongbao')}}</b>
                        </div>
                        @endif
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>image</th>
      <th>backgroup_image</th>
      <th>content</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($introduce as $value)
    <tr>
            <td>{{$value->id_introduce}}</td>
      <td>{{$value->title}}</td>
      <td class="des"><img src="../../public/upload/introduce/{{$value->image}}" style="width: 150px;height: 150px;"></td>
      <td class="des"><img src="../../public/upload/introduce/{{$value->backgroup_image}}" style="width: 150px;height: 150px;"></td>
      <td>{{$value->content}}</td>
     
      <td><a href="update/{{$value->id_introduce}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>

</table>
@if($count==0)
   <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
    @endif





  </div>

  

  @endsection