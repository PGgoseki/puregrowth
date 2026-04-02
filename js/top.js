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


// ロゴスライダー 2024.06.25
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


// TOPページ スライダー01
const mySwiper = new Swiper('.js-sec-slider01', {
  loop: true, // ループ有効
  slidesPerView: 1.35,
  spaceBetween: '4%',
  centeredSlides : true,
  breakpoints: {
    768: {
      slidesPerView: 3.9,
      spaceBetween: '40',
    }
  },
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// TOPページ スライダー02
const mySwiper2 = new Swiper('.js-sec-slider02', {
  slidesPerView: 1.35,
  spaceBetween: '4%',
  centeredSlides : true,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: '40',
      centeredSlides : false,
    }
  },
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// TOPページ スライダー03
const mySwiper3 = new Swiper('.js-sec-slider03', {
  slidesPerView: 1,
  spaceBetween: '4%',
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: '40',
      centeredSlides : false,
    }
  },
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


// 日本地図 モーダル
// モーダルを開くボタンとモーダルコンテンツを関連付ける
document.querySelectorAll(".js-modal-btn").forEach(function(btn) {
  btn.addEventListener("click", function() {
    var modal = document.getElementById(this.dataset.modalId);
    modal.style.visibility = "visible";
    modal.style.opacity = 1;
  });
});

// 閉じる×ボタンクリック時
document.querySelectorAll(".c-map-modal__close").forEach(function(span) {
  span.addEventListener("click", function() {
    this.closest(".c-map-modal").style.visibility = "hidden";
    this.closest(".c-map-modal").style.opacity = 0;
  });
});

// 背景のオーバーレイクリック時
window.addEventListener("click", function(event) {
  document.querySelectorAll(".c-map-modal").forEach(function(modal) {
    if (event.target == modal) {
      modal.style.visibility = "hidden";
      modal.style.opacity = 0;
    }
  });
});
