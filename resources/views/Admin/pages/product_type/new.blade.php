 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>THÊM LOẠI SẢN PHẨM
</h1>
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
{{-- <select name="id_service">
	@foreach($service as $value)
<option value="{{$value->id_service}}">{{$value->name}}</option>
@endforeach
</select> --}}


  	<p>Tên loại sản phẩm</p>

  	<input type="text" name="name"  class="required"  style=" width:100%">
  
 	

<button type="submit" class="btn btn-warning">ADD</button>

{{-- <button type="button" class="btn btn-warning"><a href="admin/introduce/update/{{$introduce->id_introduce}}">Update</a></button> --}}
{{-- <button type="button" class="btn btn-danger"><a href="#">Delete</a></button>
 --}}    <!-- /.content -->
</form>





  </div>

  

  @endsection