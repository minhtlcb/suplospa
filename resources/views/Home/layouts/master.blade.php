<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public/home/style/csslogin.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="{{url('public/home/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/home/fontawesome-free-5.12.1-desktop')}}">
  <link rel="stylesheet" href="{{asset('public/sanpham/sanphamcss.css')}}">
  <link rel="stylesheet" href="{{asset('public/chitietsanpham/chitietsp.css')}}">
   <link rel="stylesheet" href="{{asset('public/Sanphamcss.css')}}">
   <link rel="stylesheet" href="{{asset('public/cssnews.css')}}">
 <link rel="stylesheet" href="{{asset('public/cssdichvu.css')}}">
       <link rel="stylesheet" href="{{asset('public/cssheader.css')}}">
       <link rel="stylesheet" href="{{asset('public/cssthuonghieu.css')}}">
       <link rel="stylesheet" href="{{asset('public/cssloaisanpham.css')}}">
  <link rel="stylesheet" href="{{asset('public/cssdetailservice.css')}}">
        <link rel="stylesheet" href="{{asset('public/csscontact.css')}}">
         <link rel="stylesheet" href="{{asset('public/cssgiohang.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@include('Home.layouts.header')

@yield('content')
@include('Home.layouts.footer')

<script type="text/javascript" src="{{asset('public/stylejs/style.js')}}"></script>
<script type="text/javascript" src="{{url('public/home/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@yield('script')

<script type="text/javascript">

// jqery tăng giảm số lượng


$( document ).ready(function() {    
$('.btn-number').click(function(e){        
    e.preventDefault();                
var fieldName = $(this).attr('data-field');        
var type      = $(this).attr('data-type');        
var input = $("input[name='"+fieldName+"']");        
var currentVal = parseInt(input.val());        
if (!isNaN(currentVal)) {            
if(type == 'minus') {                
var minValue = parseInt(input.attr('min'));                 
if(!minValue) minValue = 1;                
if(currentVal > minValue) {                    
input.val(currentVal - 1).change();                
}                 
if(parseInt(input.val()) == minValue) {                    
$(this).attr('disabled', true);                
}                
} 
else if(type == 'plus') {                
var maxValue = parseInt(input.attr('max'));                
if(!maxValue) maxValue = 999;                
if(currentVal < maxValue) {                    
input.val(currentVal + 1).change();                
}                
if(parseInt(input.val()) == maxValue) {                    
$(this).attr('disabled', true);                
}                
}        
} 
else {            
input.val(0);        
}    
});    
$('.input-number').focusin(function(){       
$(this).data('oldValue', $(this).val());    
});    
$('.input-number').change(function() {                
var minValue =  parseInt($(this).attr('min'));        
var maxValue =  parseInt($(this).attr('max'));        
if(!minValue) minValue = 1;        
if(!maxValue) maxValue = 999;        
var valueCurrent = parseInt($(this).val());                
var name = $(this).attr('name');        
if(valueCurrent >= minValue) {            
$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')        
} 
else {            
alert('Sorry, the minimum value was reached');            
$(this).val($(this).data('oldValue'));        
}        
// if(valueCurrent >= maxValue) {            
// $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')        
// } else {            
// alert('Sorry, the maximum value was reached');            
// $(this).val($(this).data('oldValue'));        
// }                    
});     
$(".input-number").keydown(function (e) { 

if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {                    
return;            
}            
// Ensure that it is a number and stop the keypress            
if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
 {                
e.preventDefault();            
  }    
  });
  });


// function dichvudroppp() {
//     var x = document.getElementById("dichvudropp");
   
//       x.style.display = "block";
  
//     }


$(document).on('click', '.qty-plus', function () {
   $(this).prev().val(+$(this).prev().val() + 1);
});
$(document).on('click', '.qty-minus', function () {
   if ($(this).next().val() > 0) 
    $(this).next().val(+$(this).next().val() - 1);



});

$(document).ready(function()
{
  $(document).on('click', '.qty-plus', function () {
  var quantity=$(this).prev().val();
  var id_product=$('input').prev('#id_product').val();
   $.get('ajax/cart/'+id_product+'/'+quantity,function(data)
      {
        $('#cart').html(data);
      })
 
});


        $('.qty-minus').on('click', function () {
      var quantity=$(this).next().val();
      var id_product=$('input').prev('#id_product').val();
      $.get('ajax/cart/'+id_product+'/'+quantity,function(data)
      {
        alert(data);
      })
 
});

});



</script>
</body>
</html>
