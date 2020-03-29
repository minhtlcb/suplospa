<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- csrf token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.4.1 -->
  <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome 4.7.0 -->
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
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

@include('Admin.layouts.header')

@include('Admin.layouts.aside-left')
@yield('content')

@include('Admin.layouts.footer')
@include('Admin.layouts.aside-right')

</div>
<!-- ./wrapper -->

<script language="javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> --}}
{{-- JQuery 3.4.1 --}}
<script src="{{asset('public/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- JsBootstrap 3.4.1 -->
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
<!-- Chart JS -->
{{-- <script src="{{asset('public/bower_components/chart.js/Chart.js')}}"></script> --}}
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
  $("#themfile").click(function() {
    
   if(x<=8){
      $("#chonfile").append("<input name='image[]' type='file'/>");
        x +=1;
     }
    else
    {
      alert('Bạn chỉ có thể thêm 10 ảnh');
    }
  });

  $(".themthuoctinh").click(function() {
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

  $(".themnhom").click(function() {
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

    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
          var start = start.format('YYYYMMDD');
          var end = end.format('YYYYMMDD');

          fillData(start,end);
        }
    );
    function fillData(start,end) {
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "{{route('getOrderAjax')}}",
        data: {start: start,
                end: end},
      }).done(function (data) {
        console.log(data.new);

        $('#chartTitle').hide();
        drawChart1(data.new);

        var x = sumObj(data.new,'total_price');
        $('#countNewOrder').html(data.new.length);
        $('#totalPriceNew').html(x);

        $('#countProcOrder').html(data.processing.length);
        $('#totalPriceProc').html(sumObj(data.processing,'total_price'));
        
        $('#countCancelOrder').html(data.cancel.length); 
        $('#totalPriceProc').html(sumObj(data.cancel,'total_price'));
        
        $('#countReturnOrder').html(data.return.length); 
        $('#totalPriceRe').html(sumObj(data.return,'total_price'));
        
        $('#countCompOrder').html(data.complete.length); 
        $('#totalPriceComp').html(sumObj(data.complete,'total_price'));

        console.log(dataChart(data.new));
      }).fail(function (data) {
        console.log(data);
      });
    }
    function sumObj(obj,keys) {
      var sum = 0;
      for (var i = 0; i < obj.length; i++) {
        sum +=obj[i][keys];
      }
      return sum;
    }

    function ajaxSearch() {
      var value = $('#search_data').val();
      var name = document.getElementById('search_data').name;
      console.log(name);
      $('.renderData').find('tbody').empty();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '{{url("admin/search")}}'+'/'+name,
        data: {value},
      }).done(function (respond) {
        var html = "";
        renderData(respond);
        console.log(respond);
      }).fail(function (respond) {
        console.log(respond);
      });
    }
    function renderData(respond) {
      var data = respond.data;
      var name = respond.name;
      switch(name){
        case 'service':
          for (var i = 0; i < data.length; i++) {
            html = "<tr><td>"+data[i].id_service+"</td>"+
            "<td>"+data[i].name+"</td>"+
            "<td>"+data[i].describe+"</td>"+
            "<td><a href='delete/"+data[i].id_service+"'>Delete</a></td>"+
            "<td><a href='update/"+data[i].id_service+"'>Edit</a></td></tr>";
            $('.renderData').find('tbody').append(html);
          }
          break;
        case 'product':
          for (var i = 0; i < data.length; i++) {
            html = "<tr><td>"+data[i].id_product+"</td><td>"+
            data[i].id_types+"</td><td>"+
            data[i].id_trademark+"</td><td>"+
            data[i].name+"</td>";
            // var strImage = data[i].image;
            // var jsonImage = JSON.parse(strImage);

            // for (var j = 0; i < jsonImage.length ; i++) {
            //   html += "<td><img src='../../public/upload/product/"+jsonImage[j]+"' style='width: 100px;height: 100px;''></td>";
            // }

            if(data[i].new==1)
              html += "<td>HOT</td>";
            else
              html += "<td>"+data[i].new+"</td>";                
            html += "<td>"+data[i].quantity+"</td><td><a href='delete/"+data[i].id_product+"'>Delete</a></td><td><a href='update/"+data[i].id_product+"'>Edit</a></td></tr>";
            $('.renderData').find('tbody').append(html);
          }
          break;
        case 'blog':
          for (var i = 0; i < data.length; i++) {
            html = "<tr><td>"+data[i].id+"</td><td>"+data[i].id_category+"</td>"+
                  "<td>"+data[i].id_user+"</td><td>"+data[i].title+"</td>"+
                  "<td>"+data[i].image+"</td>"+
                  "<td>"+data[i].details+"</td><td>"+data[i].created_at+"</td><td>"+data[i].updated_at+"</td>"+
                  "<td><a class='btn btn-primary' href='update/"+data[i].id_news+"'>Edit</a>"+
                  "<a class='btn btn-danger' href='delete/"+data[i].id_news+"'>Delete</a></td></tr>";
            $('.renderData').find('tbody').append(html);
          }
          break;
        case 'recruitment':
          for (var i = 0; i < data.length; i++) {
            html = "<tr><td>"+data[i].id_recruitment+"</td><td>"+data[i].name+"</td><td>"+data[i].title+"</td>"+
              "<td>"+data[i].describe+"</td><td>"+data[i].created_at+"</td><td>"+data[i].updated_at+"</td>"+
              "<td><a class='btn btn-primary' href='update/"+data[i].id_recruitment+"'>Edit</a>"+
              "<a class='btn btn-danger' href='delete/"+data[i].id_recruitment+"'>Delete</a></td></tr>";
            $('.renderData').find('tbody').append(html);
          }
          break;
        default :
          break;
      }
    }
    $('#search_data').on('keydown', function(e) {
      if (e.which == 13 || e.keyCode == 13) {
        ajaxSearch();
      } 
    });

    function dataChart(obj) {
      data = []
      for (var i = 0; i < obj.length; i++) {
        var x = {y: obj[i]['created_at'], item1: obj[i]['total_price']};
        data.push(x);
      }
      return data;
    }
    function drawChart1() {
      var line = new Morris.Line({
        element          : 'order-chart',
        resize           : true,
        data             : [
          { y: '2011 Q1', item1: 2666 },
          { y: '2011 Q2', item1: 2778 },
          { y: '2011 Q3', item1: 4912 },
          { y: '2011 Q4', item1: 3767 },
          { y: '2012 Q1', item1: 6810 },
          { y: '2012 Q2', item1: 5670 },
          { y: '2012 Q3', item1: 4820 },
          { y: '2012 Q4', item1: 15073 },
          { y: '2013 Q1', item1: 10687 },
          { y: '2013 Q2', item1: 8432 }
        ],
        xkey             : 'y',
        ykeys            : ['item1'],
        labels           : ['Item 1'],
        lineColors       : ['#efefef'],
        lineWidth        : 2,
        hideHover        : 'auto',
        gridTextColor    : '#fff',
        gridStrokeWidth  : 0.4,
        pointSize        : 4,
        pointStrokeColors: ['#efefef'],
        gridLineColor    : '#efefef',
        gridTextFamily   : 'Open Sans',
        gridTextSize     : 10
      });
    }
    document.addEventListener("load", drawChart1());
</script>
<script type="text/javascript" language="javascript">
  // Replace the <textarea id="textarea"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('textarea1');
  CKEDITOR.replace('textarea2');
</script>
</body>
</html>