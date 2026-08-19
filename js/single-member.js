jQuery(function ($) {
  var cardSwipers = {};
  var cardSliderIds = ['01', '02', '03'];

  function initCardSlider(id) {
      if (cardSwipers[id] || !$('.c-card' + id).length) {
          return;
      }

      cardSwipers[id] = new Swiper('.c-card' + id, {
          spaceBetween: 17,
          slidesPerView: 1,
          loop: true,
          navigation: {
            nextEl: '.c-card__next' + id,
            prevEl: '.c-card__prev' + id,
          },
      });
  }

  function destroyCardSlider(id) {
      if (!cardSwipers[id]) {
          return;
      }

      cardSwipers[id].destroy();
      cardSwipers[id] = undefined;
  }

  $(window).on('load resize', function(){
      if ($(window).width() <= 768) {
          cardSliderIds.forEach(initCardSlider);
      } else {
          cardSliderIds.forEach(destroyCardSlider);
      }
  });
});
