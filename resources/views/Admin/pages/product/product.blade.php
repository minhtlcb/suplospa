 	@extends('Admin.layouts.master')
	@section('content')
 <div class="content-wrapper">

<h1>DANH SÁCH SẢN PHẨM</h1>
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
			<th>Thương hiệu</th>
			<th>Tên sản phẩm</th>
			<th>Image</th>
			<th>Số lượng</th>
			<th>New</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($product as $value)
		<tr>
            <td>{{$value->id_product}}</td>
            <td>{{$value->product_type->name}}</td>
             <td>{{$value->trademark->name}}</td>
             <td>{{$value->name}}</td>
  @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
  	@endforeach

<td class="des"><img src="../../public/upload/product/{{$val}}" style="width: 100px;height: 100px;"></td>
   

             {{-- td>{{$value->image}}</td> --}}

             <td>{{$value->quantity}}</td>
            <td>
            	@if($value->new==1)
            	{{'HOT'}}
            	@else
            	
            		{{$value->new}}
            	
            </td>
                @endif
			<td><a href="delete/{{$value->id_product}}">Delete</a></td>
			<td><a href="update/{{$value->id_product}}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>

</table>
<button type="button" class="btn btn-warning"><a href="add">Thêm</a></button>

{{ $product->links() }}
{{-- 
@foreach ($image_product as $value)






  @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
  	
 {{ $val}} <br>

   
@endforeach --}}

{{-- 	
@endforeach --}}


  </div>


  

  @endsection