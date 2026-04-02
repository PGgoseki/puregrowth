jQuery(function ($) {
  var swiper;
  var swiper2;
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
          if (swiper2) {
              return;
          } else {
              swiper2 = new Swiper('.c-card02', {
                  spaceBetween: 17,
                  slidesPerView: 1,
                  loop: true,
                  navigation: {
                    nextEl: ".c-card__next02",
                    prevEl: ".c-card__prev02",
                  },
              });
          }
      } else {
          if (swiper) {
              swiper.destroy();
              swiper = undefined;
          } 
          if (swiper2) {
              swiper2.destroy();
              swiper2 = undefined;
          } 
      } 
  });
});
