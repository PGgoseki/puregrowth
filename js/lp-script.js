// ロゴスライダー
const swiperLp = new Swiper(".p-logo-slider__swiper", {
  loop: true, // ループ有効
  slidesPerView: 0.25, // 一度に表示する枚数
  allowTouchMove: false, // スワイプ無効
	speed: 55000, // ループの時間
  autoplay: {
    delay: 0, // 途切れなくループ
  },
	breakpoints: {
		768: {
			slidesPerView: 0.75,
		}
	}
});

// お客様の声スライダー
// let voiceSwiper;
// const swiperInit = () => {
// 	if (window.innerWidth <= 768 && !voiceSwiper) {
// 		voiceSwiper = new Swiper('.p-lp-voice__slider', {
// 			loop: false,
// 			slidesPerView: 1,
// 			slidesPerView: 1.2,
// 			spaceBetween: 17,
// 			centeredSlides: true,
// 			navigation: {
// 				nextEl: '.swiper-button-next',
// 				prevEl: '.swiper-button-prev',
// 			},
// 		});
// 	} else if (window.innerWidth > 768 && voiceSwiper) {
// 		voiceSwiper.destroy(true, true);
// 		voiceSwiper = null;
// 	}
// };
const voiceSwiper = new Swiper('.p-lp-voice__slider', {
  loop: false,
  spaceBetween: 17,
  centeredSlides: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    0:   { slidesPerView: 1.2, centeredSlides: true },
    769: { slidesPerView: 3,   centeredSlides: false } // PCの見せ方ここで調整
  }
});


// 初期化
swiperInit();

// ウィンドウサイズが変更されたときのイベントリスナー
window.addEventListener('resize', swiperInit);