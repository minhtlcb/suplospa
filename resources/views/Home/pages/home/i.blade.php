
 @extends('Home.layouts.master')
  @section('content')


  <title>Suplospa Haravne</title>

<div class="container main">
  <div class="row main-stree">
    <div class="col-md-6 ">
         <div class="main-text">
            @foreach($introduce as $val)
          @endforeach
        <h2 class="main-text-chaomung">{{$val->title}}</h2>
                   <p class="main-supertext">
                {!!$val->content!!}
           <p>
         </div>
         <div>
           <div class="btn-bottom">
              <button>Onclick to me!</button>
            </div>
         </div>
    </div>
    <div class="col-md-6" >
      <div class="imgmain" >
         <img src="public/upload/introduce/{{$val->image}}">
      </div>
    </div>
  </div>
</div>

<!-- ********************end main**************************** -->

<!-- ********************Main-dang-ki**************************** -->
<div class="container-fluid main-dangki">
  <div class="col-md-12">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8 main-dangki-top text-center">
        <h2 class="">Trăm thấy không bằng một thử</h2>
        <h2 class="date-time-now ">Trải nghiệm miễn phí dịch vụ vào ngày <span style="color: #ff789e;"> 21/04/2017 </span></h2>
        <a class="btn-dangki" href="">Đăng kí ngay</a>
      </div>
    </div>
  </div>
</div>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
      <div class="main-dangki-bottom">
        <h2 class="txt-khampha">Cùng khám phá</h2>
        <h2 class="txt-dichvu">CÁC DỊCH VỤ CỦA CHÚNG TÔI</h2>
        <p>Với slogan “Tỏa sáng nét đẹp Á Đông”, Suplo Beauty & Spa luôn nỗ lực hết mình để đem đến cho chị em những giải pháp nghỉ dưỡng, trị liệu, thẩm mỹ hoàn hảo từ làn da, dáng vóc đến từng đường nét trên cơ thể.</p>
      </div>
    <div class="col-md-2"></div>
  </div>
</div>
</div>

<!-- *****************end-Main-dang-ki*************************** -->

<!-- *****************Main-dich-vu*************************** -->
<div class="container dichvu">
 <div class="row">
   <div class="col-md-12 maindichvu">
     <div class=" maindichvu-link">
       <button id="dichvucongnghecao" onclick="getimaget1()"  href="">Dịch vụ công nghệ cao</button>
       <button id="thugianvalamdep" onclick="getimaget2()" href="">Thư giãn và làm đẹp</button>
       <button id="vatlytrilieu" onclick="getimaget3()" href="">Vật lý trị liệu</button>
     </div>
   </div>
   <div class="col-md-12">
     <div class=" row maindichvu-content">
        <div class="col-md-1"></div>
        <div class="col-md-5 box-img" id="picture">
          <img id="picture-img" class="maindichvu-content-img" src="image/massage-da-nong_52899887d012446baa068beddb851a44_large.webp">
        </div>
        <div class="col-md-5 box-content" id="content-text">
          <h2 id="content-text-h2">DỊCH VỤ CÔNG NGHỆ CAO</h2>
          <p id="content-text-p">Nhận thấy rằng, ứng dụng công nghệ cao vào liệu trình điều trị thẩm mỹ thực sự mang lại kết quả vượt trội với độ an toàn gần như tuyệt đối, Suplo luôn chủ trọng đầu tư và tiếp nhận chuyển giao các công nghệ làm đẹp hiện đại và tiên tiến nhất trên thế giới. Suplo đã không ngừng tìm kiếm các đối tác tin cậy để nâng cao hiệu quả của quá trình trị liệu và làm đẹp. Chúng tôi tự hào là một trong những đối tác thân thiết và lâu năm của hãng Maria Galland nổi tiếng của Pháp, là thương hiệu thẩm mỹ đứng đầu tại châu Âu.Với những nỗ lực không ngừng của đội ngũ nhân viên từ Suplo Beauty & Spa, chúng tôi hi vọng mang lại cho chị em phương pháp làm đẹp hiệu quả và an toàn nhất, xứng đáng với sự tin tưởng của hàng trăm khách hàng đã dành cho chúng tôi.</p>
          <a href="">XEM THÊM ></a>
        </div>
        <div class="col-md-1"></div>
      </div> 
   </div>
 </div>
</div>
<!-- *****************end-Main-dich-vu*************************** -->

