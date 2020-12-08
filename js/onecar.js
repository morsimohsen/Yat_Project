$(".custom-nav").css("backgroundColor", "rgba(255, 255, 255, 1)");
$(".custom-nav .navbar > a").css("color", "black");
$(".navbar-collapse .navbar-nav .nav-item >a").css("color", "black");
$(".custom-nav").css('box-shadow', '0 1px 8px 3px rgba(0, 0, 0, 0.5)');
$(".btn-st").addClass("btn-st-scroll");
/* swiper */
var galleryThumbs = new Swiper('.first-swiper .gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.first-swiper .gallery-top', {
    spaceBetween: 10,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });
  /* second swiper */
  var swiper = new Swiper('.second-swiper .swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    grabCursor: true,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      960: {
        slidesPerView: 5,
        spaceBetween: 30
      },
      720: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      540: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      320: {
        slidesPerView: 2,
        spaceBetween: 30
      },
    }
  });
/* button to top */
$(window).scroll(()=> {
    
  let scroll = $(window).scrollTop();

  if (scroll > 200) {
      $('.btn-up').fadeIn(500);
  }
  else {
      $('.btn-up').fadeOut(500);
  }

});

$(".btn-up").click(()=> {

  $("html").animate({ scrollTop: '0' }, 1000);

});
