<?php if(!is_page(array('pgc', 'contact', '174', '1289', '1320', '1323', '1324', '1325', '1401', '1322', '1332', '1333', '1334', '1335', '1336', '1337', '1350', '1353', '1354', '1355', '1356', '1357', '1358', '1371', '1372', '1373', '1374', '1375', '1376', '1450', '1482', '2639') ) && (is_parent_slug() != 'service') && !(is_single() && has_category('member'))): ?>
<div class="l-cta section lazyload">
  <div class="l-cta__inner inner">
    <div class="l-cta__ttl text">You are up Next</div>
    <p class="l-cta__txt">クライアントの成果を見て<br class="only-sp">興味を持った方、<br class="only-sp">次はあなたの会社の番です。</p>
    <div class="l-cta__btn-box btn-box">
      <a href="<?php echo esc_url(home_url('contact/')); ?>" class="btn _orange">お問い合わせはこちらから</a>
    </div>
  </div>
</div>
<?php endif; ?>

</main>
<?php if(is_page('contact') || is_page(array('174'))): ?>
<?php   if(is_page(array('174'))): ?>
<footer class="l-footer contact sticky">
<?php   else: ?>
<footer class="l-footer contact">
<?php   endif; ?>
  <div class="l-footer__inner inner">
    <p class="l-footer__copy english center">&copy;2025 PURE GROWTH Inc.</p>
  </div>
<?php else: ?>
<footer class="l-footer">
	<div class="l-footer__inner inner">
    <div class="l-footer__top">
			<ul class="l-footer__nav lazyload">
				<?php 
				$footer_nav = array(
					'サービス' => array(
						'url' => 'service/',
						'children' => array(
							'経営コンサルティング' => 'service/consulting/',
							'広告運用代行' => 'service/ad/',
							'採用チャンネル作成' => 'service/channel/',
							'成功報酬型コストダウン' => 'costcut/',
							'成長ビルダー視察会・勉強会' => 'pgc/',
						),
					),
				);

				foreach ($footer_nav as $ttl => $link):
				?>
				<li>
					<?php if (is_array($link)): ?>
						<?php if (!empty($link['url'])): ?>
					<a href="<?php echo esc_url(home_url($link['url'])); ?>"><?php echo $ttl; ?></a>
						<?php else: ?>
					<span><?php echo $ttl; ?></span>
						<?php endif; ?>
					<ul class="l-footer__subnav">
						<?php foreach ($link['children'] as $subttl => $sublink): ?>
						<li class="wide"><a href="<?php echo esc_url(home_url($sublink)); ?>"><span class="_border"><?php echo $subttl; ?></span></a></li>
						<?php endforeach; ?>
					</ul>
					<?php else: ?>
					<a href="<?php echo esc_url(home_url($link)); ?>"><span class="_border"><?php echo $ttl; ?></span></a>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
				<?php 
				$footer_nav = array(
					'事例' => array(
						'url' => '',
						'children' => array(
							'プロジェクト事例' => 'project/',
							'クライアントボイス' => 'post/client-voice/',
						),
					),
					'お役立ち情報' => array(
						'url' => '',
						'children' => array(
							'資料ダウンロード' => 'download/',
							'セミナー' => 'post/seminar/',
							'コラム' => 'post/column/',
						),
					),
//					'会社情報' => array(
//						'url' => '',
//						'children' => array(
//							'企業情報' => 'about/',
//							'メンバー' => 'post/member/',
//						),
//					),
				);

				foreach ($footer_nav as $ttl => $link):
				?>
				<li>
					<?php if (is_array($link)): ?>
					<span><?php echo $ttl; ?></span>
					<ul class="l-footer__subnav">
						<?php foreach ($link['children'] as $subttl => $sublink): ?>
						<li><a href="<?php echo esc_url(home_url($sublink)); ?>"><span class="_border"><?php echo $subttl; ?></span></a></li>
						<?php endforeach; ?>
					</ul>
					<?php else: ?>
					<a href="<?php echo esc_url(home_url($link)); ?>"><span class="_border"><?php echo $ttl; ?></span></a>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
				<li>
					<ul class="l-footer__subnav">
						<li class="half"><a href="<?php echo esc_url(home_url('post/member/')); ?>" target="_blank" class="individual-link"><span class="_border">メンバー紹介</span></a></li>
						<li class="half"><a href="<?php echo esc_url(home_url('about/')); ?>" target="_blank" class="individual-link"><span class="_border">会社概要</span></a></li>
						<li class="half"><a href="https://pure-growth.co.jp/recruit/" target="_blank" class="individual-link"><span class="_border">採用情報</span></a></li>
						<li class="half"><a href="<?php echo esc_url(home_url('contact/')); ?>" target="_blank" class="individual-link"><span class="_border">お問い合わせ</span></a></li>
					</ul>
				</li>
			</ul>
      <div class="l-footer__info">
        <a href="<?php echo esc_url(home_url()); ?>" class="l-footer__logo"><img class="lazyload" data-src="<?php echo get_template_directory_uri()?>/img/logo/N_PURE_GROWTH_logo.png" alt="ピュアグロース株式会社"></a>
        <p class="l-footer__address">東京都港区港南2-16-1 East One Tower 7F</p>
        <div class="l-footer__sns">
          <ul class="c-sns">
             <li class="c-sns__item"><a href="https://www.youtube.com/@pure-growth" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri()?>/img/common/youtube.svg" alt="YouTube"></a></li>
            <!-- <li class="c-sns__item"><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/common/tel.svg" alt="tel"></a></li> -->
            <!-- <li class="c-sns__item"><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/common/line.svg" alt="Line"></a></li> -->
             <li class="c-sns__item"><a href="https://www.facebook.com/profile.php?id=100093315167863" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri()?>/img/common/facebook.svg" alt="Facebook"></a></li>
            <!-- <li class="c-sns__item"><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/common/instagram.svg" alt="Instagram"></a></li> -->
            <!-- <li class="c-sns__item"><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/common/twitter.svg" alt="Twitter"></a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <div class="l-footer__bottom">
      <p class="l-footer__copy english">&copy;2025 PURE GROWTH Inc.</p>
      <ul class="l-footer__bottom-link">
        <li><a href="<?php echo esc_url(home_url('sitemap/')); ?>">サイトマップ</a></li>
        <li><a href="<?php echo esc_url(home_url('privacy-policy/')); ?>">個人情報保護方針</a></li>
		  <li><a href="<?php echo esc_url(home_url('law/')); ?>">特定商取引法</a></li>
      </ul>
    </div>
