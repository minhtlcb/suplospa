@extends('Admin.layouts.master')
@section('content')
	<div class="content-wrapper">
		{{csrf_field()}}

		@if(session('thongbao'))
			<div class="alert alert-succcess">
				<b>{{session('thongbao')}}</b>
			</div>
		@endif
		
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách dịch vụ</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 200px;">
						<input type="text" id="search_data" name="service" class="form-control pull-right" placeholder="Nhập tên dịch vụ">
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
								<td>{{$sr->describe}}</td>
								<td><a href="delete/{{$sr->id_service}}">Delete</a></td>
								<td><a href="update/{{$sr->id_service}}">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		
		<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>
		{{ $service->links() }}
	</div>
@endsection