jQuery(function ($) {
  
  //スライダー
  var swiper; 
  $(window).on('load resize', function(){
      var w = $(window).width();
      if (w <= 768) {
          if (swiper) {
              return;
          } else {
              swiper = new Swiper('.c-card01', {
                  spaceBetween: 17,
                  slidesPerView: 1,
                  loop: true,
                  navigation: {
                    nextEl: ".c-card__next01",
                    prevEl: ".c-card__prev01",
                  },
              });
          }
      } else {
          if (swiper) {
              swiper.destroy();
              swiper = undefined;
          } 
      } 
  });
//  var cardSlider01 = new Swiper(".c-card01", {
//    spaceBetween: 17,
//    slidesPerView: 1,
//    loop: true,
//    navigation: {
//      nextEl: ".c-card__next01",
//      prevEl: ".c-card__prev01",
//    },
//    breakpoints: {
//      767: {
//        spaceBetween: 40,
//        slidesPerView: 3,
//        centeredSlides: true,
//      },
//    },
//  });

  var cardSlider02 = new Swiper(".c-card02", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".c-card__next02",
      prevEl: ".c-card__prev02",
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        slidesPerView: 3,
        centeredSlides: true,
      },
    },
  });

  var cardSlider03 = new Swiper(".c-card03", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".c-card__next03",
      prevEl: ".c-card__prev03",
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        slidesPerView: 3,
        centeredSlides: true,
      },
    },
  });

});
