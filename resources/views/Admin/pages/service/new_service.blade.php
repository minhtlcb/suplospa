 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>Thêm dịch vụ
</h1>
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
  	<p>Tên dịch vụ</p>

  	<input type="text" name="name"  class="required"  style=" width:100%">
  
 	
<p>Nội dung</p>
   <textarea id="textarea" name="describe"></textarea>

<button type="submit" class="btn btn-warning">ADD</button>

{{-- <button type="button" class="btn btn-warning"><a href="admin/introduce/update/{{$introduce->id_introduce}}">Update</a></button> --}}
{{-- <button type="button" class="btn btn-danger"><a href="#">Delete</a></button>
 --}}    <!-- /.content -->
</form>





  </div>

  

  @endsection