<!-- *****************main-people*************************** -->
<div class="container-fluid main-people">
  <div class="container">
  <div class="col-md-12">
  <div class="row">
    <div class="main-people-box-text text-center">
      <h2>Nơi quy tụ những bàn tay vàng</h2>
      <h3>ĐỘI NGŨ CHUYÊN GIA CỦA CHÚNG TÔI</h3>
      <p>Một trong những yếu tố quan trọng tạo nên đẳng cấp của Suplo Beauty & Spa chính là đội ngũ nhân viên vật lý trị liệu, cố vấn, bác sỹ, chuyên gia thẩm mỹ hàng đầu khu vực châu Á và tại Việt Nam với hàng chục năm kinh nghiệm trong ngành.</p>
    </div>
  
  <div class="row container">
    <div class="col-md-12">
      <div class="row">
      <div class=" col-md-3 col-sm-4">
        <div class="main-people-img text-center">
          <img id="image1" src="image/1.people.webp">
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="main-people-img text-center">
          <img id="image2" src="image/2.people.webp">
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="main-people-img text-center">
          <img id="image3" src="image/3.people.webp">
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="main-people-img text-center">
          <img id="image4" src="image/5.people.webp">
        </div>
      </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  </div> 
</div>
<!-- *****************end main-people*************************** -->

<!-- *****************main-sanpham*************************** -->

<div class="container-fluid main-sanpham">
  <div class="row-main-sanpham" >
    <div class="col-md-12 content-main-sanpham">
      <h2 class="thuonghieu">Từ các thương hiệu uy tín</h2>
      <h2 class="noibat">CÁC SẢN PHẨM NỔI BẬT NHẤT</h2>
      <p class="noidung">Các sản phẩm chăm sóc và làm đẹp của Suplo Beauty & Spa được đặt và nhập trực tiếp từ các thương hiệu nước ngoài nổi tiếng nhất , đảm bảo sẽ đem tới cho khách hàng những sản phẩm chất lượng tốt nhất.</p>
    </div>
    <div class="col-md-12">
      <div class="row">
          @foreach($product as $value)
        <div class="col-md-3">
          <div class="card">
             @foreach($arr = json_decode($value->image, true) as $key=>$val)
  
                                      @continue;
                                     @endforeach
            <img src="public/upload/product/{{$val}}" class="card-img-top" alt="...">
            <div class="card-body main-the">
              <h5 class="card-title main-title">{{$value->name}}</h5>
              <p class="card-text main-price"> {{number_format(($value->price*(100-$value->discount)/100),0,",",".")}}đ  
              <del>{{number_format(($value->price_comparison),0,",",".")}}</del></p>
              <div class="btn-mua">
                <button class="btn btn-outline-secondary">Xem chi tiết</button>
                <button class="btn btn-outline-secondary">Mua</button>
              </div>
            </div>
          </div>
        </div>
         @endforeach
    
       
   
      </div>
    </div>
  </div>
</div>
<!-- *****************end main-sanpham*************************** -->

<!-- *****************Main dang-ki-thanh-vien*************************** -->

 <div class=" text-center"> 
 <h2 class="text-center" style="padding: 50px 0 0px 0;">ĐĂNG KÍ THÀNH VIÊN</h2> 
 <div class="row" style="width: 100%;">
 
  <div class="col-md-2"></div>
  <div class="col-md-8 two">
    <p><span class="text-center">Nếu bạn còn đang băn khoăn về một địa chỉ làm đẹp đáng tin cậy, hãy để Suplo Beauty & Spa đồng hành cùng bạn ngay hôm nay. Với đẳng cấp vượt trội mang tầm quốc tế, Suplo xứng đáng là chốn thiên đường, chăm sóc cho vẻ đẹp, sức khỏe và tâm hồn của bạn!</span> </p>
  </div>
  </div>
 
  <section id="home-five" > 
      <div class="container">
  <div class="col-md-12">
    <div class="row">
   <div class="col-md-4 boder123" style="padding-bottom: 10px  !important;">
       @foreach($membership_pakage as $vale)
<style>
  .pack-wrapper {
  margin-bottom: 30px;
  }
</style>
     <img class="img-resize1" src="public/upload/membership_package/{{$vale->image}}" alt="Basic"
 style="height: 159px;">
    <div class="pack-info text-center">
      <div class="pack-grade">
       <h3>{{$vale->name}}</h3>
      </div>
      <div class="pack-price">
       <h2>{{number_format(($vale->price),0,",",".")}}</h2>
      </div>
    </div>
  <ul class="no-bullets list-permission">
   {{--  <li>
      <i class="fa fa-times" aria-hidden="true"></i> Miễn phí các sản phẩm làm đẹp chất lượng cao
    </li>
    
    <li>
      <i class="fa fa-check" aria-hidden="true"></i> Sử dụng dịch vụ mà không cần đặt lịch
    </li>
    <li>
      <i class="fa fa-times" aria-hidden="true"></i> Được các chuyên gia của Spa chăm sóc
    </li>
    <li>
      <i class="fa fa-check" aria-hidden="true"></i> Không cần trả thêm bất kì phụ phí nào
    </li>
    <li>
      <i class="fa fa-check" aria-hidden="true"></i> Miễn phí tư vấn về các dịch vụ cao cấp
    </li> --}}
    {!! $vale->description !!}
  </ul>
  <div class="pack-actions text-center">
    <a href="" class="btnViewProduct">Xem chi tiết</a>
    <button type="button" class="btnViewProduct buynow" data-id="1012411525">Mua ngay</button>
  </div>
              <div class="owl-item" style="width: 383px;"><div class="item grid__item">
              </div>
                </div>
              </div>  
     
  @endforeach
          </div>
            </div>
          </div>
