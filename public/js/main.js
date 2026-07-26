// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/62d6a13c7b967b11799a4865/1g8b6bm0b';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();


var Tawk_API = Tawk_API || {},
  Tawk_LoadStart = new Date();
(function () {
  var s1 = document.createElement("script"),
    s0 = document.getElementsByTagName("script")[0];
  s1.async = true;
  s1.src = 'https://embed.tawk.to/62d6a13c7b967b11799a4865/1g8b6bm0b';
  s1.charset = 'UTF-8';
  s1.setAttribute('crossorigin', '*');
  s0.parentNode.insertBefore(s1, s0);
})();

function setButtonURL() {
  Tawk_API.toggle();
  return false;
}

function toggleChat() {
  Tawk_API.toggle();
  return false;
}


$(".btn-chat").click(function () {
  Tawk_API.toggle();
  return false;
})

// (function(d,t) {
// const b='https://widget.projectcamp.io/widget.js';
// const g=d.createElement(t),s=d.getElementsByTagName(t)[0];
// g.src=b;
// g.defer = true;
// g.async = true;
// s.parentNode.insertBefore(g,s);
// g.onload=function(){
// window.$widget = {"isOpen":false,"position":"right","websiteToken":"aHR0cHM6Ly93d3cuZGVzaWduc29sdXRpb25zMTAxLmNvbS8=","property":"WJI7NGN8gj9dc5i8grUH","widget":"6SX5RNKaV2"};
// window.initChat();
// };
// })(document,'script');

// function setButtonURL(){
//     //Tawk_API.toggle(); return false;
//     $(".widget-holder").toggleClass("hide");
//     $(".widget-bubble").toggleClass("close").find("img").toggle();
// }

// function toggleChat() {
//     //Tawk_API.toggle(); return false;
//     $(".widget-holder").toggleClass("hide");
//     $(".widget-bubble").toggleClass("close").find("img").toggle();
// }


// $(".btn-chat").click(function(){
//     //Tawk_API.toggle(); return false;
//     $(".widget-holder").toggleClass("hide");
//     $(".widget-bubble").toggleClass("close").find("img").toggle();
// })



$('.pricing_tabs_slider').slick({
  dots: false,
  arrows: true,
  // infinite: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 2000,
  slidesToShow: 5,
  slidesToScroll: 1,
  pauseOnHover: false,
  responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
  ]
});


$('.main_slider').slick({

  dots: false,

  infinite: true,

  autoplay: true,

  autoplaySpeed: 3000,

  speed: 2000,

  fade: true,

  slidesToShow: 1,

  pauseOnHover: false

});



$('.slider-for-cat').slick({

  slidesToShow: 1,

  slidesToScroll: 1,

  arrows: true,

  // autoplay: true,

  fade: true,

  asNavFor: '.slider-nav-cat'

});

$('.slider-nav-cat').slick({

  slidesToShow: 4,

  slidesToScroll: 1,

  asNavFor: '.slider-for-cat',

  dots: false,

  // autoplay: true,

  focusOnSelect: true,
  responsive: [

    {

      breakpoint: 768,

      settings: {

        slidesToShow: 2

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 2

      }

    }

  ]

});



$('.life_style_slider').slick({

  dots: true,

  infinite: true,

  autoplay: true,

  autoplaySpeed: 3000,

  speed: 3000,

  fade: true,

  slidesToShow: 1

});

$('.vid_client_testimonail_slider').slick({

  dots: true,

  infinite: true,

  autoplay: true,

  autoplaySpeed: 3000,

  speed: 3000,

  fade: true,

  slidesToShow: 1

});



$('.logo_type_slider').slick({

  dots: true,

  infinite: true,

  autoplay: true,

  autoplaySpeed: 3000,

  speed: 3000,

  fade: true,

  slidesToShow: 1

});





$('.video_type_slider').slick({

  dots: true,

  infinite: false,

  autoplay: true,

  autoplaySpeed: 2000,

  dots: false,

  speed: 3000,

  slidesToShow: 4,

  slidesToScroll: 1



});





$('.online_portfolio_for_cat').slick({

  slidesToShow: 1,

  slidesToScroll: 1,

  arrows: true,

  autoplay: true,

  fade: true,

  asNavFor: '.online_portfolio_nav_cat'

});

$('.online_portfolio_nav_cat').slick({

  slidesToShow: 1,

  slidesToScroll: 1,

  asNavFor: '.online_portfolio_for_cat',

  dots: false,

  autoplay: true,

  arrows: false,

  focusOnSelect: true



});



$('.app_portfolio_slider').slick({

  centerMode: true,

  centerPadding: '0px',

  slidesToShow: 5,

  autoplay: true,

  autoplaySpeed: 3000,

  speed: 1000,

  dots: true,

  responsive: [

    {

      breakpoint: 768,

      settings: {

        centerMode: true,

        slidesToShow: 3

      }

    },

    {

      breakpoint: 480,

      settings: {

        arrows: false,

        centerMode: true,

        centerPadding: '40px',

        slidesToShow: 1

      }

    }

  ]

});

// $(function () {

//     var slickOpts = {

//         dots: true,

//         infinite: true,

//         speed: 500,

//         autoplay: true

//     };



//     $('.logo_type_slider').slick(slickOpts);

//     var slickEnabled = true;



// });







$('.fade_img_slider1').slick({

  speed: 1000,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider2').slick({

  speed: 1400,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider3').slick({

  speed: 1800,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider4').slick({

  speed: 2000,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider5').slick({

  speed: 1500,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider6').slick({

  speed: 1800,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider7').slick({

  speed: 1300,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});

$('.fade_img_slider8').slick({

  speed: 1000,

  dots: false,

  infinite: true,

  fade: true,

  autoplay: true

});





