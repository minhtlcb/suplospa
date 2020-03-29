@extends('Admin.layouts.master')
@section('content')
	<div class="content-wrapper">
	    @if(session('thongbao'))
	      <div class="alert alert-succcess">
	        <b>{{session('thongbao')}}</b>
	      </div>
	    @endif

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Thống kê đơn hàng</h3>

				<div class="box-tools pull-right">
					<div class="has-feedback">
						<label>Date range button:</label>
						<div class="input-group">
							<button type="button" class="btn btn-default pull-right" id="daterange-btn">
								<span>
									<i class="fa fa-calendar"></i> Date range picker
								</span>
								<i class="fa fa-caret-down"></i>
							</button>
						</div>
					</div>
				</div><!-- /.box-tools -->
			</div><!-- /.box-header -->

			<div class="box-body">
				<div>
				<!-- Custom Tabs -->
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Tổng quan</a></li>
							<li><a href="#tab_2" data-toggle="tab">ĐH mới</a></li>
							<li><a href="#tab_3" data-toggle="tab">ĐH đang xử lý</a></li>
							<li><a href="#tab_4" data-toggle="tab">ĐH bị hủy</a></li>
							<li><a href="#tab_5" data-toggle="tab">ĐH bị hoàn trả</a></li>
							<li><a href="#tab_6" data-toggle="tab">ĐH thành công</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="box box-solid bg-teal-gradient">
									<div class="box-header">
										<i class="fa fa-th"></i>

										<h3 class="box-title">
											Biểu đồ thống kê
											<span id="chartTitle">trong tháng</span>
										</h3>

										<div class="box-tools pull-right">
											<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
											</button>
										</div>
									</div>
									<div class="box-body border-radius-none">
										<div class="chart" id="order-chart" style="height: 250px;"></div>
									</div>
									<!-- /.box-body -->
									<div class="box-footer no-border">
										<div class="row">
												<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
												<input type="text" 
												class="knob" 
												data-readonly="true" 
												value="{{($new->count()/$order->count())*100}}%" 
												data-width="60" 
												data-height="60"
												data-fgColor="#39CCCC">

												<div class="knob-label">Mới</div>
											</div>
										<!-- ./col -->
											<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
												<input type="text" 
												class="knob" 
												data-readonly="true" 
												value="{{($complete->total()/$order->count())*100}}" 
												data-width="60" 
												data-height="60"
												data-fgColor="#39CCCC">

												<div class="knob-label">Thành công</div>
											</div>
										<!-- ./col -->
											<div class="col-xs-4 text-center">
												<input type="text" 
												class="knob" 
												data-readonly="true" 
												value="{{($cancel->total()/$order->count())*100}}" 
												data-width="60" 
												data-height="60"
												data-fgColor="#39CCCC">

												<div class="knob-label">Hủy/Trả</div>
											</div>
											<!-- ./col -->
										</div>
										<!-- /.row -->
									</div>
								<!-- /.box-footer -->
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								<div>
									<p>Số lượng: <b id="countNewOrder">{{$new->count()}}</b></p>
									<p>Tổng giá trị: <b id="totalPriceNew">{{$new->sum('total_price')}}</b></p>
									{{-- <p>Số lượng hàng: <b id="numProcd">{{$new}}</b></p> --}}
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								<div>
									<p>Số lượng: <b id="countProcOrder">{{$processing->total()}}</b></p>
									<p>Tổng giá trị: <b id="totalPriceProc">{{$processing->sum('total_price')}}</b></p>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_4">
								<div>
									<p>Số lượng: <b id="countCancelOrder">{{$cancel->total()}}</b></p>
									<p>Tổng giá trị: <b id="totalPriceCanc">{{$cancel->sum('total_price')}}</b></p>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_5">
								<div>
									<p>Số lượng: <b id="countReturnOrder">{{$return->total()}}</b></p>
									<p>Tổng giá trị: <b id="totalPriceRe">{{$return->sum('total_price')}}</b></p>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_6">
								<div>
									<p>Số lượng: <b id="countCompOrder">{{$complete->total()}}</b></p>
									<p>Tổng giá trị: <b id="totalPriceComp">{{$complete->sum('total_price')}}</b></p>
								</div>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- nav-tabs-custom -->
		        </div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</div>
@endsection