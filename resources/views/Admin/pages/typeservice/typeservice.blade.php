@extends('Admin.layouts.master')
@section('content')
	<div class="content-wrapper">

		<h1>Danh sách dịch vụ</h1>
		@if(session('thongbao'))
			<div class="alert alert-succcess">
				<b>{{session('thongbao')}}</b>
			</div>
		@endif
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Dịch vụ</th>
					<th>Loại dịch vụ</th>
					<<th>Image</th>
					<th>Mô tả</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($typeservice as $value)
					<tr>
						<td>{{$value->id_type_service}}</td>
						<td>{{$value->service->name}}</td>
						<td>{{$value->name}}</td>
						<td ><img src="../../public/upload/typeservice/{{$value->image}}" style="width: 100px;height: 80px;"></td>
						<td class="des">{{$value->describe}}</td>
						<td><a href="delete/{{$value->id_type_service}}">Delete</a></td>
						<td><a href="update/{{$value->id_type_service}}">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
		{{ $typeservice->links() }}
	</div>
@endsection