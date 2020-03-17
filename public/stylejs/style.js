 var acc = document.getElementsByClassName("asss");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                    document.getElementById('daucong').style.display = "block";
                    document.getElementById('dautru').style.display = "none";
                } 
                else {
                    panel.style.display = "block";
                    document.getElementById('dautru').style.display = "block";
                    document.getElementById('daucong').style.display = "none";
                }

            });

        }

         var accc = document.getElementsByClassName("assss");
        var i;

        for (i = 0; i < acc.length; i++) {
            accc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                    document.getElementById('daucong1').style.display = "block";
                    document.getElementById('dautru1').style.display = "none";
                } 
                else {
                    panel.style.display = "block";
                    document.getElementById('dautru1').style.display = "block";
                    document.getElementById('daucong1').style.display = "none";
                }

            });

        }

         var acccc = document.getElementsByClassName("asssss");
        var i;

        for (i = 0; i < acc.length; i++) {
            acccc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                    document.getElementById('daucong2').style.display = "block";
                    document.getElementById('dautru2').style.display = "none";
                } 
                else {
                    panel.style.display = "block";
                    document.getElementById('dautru2').style.display = "block";
                    document.getElementById('daucong2').style.display = "none";
                }

            });

        }



        //

window.onload = function()
{
    var abc = screen.availWidth;
    if (abc < 768) {
    	document.getElementById('header-top').style.display = 'none';
    }
    else
    {
        document.getElementById('header-top').style.display = 'block';	
    }
};




var a = document.getElementById('picture-img');
var b = document.getElementById('content-text-h2');

function getimaget1(){
	a.src = "img/massage-da-nong_52899887d012446baa068beddb851a44_large.webp";
	b.innerHTML = 'Dịch vụ công nghệ cao';
	b.style.fontSize = "20px";
}

// document.getElementById("dichvucongnghecao").addEventListener('onclick',getimaget1())


function getimaget2(){
    a.src = "img/white-skin_63fce40852fe49dd853dba629e340bce_large.webp";
    b.innerHTML = 'Thư giãn và làm đẹp';
    b.style.fontSize = "20px";
}

// document.getElementById("thugianvalamdep").addEventListener('onclick',getimaget2())

function getimaget3(){
	a.src = "img/long-may_dccea2cbec0f49fb8ebfb9049f4215a2_large.webp";
	b.innerHTML = 'Vật lý trị liệu';
	b.style.fontSize = "20px";
}

// document.getElementById("vatlytrilieu").addEventListener('onclick',getimaget3())



// 


// $(window).resize(function(){
 
//     var width = $(window).width();
//     console.log(width);
//     if (width <= 768){
//         $('#minhgiauten').addClass('demo');
//     }
//     else{
//         $('.left, .right').removeClass('responsive_768');
//     }
// });


// $(document).ready(
//   $(document).('click' 'assss' function(){
//             $(this).addClass('hihihi')
//         }))




//   $(document).ready(
//     function(){
//         $('.assss').click(function()
// { 
//     $(this).addClass('hihihi');
//     $('.plus').css('display','none');
// }
//    ) })


// console.log($('#abcaa').attr('class'));
// $('#assss').click(function(){
//     if($('#assss').attr == "fa-plus"){
//        $('.plus').css('display','none');
//     }
//     else{
//      $('.plus').css('display','block');
//     }
// })


//   $(document).ready(
//     function(){
//         var a=1;
//         $('.assss').click(function()
// { 
//   if(a==1){
//     $('.assss').css('background','red !important');
//     a=2;
//   }
//   else(a==2){
//      $('.assss').css('background','yellow !important');
//     a=1;
//   }
// }
//    ) })


// js san pham
// var acc = document.getElementsByClassName("asss");
// var i;

// for (i = 0; i < acc.length; i++) {
// acc[i].addEventListener("click"), function() {
// this.classList.toggle("active");
// var panel = this.nextElementSibling;
// if (panel.style.display === "block" {
// panel.style.display = "none";
// document.getElementById('daucong').style.display="block";
// document.getElementById('dautru').style.display="none";
// } else {
// panel.style.display = "block";
// document.getElementById('dautru').style.display="block";
// document.getElementById('daucong').style.display="none";
// }
// // });
// $('a').click(function(event){
// $('html, body').animate({
// scrollTop: $( $.attr(this, 'href') ).offset().top
// }, 1000);
// event.preventDefault();
// });



// jqery tăng giảm số lượng
var a=document.getElementById('value_sl')
a.value=1;
function cong(){
    a.value++;
}
function truvl(){
    if (a.value>1) {
   a.value--;
    }
    else{
        return a.value;
    }
   
}