</section>
<!-- *****************end Main dang-ki-thanh-vien*************************** -->

<!--*********************nhan xet********************************-->
<div class="container-fluid main-people">
  <div class="col-md-12">
  <div class="row main-people-body">
        <div class="main-people-text">
        <h2>Vì khách hàng là thượng đế</h2>
        <h3>NHẬN XÉT CỦA KHÁCH HÀNG</h3>
        <p>Một trong những yếu tố quan trọng tạo nên đẳng cấp của Suplo Beauty & Spa chính là đội ngũ nhân viên vật lý trị liệu, cố vấn, bác sỹ, chuyên gia thẩm mỹ hàng đầu khu vực châu Á và tại Việt Nam với hàng chục năm kinh nghiệm trong ngành.</p>
      </div>
      <div class="container-fluid">
        <div class="col-md-12">
      <div class="row">
      <div class="col-md-6 main-people-box">
        <div class="main-people-box-img">
          <img class="rad" src="image/1.people.webp">
         
              <a class="main-people-box-text">
            "Tôi thực sự hài lòng với chất lượng cũng như mức giá của các dịch vụ mà Suplo cung cấp. Nhất định tôi sẽ còn quay lại Suplo nhiều lần nữa. Chúc cho Suplo sẽ ngày càng phát triển mạnh mẽ hơn.”
            </a>
        
        </div>
    </div>
      <div class="col-md-6 main-people-box">
        <div class="main-people-box-img">
          <img class="rad" src="image/1.people.webp">
         
              <a class="main-people-box-text">
            "Tôi thực sự hài lòng với chất lượng cũng như mức giá của các dịch vụ mà Suplo cung cấp. Nhất định tôi sẽ còn quay lại Suplo nhiều lần nữa. Chúc cho Suplo sẽ ngày càng phát triển mạnh mẽ hơn.”
            </a>
          
        </div>
    </div>
  </div> 
</div>
</div>
</div>
</div>
</div>

<!--*********************end link-nhan-xet********************************-->

<!--*********************Share********************************-->
<div class="container Share" > 
  <div class="row Share-body">
    <div class="col-md-6 Share-body-left">
      <h2 class="Share-body-left-h2">Chia sẻ kinh nghiệm làm đẹp</h2>
      <h3 class="Share-body-left-h3">TIN TỨC MỚI NHẤT</h3>
      <div class="img-sharebody" >
        <img src="https://file.hstatic.net/1000185703/article/cham-soc-da_99c5eef6034049b19f5f3797ecccffe0_large.png" alt="Tưng bừng khai trương Suplo Beauty &amp; Spa 2">
      </div>
      <h5 class="Share-body-left-h5">Tưng bừng khai trương Suplo Beauty & Spa 2</h5>
      <span class="Share-body-left-span">
        <i class="far fa-clock"></i>
        24/07/2017
        <i class="fas fa-user"></i>
        Suplo Spa
      </span>
      <p class="Share-body-left-p">Nếu bạn còn đang băn khoăn về một địa chỉ làm đẹp đáng tin cậy, hãy để Suplo Beauty & Spa đồng hành cùng bạn ngôaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaay iudsv dsk sjksknsns snsskmlá ms ksnskánadm sksánnậnkád nsnnínná sdjsdanamklmkn</p>
    </div>


    
 <div class="container Share" style="margin: 50px;"> 
  <div class="row Share-body">
    <div class="col-md-6 Share-body-left">
      <h2 class="Share-body-left-h2">Chia sẻ kinh nghiệm làm đẹp</h2>
      <h3 class="Share-body-left-h3">TIN TỨC MỚI NHẤT</h3>
      @foreach($news as $val)
      <div class="img-sharebody" >
        <img src="public/upload/blogs/{{$val->image}}" style="height: 200px;width: 500px;">
      </div>
      <h5 class="Share-body-left-h5">{{$val->title}}</h5>
      <span class="Share-body-left-span">
        <i class="far fa-clock"></i>
     {{$val->created_at}}
        <i class="fas fa-user"></i>
        {{$val->user->name}}
      </span>
      <p class="Share-body-left-p">{!!$val->details!!}</p>
    </div>
    @endforeach
    <div class="col-md-6 Share-body-left">
      <h2 class="Share-body-left-h2">Lưu giữ khoảnh khắc</h2>
      <h3 class="Share-body-left-h3">ALBUM ẢNH</h3>
      <div class="row">
     @foreach($type_service as $val)
        <div class="col-sm-6 col-md-4 img-sharebody" >
          <img src="public/upload/typeservice/{{$val->image}}" style="height: 100px;">
        </div>
       @endforeach
        </div>
      </div>
    </div>
  </div>
<!--*********************end Share********************************-->