// Flout Js

$(window).scroll(function () {

  var scroll = $(window).scrollTop();



  if (scroll >= 1000) {

    $(".order_step3_cost").addClass("test");

  } else {

    $(".order_step3_cost").removeClass("test");

  }





  if (scroll >= 1800) {

    $(".order_step3_cost").addClass("relate");

  } else {

    $(".order_step3_cost").removeClass("relate");

  }



});



// Flout Js





$(function () {

  $("#switch").click(function () {

    if ($(this).is(":checked")) {

      $("#window").show();

      $("#Linux").hide();

    } else {

      $("#Linux").show();

      $("#window").hide();

    }

  });

});



// /Acordian/



function toggleIcon(e) {

  $(e.target)

    .prev('.panel-heading')

    .find(".more-less")

    .toggleClass('fa-chevron-down fa-chevron-up');

}

$('.panel-group').on('hidden.bs.collapse', toggleIcon);

$('.panel-group').on('shown.bs.collapse', toggleIcon);





// $(function() {

//     var Accordion = function(el, multiple) {

//         this.el = el || {};

//         this.multiple = multiple || false;



//         var links = this.el.find('.panel-heading');

//         links.on('click', {

//             el: this.el,

//             multiple: this.multiple

//         }, this.dropdown)

//     }



//     Accordion.prototype.dropdown = function(e) {

//         var $el = e.data.el;

//         $this = $(this),

//             $next = $this.next();



//         $next.slideToggle();

//         $this.parent().toggleClass('open');



//         if (!e.data.multiple) {

//             $el.find('.panel-collapse').not($next).slideUp().parent().removeClass('open');

//         };

//     }

//     var accordion = new Accordion($('.panel-group'), false);

// });



// /Acordian/





//Toggle tabs Step

$('#order_step_tbs li a').click(function () {



  $('#order_step_tbs li a').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');



  if ($(this).next('ul').css('display') == 'block') {



    $(this).next('ul').hide('fast');



  } else {



    $('#order_step_tbs ul').css('display', 'none');



    $(this).next('ul').show('fast');



    $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');



  }



});



//Toggle tabs Step



$('#faqs_tabs li a').click(function () {
  $('#faqs_tabs li a').find('i').removeClass('fa-minus').addClass('fa-plus');
  if ($(this).next('ul').css('display') == 'block') {
    $(this).next('ul').slideUp('5000');
  } else {
    $('#faqs_tabs ul').slideUp('5000');
    $(this).next('ul').slideDown('5000');
    $(this).find('i').toggleClass('fa-plus fa-minus');
  }
});

//Quantity Js



//plugin bootstrap minus and plus

//http://jsfiddle.net/laelitenetwork/puJ6G/

$('.btn-number').click(function (e) {

  e.preventDefault();



  fieldName = $(this).attr('data-field');

  type = $(this).attr('data-type');

  var input = $("input[name='" + fieldName + "']");

  var currentVal = parseInt(input.val());

  if (!isNaN(currentVal)) {

    if (type == 'minus') {



      if (currentVal > input.attr('min')) {

        input.val(currentVal - 1).change();

      }

      if (parseInt(input.val()) == input.attr('min')) {

        $(this).attr('disabled', true);

      }



    } else if (type == 'plus') {



      if (currentVal < input.attr('max')) {

        input.val(currentVal + 1).change();

      }

      if (parseInt(input.val()) == input.attr('max')) {

        $(this).attr('disabled', true);

      }



    }

  } else {

    input.val(0);

  }

});

$('.input-number').focusin(function () {

  $(this).data('oldValue', $(this).val());

});

$('.input-number').change(function () {



  minValue = parseInt($(this).attr('min'));

  maxValue = parseInt($(this).attr('max'));

  valueCurrent = parseInt($(this).val());





  name = $(this).attr('name');

  if (valueCurrent >= minValue) {

    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')

  } else {

    alert('Sorry, the minimum value was reached');

    $(this).val($(this).data('oldValue'));

  }

  if (valueCurrent <= maxValue) {

    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')

  } else {

    alert('Sorry, the maximum value was reached');

    $(this).val($(this).data('oldValue'));

  }





});

$(".input-number").keydown(function (e) {

  // Allow: backspace, delete, tab, escape, enter and .

  if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||

    // Allow: Ctrl+A

    (e.keyCode == 65 && e.ctrlKey === true) ||

    // Allow: home, end, left, right

    (e.keyCode >= 35 && e.keyCode <= 39)) {

    // let it happen, don't do anything

    return;

  }

  // Ensure that it is a number and stop the keypress

  if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

    e.preventDefault();

  }

});



//Quantity Js







$.fn.extend({

  animateCss: function (animationName) {

    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    $(this).addClass('animated ' + animationName).one(animationEnd, function () {

      $(this).removeClass('animated ' + animationName);

    });

  }

});





wow = new WOW(

  {

    animateClass: 'animated',

    offset: 100,

    callback: function (box) {

      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")

    }

  }

);

wow.init();







var owl = $('#our_lover .owl-carousel');

owl.owlCarousel({

  loop: true,

  nav: true,

  slideSpeed: 2000,

  dots: false,

  dotsSpeed: 2000,

  lazyLoad: true,

  autoplay: true,

  autoplaySpeed: 800,

  margin: 30,

  responsive: {

    0: {

      items: 1

    },

    600: {

      items: 1

    },

    960: {

      items: 1

    },

    1200: {

      items: 1

    }

  }

});



$('#carousel').carousel();



$(document).ready(function () {



  /***Fancy Box POPUP***/



  $('.fancybox').fancybox();



  $('.get_quote_form').fancybox();









});



const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
});