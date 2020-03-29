@extends('Admin.layouts.master')
@section('content')
  <div class="content-wrapper">
      {{-- <form action="update" method="post">       
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
     <input class="btn btn-warning" type="submit" value="UPDATE"> --}}
    
    @if(session('thongbao'))
      <div class="alert alert-succcess">
         <b>{{session('thongbao')}}</b>
      </div>
    @endif
    {{csrf_field()}}


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">QUẢN LÝ USER</h3>
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 250px;">
            <input type="text" id="search_data" name="user" class="form-control pull-right" placeholder="Nhập email">
            <div onclick="ajaxSearch()" class="input-group-btn">
              <div class="btn btn-default"><i class="fa fa-search"></i></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover renderData">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name User</th>
              <th>Image</th>
              <th>Email</th>
              <th>Number Phone</th>
              <th>Address</th>
              <th>Role</th>
              <th>Note</th>
              <th>Create at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user as $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td ><img src="../../public/upload/user/{{$value->image}}" style="width: 100px;height: 80px;"></td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->adress}}</td>
                <td class="form-group">
                  <select name="role" id="role" class="form-control">
                    <option value="{{$value->role}}" checked>{{$value->role}}</option>
                    <option value="0">2</option>
                    <option value="0">0</option>
                  </select>
                  {{-- <select name="id_category">
                    @foreach($news_category as $value)
                      <option 
                        @if($news->id_category == $value->id_category)
                          {{"selected"}}
                        @endif
                      value="{{$value->id_category}}">{{$value->name}}</option>
                    @endforeach
                  </select> --}}
                </td>
                <td>{{$value->not}}</td>
                <td>{{$value->created_at}}</td>
                <td>
                  <a href="delete/{{$value->id}}" class="btn btn-danger">Delete</a>
                  <a href="update/{{$value->id}}" class="btn btn-warning">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

    <button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
    {{ $user->links() }} 
  </div>
@endsection