<div class="col-md-3">
	<table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">hỗ trợ khách hàng</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<th>
    		<i class="fas fa-envelope-square">
      	<a class="phone sizef" href="mailto: thinh.ngo99pc@gmail.com">Email: support@suplo.com </a></i><br>
      	<i class= "fa fa-phone">
      	<a class="phone sizef" href="0975275961">Hottline : 0934 323 882 </a>
      </i>
      </th>
    </tr>
  </tbody>
</table>



	<table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">danh mục tin tức</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<th style="float: left;">
    		@foreach($news_categoryc as $val)
      	<a class="phone sizef" href="{{url('newscategory/'.$val->id_category)}}"> > {{$val->name}}</a><br>
            @endforeach
      </th>
    </tr>
  </tbody>
</table>



	<table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">Tin tức mới nhất</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<th>
    		@foreach($newc as $val)
    		


    		<div class="row">
    	<div class="col-md-5 alin2">
										
										<a href="#" class="overnight"><img class="img1 phone" src="{{url('public/upload/blogs/'.$val->image)}}"></a>
		</div>
		<div class="col-md-7 alin2">
									<div class="sizeff phone">
										<a href="{{url('newsdetail/'.$val->id_news)}}" >{{$val->title}}</a>
									</div>
		</div>
	</div>
@endforeach


      </th>
    </tr>
  </tbody>
</table>

<table class="table" style="border: 1px solid #ff789e;">
  <thead>
    <tr>
      <th class="nen text-center" scope="col">từ khóa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<th style="float: left;">
      	<a class="phone sizef boder1" href="#"> Dịch vụ</a>
      	<a class="phone sizef boder1" href="#"> Làm đẹp</a>
      </th>
    </tr>
  </tbody>
</table>

</div>