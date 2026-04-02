jQuery(function ($) {
  
  //スライダー
  var cardSlider = new Swiper(".c-card", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".c-card__next",
      prevEl: ".c-card__prev",
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
