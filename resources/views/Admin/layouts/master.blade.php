<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{asset('public/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('public/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('public/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('public/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <script language="javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style type="text/css">
    td {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width:250px;
}
.c1{
  background-color: red;
}
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('Admin.layouts.header')

@include('Admin.layouts.aside-left')
@yield('content')

@include('Admin.layouts.footer')
@include('Admin.layouts.aside-right')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
  <script type="text/javascript" language="javascript">
 
  CKEDITOR.replace( 'textarea', {
  uiColor: '#d1d1d1'
});
</script>
{{-- <script src="{{asset('public/bower_components/jquery/dist/jquery.min.js')}}"></script>
 --}}<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('public/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/dist/js/demo.js')}}"></script>
    <script type="text/javascript" language="javascript">
    var x= 0;
    var t= 0;
    var n=0;
      // body...
     $('.themnhom').hide();
      $("#themfile").click(function(){
        
       if(x<=8){
          $("#chonfile").append("<input name='image[]' type='file'/>");
            x +=1;
         }
        else
        {
          alert('Bạn chỉ có thể thêm 10 ảnh');
        }

      });

    $(".themthuoctinh").live('click',function()
      {
          $('.themnhom').show();
        if(t<=1)
        {

         $( ".hides" ).hide();
         $(".add").append("<tr>"+
          "<td><input type='text' name='title[]' placeholder='Tên nhóm VD:Màu sắc'></td>"+
          "<td><div class='add2'></div></td>"+
          "<td><input type='text' name='name2[]' placeholder='Tên phân loại VD:Vàng'></td>"+
          "<td><input type='file' name='image2[]' placeholder='ảnh'></td>"+
          "<td><input type='text' name='quantity2[]' placeholder='Số lượng'></td>"+
          "<td><input type='text' name='price2[]' placeholder='Gía bán'></td>"+
          "</tr>");
          t+=1;

       }
        else if(t==2)
        {
          alert('bạn chỉ có thể thêm 2 thuộc tính sản phẩm')
        }

      });
    $(".themnhom").live('click',function()
      {
        if(n<1)
        {
         $(".add2").append("<input type='text' name='title[]' placeholder='Tên nhóm 2 VD:Size'>");
          n+=1;
        }
        else
        {
         alert('Đã thêm')
        }
       
      });
  
    
  </script>
</body>
</html>
{{-- Tên thuộc tính:<br/> <input name='title' type='text'/> <br/> Image: <input name='image1' type='file'/> <br/>Quantity :<br/><input name='quantity1' type='text'/> <br/>Gía:<br/><input name='price1' type='text'/> --}}