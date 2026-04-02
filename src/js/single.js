jQuery(function ($) {
  
  //スライダー
  let item_length = $('.l-articles').length;

  for(let $i=1;$i<=item_length;$i++) {
    var class_name = '.c-card0' + $i;
    var next_btn = '.c-card__next0' + $i;
    var prev_btn = '.c-card__prev0' + $i;

  var cardSlider = new Swiper(class_name, {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: next_btn,
      prevEl: prev_btn,
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        slidesPerView: 3,
        centeredSlides: true,
      },
    },
  });

  }

  // var cardSlider02 = new Swiper(".c-card02", {
  //   spaceBetween: 17,
  //   slidesPerView: 1,
  //   loop: true,
  //   navigation: {
  //     nextEl: ".c-card__next02",
  //     prevEl: ".c-card__prev02",
  //   },
  //   breakpoints: {
  //     767: {
  //       spaceBetween: 40,
  //       slidesPerView: 3,
  //       centeredSlides: true,
  //     },
  //   },
  // });

});