</div>
<?php endif; ?>
</footer>
<!-- /footer -->
<?php if(is_singular('download')): ?>
<div class="l-floating">
  <div class="l-floating__btn"><a href="#form">ダウンロードする</a></div>
</div>
<?php elseif(is_singular('seminar')): ?>
<div class="l-floating">
  <div class="l-floating__btn"><a href="#form">セミナーに申し込む</a></div>
</div>
<?php elseif(!is_page(array('pgc', 'contact', '1289', '1320', '1323', '1324', '1325', '1401', '1322', '1332', '1333', '1334', '1335', '1336', '1337', '1350', '1353', '1354', '1355', '1356', '1357', '1358', '1371', '1372', '1373', '1374', '1375', '1376', '1450', '1482', '2639') )): ?>
<div class="l-floating">
  <div class="l-floating__btn"><a href="<?php echo esc_url(home_url('contact/')); ?>">無料相談してみる</a></div>
</div>
<?php elseif(is_page(array('costcut') )): ?>
<div class="l-floating --lp lp">
  <div class="p-lp-floating-btn"><a href="#form">コスト削減実例集を受け取る</a></div>
</div>
<?php endif; ?>

<?php if(is_singular('download') || is_singular('seminar')): ?>
<script>
  {
    // メアド入力欄点滅
    function blinkInput(e, css1, css2, okCss, delay) {
      if (e.hasClass('currentRequiredQuestion')) {
        e.css(e.val() ? okCss : css1);
        setTimeout(function() {
          _blinkInput(e, css1, css2, okCss, delay);
        }, delay);
      } else {
        e.css(okCss);
      }
    }

    function _blinkInput(e, css1, css2, okCss, delay) {
      if (e.hasClass('currentRequiredQuestion')) {
        e.css(e.val() ? okCss : css2);
        setTimeout(function() {
          blinkInput(e, css1, css2, okCss, delay);
        }, delay);
      } else {
        e.css(okCss);
      }
    }
    const formItems = document.querySelectorAll('.requiredQuestion');
    // 最初の項目に赤枠を追加します
    function addCurrentClass() {
      const formItemsArray = Array.from(formItems);
      const currentIndex = formItemsArray.findIndex(item => item.classList.contains('currentRequiredQuestion'));
      if (currentIndex !== -1) {
        //クラスを削除
        for (let formItem of formItems) {
          formItem.classList.remove('currentRequiredQuestion');
        }
        //mustがあるかどうか
        let findMust = true;
        for (let i = 0; i <= currentIndex; i++) {
          if (formItems[i].value.trim() === '' && formItems[i].classList.contains('must')) {
            formItems[i].classList.add('currentRequiredQuestion');
            findMust = false;
            break; // ループを終了
          }
        }
        if (findMust) {
          for (let i = formItems.length - 1; i > -1; i--) {
            if (formItems[i].value.trim() !== '') {
              let nextIndex = Number(i + 1);
              if (formItems[nextIndex]) {
                formItems[nextIndex].classList.add('currentRequiredQuestion');
              }
              break; // ループを終了
            }
          }
        }
      } else {
        for (let formItem of formItems) {
          if (formItem.value.trim() === '') {
            formItem.classList.add('currentRequiredQuestion');
            break; // ループを終了
          }
        }
      }
    }
    addCurrentClass();

    blinkInput(jQuery('.currentRequiredQuestion'), {
      outline: '4px solid #e63c02'
    }, {
      outline: '4px solid transparent'
    }, {
      outline: '4px solid transparent'
    }, 500);

    // 入力が終わったら、次の項目に赤枠を移動する関数を作成します
    function moveToNextFormItem() {
      addCurrentClass();
      // 赤枠を発火
      blinkInput(jQuery('.currentRequiredQuestion'), {
        outline: '4px solid #e63c02'
      }, {
        outline: '4px solid transparent'
      }, {
        outline: '4px solid transparent'
      }, 500);
    }

    formItems.forEach((item) => {
      item.addEventListener('blur', () => {
        moveToNextFormItem();
      });
    });
  };
</script>
<?php endif; ?>

<?php if(is_page('about')): ?>
<script>
jQuery(function () {
  lightbox.option({
    'fadeDuration': 200,
    'imageFadeDuration': 200,
    'resizeDuration': 200,
  });
});
</script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>