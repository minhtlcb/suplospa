 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>QUẢN LÝ USER</h1>
 @if(session('thongbao'))
                        <div class="alert alert-succcess">
                           <b>{{session('thongbao')}}</b>
                        </div>
                        @endif
<div class="container box">
  <h3 align="center">Tìm kiếm mail User</h3><br/></div>
 <div class="panel-body">
  <div class="form-group">
    <form action="search" method="post">
       {{csrf_field()}}
       <input type="text" name="search" id="search" placeholder="Nhập mail user" style="width: 80%;">
       <input type="submit" value="Tìm">
    </form>
  

    <form action="update" method="post">
        {{csrf_field()}}
   
      <input type="text" name="id" value="{{$user->id ?? ''}}" hidden>
      <input type="text" name="name" value="{{$user->name ?? ''}}" disabled>
      <input type="text" name="email" value="{{$user->email ?? ''}}" disabled>
     @if(isset($user)!=null)
      <select name="role">
         
        @if($user->role==1)
        <option selected value="1"> Admin </option>
        @else
        <option
        @if($user->role ==2)
          {{"selected"}}
         @endif 
         value="2">Quản lý</option>
        <option
         @if($user->role ==3)
          {{"selected"}}
         @endif value="3">Nhân viên</option>

        <option 
         @if($user->role==0)
          {{"selected"}}
         @endif
          value="0">Người dùng</option>
          @endif

      </select>
      @endif
 <input class="btn btn-warning" type="submit" value="UPDATE">
 
	

   </form>
   </div>

</div>
</div>
  

  @endsection