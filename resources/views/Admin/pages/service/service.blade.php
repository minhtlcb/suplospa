 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>Danh sách dịch vụ
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
			
			<th>Tên dịch vụ</th>
			<th>Mô tả</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($service as $sr)
		<tr>
            <td>{{$sr->id_service}}</td>

			<td>{{$sr->name}}</td>
			<td class="des">{{$sr->describe}}</td>
			<td><a href="delete/{{$sr->id_service}}">Delete</a></td>
			<td><a href="update/{{$sr->id_service}}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>

</table>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $service->links() }}



  </div>

  

  @endsection