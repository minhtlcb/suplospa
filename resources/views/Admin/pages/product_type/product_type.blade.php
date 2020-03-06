 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>LOẠI SẢN PHẨM
</h1>
 @if(session('thongbao'))
                        <div class="alert alert-succcess">
                           <b>{{session('thongbao')}}</b>
                        </div>
                        @endif
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			
			<th>Loại sản phẩm</th>
			
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($producttype as $value)
		<tr>
            <td>{{$value->id_types}}</td>
          
            <td>{{$value->name}}</td>
        
			<td><a href="delete/{{$value->id_types}}">Delete</a></td>
			<td><a href="update/{{$value->id_types}}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>

</table>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $producttype->links() }}



  </div>

  

  @endsection