jQuery(function ($) {
  
  //スライダー
  var contentsSlider01 = new Swiper(".l-contents__slider01", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents01__next",
      prevEl: ".l-contents01__prev",
    },
    pagination: {
      el: ".l-contents__pagination01",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });

  var contentsSlider02 = new Swiper(".l-contents__slider02", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents02__next",
      prevEl: ".l-contents02__prev",
    },
    pagination: {
      el: ".l-contents__pagination02",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });
	
  var contentsSlider03 = new Swiper(".l-contents__slider03", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents03__next",
      prevEl: ".l-contents03__prev",
    },
    pagination: {
      el: ".l-contents__pagination03",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });

  var contentsSlider04 = new Swiper(".l-contents__slider04", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents04__next",
      prevEl: ".l-contents04__prev",
    },
    pagination: {
      el: ".l-contents__pagination04",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });

  var contentsSlider05 = new Swiper(".l-contents__slider05", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents05__next",
      prevEl: ".l-contents05__prev",
    },
    pagination: {
      el: ".l-contents__pagination05",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });
	
  var contentsSlider06 = new Swiper(".l-contents__slider06", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents06__next",
      prevEl: ".l-contents06__prev",
    },
    pagination: {
      el: ".l-contents__pagination06",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });
	
  var contentsSlider07 = new Swiper(".l-contents__slider07", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents07__next",
      prevEl: ".l-contents07__prev",
    },
    pagination: {
      el: ".l-contents__pagination07",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });
	
  var contentsSlider08 = new Swiper(".l-contents__slider08", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-contents08__next",
      prevEl: ".l-contents08__prev",
    },
    pagination: {
      el: ".l-contents__pagination08",
      type: 'bullets',
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });

  var ambienceNavSlider = new Swiper(".l-ambience__nav-slider", {
    spaceBetween: 17,
    slidesPerView: 8,
    freeMode: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    allowTouchMove: false, //タッチ操作は無効、クリックは有効
  });

  var ambienceSlider = new Swiper(".l-ambience__slider", {
    spaceBetween: 17,
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".l-ambience__next",
      prevEl: ".l-ambience__prev",
    },
    thumbs: {
      swiper: ambienceNavSlider
    },
    breakpoints: {
      767: {
        spaceBetween: 40,
        centeredSlides: true,
      },
    },
  });

});
