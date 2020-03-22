 @extends('Home.layouts.master')
  @section('content')
<head>
	<meta charset="UTF-8">
	<title>Giới Thiệu</title>
	<meta name="viewport" content="width = device-width , initial-scale = 1">
	<style>
		.abcxyz{
			background: url(http://theme.hstatic.net/1000185703/1000238955/14/breadcrumb_bg5.png?v=2347);
			background-attachment: fixed;
			position: relative;
		}
		.contentlogin{	
				position: absolute;
				top:50%;
				left: 50%;
				transform: translate(-50%,-50%);
		}
		.contentlogin_top h1{
				color: white;
		}
		.contentlogin_top h1{
				color: white;
		}
		.contentlogin_bot ul{
			display: flex;
			list-style: none;
			color: white;
			padding: 0 19px;
		}
		.contentlogin_bot ul li a{
			text-decoration: none;
			color: white;
		}
		.contentlogin_bot ul li a:hover{
			color: red;
		}
		.contentlogin_login_input{
			margin: 8px 0;
		}
		.login_h1{
			margin: 50px 0 22px 0;		
		}
		.home_about{
			margin: 50px 0;
			padding: 0 4%;
			text-align: justify;	
		}
		.content_tieude{
			text-align: center;
			padding: 20px 5% 0 5%;
			margin: 10px 0 40px 0;
		}
		.content_tieude h1{
			font-size: 23px;
			line-height: 35px;
		}
		.content_tieude p{
			padding: 20px 10% 0 10%;
			text-align: justify-all;
		}
		.content_noidung_anh img{
			border-radius: 100%;
			padding: 0;
			
			border: 5px solid #ff789e !important;
		}
		.content_noidung_anh{
			list-style: none;
			float: left;


			margin-right: 30px;
			/*text-align: center;*/
			/*margin-right: 30px;*/
			/*padding-right: 30px;*/
		}
		.content_noidung_test{
			/*padding: 20px 5% 0 7%;*/
			/*margin-left: 60px;*/
			/*margin: 0 9%;*/
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
		}
		.content_noidung_anh{
			/*border: 1px solid red;*/
			/*margin: 0 15px;*/
			/*width: 230px;*/
			/*margin-right: 20px;*/
			margin-bottom: 60px;
		}
		.content_noidung_anh h2{
			text-align: center;
			font-size: 15px;
			margin-top: 10px;
		}
		.content_noidung_anh p{
			text-align: center;
			font-size: 14px;
			margin-top: 10px;
		}
	
	</style>
</head>
<body>
	<div class="col-md-12 abcxyz" style="height: 300px; background-color:red">
			<div class="contentlogin">
				<div class="contentlogin_top">
					<h1>GIỚI THIỆU</h1>		
				</div>
				<div class="contentlogin_bot">
					<ul>
						<li><a href="">Trang chủ</a></li>
						<li style="margin: 0 5px">/</li>
						<li>Giới Thiệu</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="home_about">
			<p>Tọa lạc ở tòa nhà GP Invest 170 Đê La Thành - trung tâm của thủ đô Hà Nội, Suplo Beauty & Spa sở hữu hệ thống cơ sở vật chất hiện đại, đạt tiêu chuẩn quốc tế với: Khu vực tiếp đón và tư vấn sang trọng, Hệ thống phòng trị liệu bằng cả 2 phương pháp là thảo dược tự nhiên và công nghệ cao với máy móc, thiết bị tối tân, đúng chuẩn quy định của bộ Y tế. Ngoài ra, chúng tôi còn có hệ thống các phòng xông hơi cao cấp theo phong cách Nhật Bản và Thụy Điển. Khu vực spa, nghỉ dưỡng đậm chất thiền, tự tại và yên tĩnh.</p>
			<p>Đặc biệt, toàn bộ hệ thống các phòng trị liệu thẩm mỹ tại Suplo Beauty & Spa đều đạt tiêu chuẩn của Bộ y tế với các sản phẩm thảo dược tự nhiên sạch 100% cùng quy trình vô trùng nghiêm ngặt nhằm đảm bảo hiệu quả và an toàn cho quý khách hàng. Các máy móc, thiết bị sử dụng tại đây đều là đời mới nhất, được nhập khẩu trực tiếp từ Hoa Kỳ, Châu Âu, Nhật Bản, Hàn Quốc…</p>
			</div>
		</div>
		<div class="col-md-12">
			<div class="content_tieude">
		
		<h1><font style="color: violet">
			Nơi quy tụ những bàn tay vàng</font><br>ĐỘI NGŨ CHUYÊN GIA CỦA CHÚNG TÔI</h1>

				<p>Một trong những yếu tố quan trọng tạo nên đẳng cấp của Suplo Beauty & Spa chính là đội ngũ nhân viên vật lý trị liệu, cố vấn, bác sỹ, chuyên gia thẩm mỹ hàng đầu khu vực châu Á và tại Việt Nam với hàng chục năm kinh nghiệm trong ngành.</p>
	</div>
		</div>
		<div class="container-fluid">
			<div class="row">
			<!-- <div class="col-md-1"></div> -->
		<div class="col-md-12">
			<div class="content_noidung">
					<ul class="content_noidung_test">

						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional5_d910cfdd018145ab8206936069e72ffb.png" >
							<h2>MR. KHÔI PHẠM</h2>
							<p>Chuyên gia massage nhật bản</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional-avatar_a5782596c5a74cb4863d9e58087e726f.png" >
							<h2>MRS. GIANG TRAN</h2>
							<p>Chuyên gia massage hàn quốc</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional2_f92c51a084904b26a4b4e1980f6554b4.png">
							<h2>MR. ĐÀI TRANG</h2>
							<p>Chuyên gia vật lý trị liệu hoa kỳ</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional3_47e6ff3f28be435fb992d6a3b2e90777.png">
							<h2>MRS. NGÔ BÍCH</h2>
							<p>Chuyên gia vật lý trị liệu hoa kỳ</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional4_b5ab22b9906f433da5d8b033325cefa1.png">
							<h2>MR. YẾN ANH</h2>
							<p>Bác sĩ thẩm mĩ hàn quốc</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional4_b5ab22b9906f433da5d8b033325cefa1.png">
							<h2>MR. YẾN ANH</h2>
							<p>Bác sĩ thẩm mĩ hàn quốc</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional4_b5ab22b9906f433da5d8b033325cefa1.png">
							<h2>MR. YẾN ANH</h2>
							<p>Bác sĩ thẩm mĩ hàn quốc</p>
						</li>
						<li class="content_noidung_anh">
							<img class="cart" src="https://file.hstatic.net/1000185703/article/professional4_b5ab22b9906f433da5d8b033325cefa1.png">
							<h2>MR. YẾN ANH</h2>
							<p>Bác sĩ thẩm mĩ hàn quốc</p>
						</li>
					</ul>
				

			</div>
			<!-- <div class="col-md-1"></div> -->
		</div>
		</div>
		</div>
@endsection