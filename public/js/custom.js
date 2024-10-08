// header top fix js
// $(window).scroll(function(){
//     if($(window).scrollTop() > 100){
//         $('header').addClass('sticky');
//     }else {
//         $('header').removeClass('sticky');
//     }
// });

var header = $('header');
var shirnkIt = header.height();

$(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if(scroll >= shirnkIt) {
        header.addClass('shrunk');
    }else {
        header.removeClass('shrunk');
    }
});

$('.bizsec-info').click(function(){
    $('#bizsec-info').fadeIn();
});

$('.popup__close').click(function(){
    $(this).parent().parent().parent().fadeOut(); 
});


$('.bizsec__nav__link a').click(function(){

    $(this).addClass('active').parent().siblings().children().removeClass('active');
    
    var bizName = $(this).attr('data-biz-show');
    var bizSecName = $('.bizsec-info').attr('data-biz-sec');

    if(bizName === "all"){
         $('.bizsec__sctr div[class*="col-"]').fadeIn();
    }else if(bizName === "biz"){
        $(".bizsec__sctr #biz").fadeIn();
        $('#con, #fin, #mrt, #tm').fadeOut();
    }else if(bizName === "fin"){
        $(".bizsec__sctr #fin").fadeIn();
        $('#con, #biz, #mrt, #tm').fadeOut();
    }else if(bizName === "tm"){
        $(".bizsec__sctr #tm").fadeIn();
        $('#con, #biz, #mrt, #fin').fadeOut();
    }else if(bizName === "mrt"){
        $(".bizsec__sctr #mrt").fadeIn();
        $('#con, #biz, #tm, #fin').fadeOut();
    }else if(bizName === "con"){
        $(".bizsec__sctr #con").fadeIn();
        $('#mrt, #biz, #tm, #fin').fadeOut();
    }
});


 // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.cont-us__form,.refnd__form')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()

// bottom to top js

$(window).scroll(function(){
    if($(window).scrollTop() > 300){
        $('.bt').fadeIn();
    }else {
        $('.bt').fadeOut();
    }
});
 
$(".bt").click(function(){
    // $('html,body').animate({scrollTop:0},1);
    $('html,body').scrollTop(0);
})


// resp sub menu js
$('.opn-sm').click(function(){
    $(this).toggleClass('opn-sm--in');
    $(this).next().slideToggle();
});


// Responsive menu open/close js

$('.hmb-icon').click(function(){
    $('.resp-menu').fadeIn();
});

$('.resp-menu__close').click(function(){
    $('.resp-menu').fadeOut();
});



// svs nav js
$('.bnfit-svcs__slider, .blg-artcls__slider, .bnfit-plus__slider, .pofwyn__slider, .otr-servs__slider').slick({
    responsive : [
        {
            breakpoint : 9999,
            settings: "unslick"
        },
        {
            breakpoint: 767,
                settings : {
                    slidesToShow: 2,
                    arrows: false,
                    dots : true,
                    infinite: true
                }
        },
        {
            breakpoint: 480,
                settings : {
                    slidesToShow: 1,
                     arrows: false,
                    dots : true,
                    infinite: true
                }
        }
    ]   
});

// svs nav js
// $('.bizsec__nav--slider').slick({
//     responsive : [
//         {
//             breakpoint : 9999,
//             settings: "unslick"
//         },
//         {
//             breakpoint: 480,
//                 settings : {
//                     slidesToShow: 4,
//                      arrows: false,
//                     dots : true,
//                     infinite: false
//                 }
//         },
//         {
//             breakpoint: 414,
//                 settings : {
//                     slidesToShow: 3,
//                     arrows: false,
//                     dots : false,
//                     infinite: false
//                 }
//         }
//     ]   
// });


