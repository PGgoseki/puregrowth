jQuery(window).on("load", function () {
  jQuery("head").append(
    '<link rel="preconnect" href="https://fonts.googleapis.com">'
  );
  jQuery("head").append(
    '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'
  );
  jQuery("head").append(
    '<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Zen+Old+Mincho:wght@400;500;700;900&display=swap" rel="stylesheet">'
  );
});
jQuery(function ($) {
  const headerHeight = $("header").outerHeight();
  //スムーススクロール
  $('a[href^="#"]').click(function (e) {
    const speed = 500;
    const id = $(this).attr("href");
    const target = $("#" == id ? "html" : id);
    const position = $(target).offset().top - headerHeight;
    $.when(
      $("html, body").animate({ scrollTop: position }, speed),
      setTimeout(function () {
        //モーダルを閉じる
        $("body,.hamburger,.c-nav").removeClass(
          "is-active"
        );
      }, 1000),
      // return false;
      e.preventDefault()
    ).done(function () {
      const diff = target.offset().top - headerHeight;
      if (diff === position) {
      } else {
        $("html,body").animate({ scrollTop: diff }, 300);
      }
    });
  });

  //ページ遷移スムーススクロール
  $(document).ready(function () {
    //URLのハッシュ値を取得
    const urlHash = location.hash;
    //ハッシュ値があればページ内スクロール
    if (urlHash) {
      //スクロールを0に戻す
      $("body,html").stop().scrollTop(0);
      setTimeout(function () {
        //ロード時の処理を待ち、時間差でスクロール実行
        scrollToAnker(urlHash);
      }, 500);
    }

    function scrollToAnker(hash) {
      const target = $(hash);
      const position = target.offset().top - headerHeight; // ヘッダーの高さ
      $("body,html").stop().animate({ scrollTop: position }, 500);
    }
  });

  // viewport
  $(window).on("load resize orientationchange", function (e) {
    var wsw = window.screen.width;
    if (wsw <= 375) {
      $("meta[name='viewport']").attr(
        "content",
        "width=375,user-scalable=yes,shrink-to-fit=no"
      );
    } else {
      $("meta[name='viewport']").attr(
        "content",
        "width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0,user-scalable=yes,shrink-to-fit=no"
      );
    }
  });

  //ハンバーガー
  $(".hamburger").on("click", function () {
    $(".hamburger, .c-nav").toggleClass("is-active");
  });


  // よくある質問アコーディオン
  $('.l-faq__item').on('click', function(){
    $(this).find('.l-faq__item-question').toggleClass('--js-open');
    $(this).find('.l-faq__item-answer').slideToggle();
    
  });

  // toc
  $('.toc_toggle a').on('click', function(){
    $('.toc_toggle a').toggleClass('--js-hide');
  });

});
