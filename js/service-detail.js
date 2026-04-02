// ロゴスライダー
const swiper = new Swiper(".logo-swiper", {
    loop: true, // ループ有効
	slidesPerView: 3, // 一度に表示する枚数
	speed: 4000, // ループの時間
	allowTouchMove: false, // スワイプ無効
	autoplay: {
		delay: 0, // 途切れなくループ
	},
	breakpoints: {
		600: {
			slidesPerView: 4,
		},
		768: {
			slidesPerView: 6,
		},
		1024: {
			slidesPerView: 7,
		},
		1440: {
			slidesPerView: 8,
		}
	}
});

// フロートバナー関連
jQuery(function ($) {
	const $fbanner = jQuery('#fbanner');
	const $closeBtn = jQuery('#fbanner-close-btn');

	$closeBtn.on('click', function(){
		$fbanner.find('.l-floatingbanner__inner').hide();
	});
});

jQuery(function ($) {
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
});
