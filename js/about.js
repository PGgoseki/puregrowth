jQuery(function ($) {
  //スライダー
  var contentsSlider01 = new Swiper(".l-outline2__slider01", {
    spaceBetween: 8,
    slidesPerView: 2.6,
    loop: true,
    navigation: {
      nextEl: ".l-outline2__next",
      prevEl: ".l-outline2__prev",
    },
    breakpoints: {
      767: {
        spaceBetween: 50,
        slidesPerView: 3,
      },
    },
  });
});
