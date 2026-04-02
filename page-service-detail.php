<?php

/**
 * Template Name: 個別サービス
 */
?>
<?php get_header(); ?>
<?php
// カスタムフィールドの取得
$mv       = get_field('mv');
$solution = get_field('solution');
//$features = get_field('features');
$support  = get_field('support');
$free     = get_field('free');
$compare  = get_field('compare');
$price    = get_field('price');
$project  = get_field('project');
$flow     = get_field('flow');
$faq      = get_field('faq');
$cta      = get_field('cta');
$cta2     = get_field('cta2');
$fbanner     = get_field('fbanner');
?>
<?php if ($mv) { ?>
  <div class="l-mv2">
    <h1 class="l-mv2__ttl">
      <?php if ($mv['image_pc']) { ?>
        <picture>
          <?php if ($mv['image_sp']) { ?>
            <source srcset="<?php echo $mv['image_pc']; ?>" media="(min-width: 768px)">
            <img src="<?php echo $mv['image_sp']; ?>" alt="<?php the_title(); ?>">
          <?php     } else { ?>
            <img src="<?php echo $mv['image_pc']; ?>" alt="<?php the_title(); ?>">
          <?php     } ?>
        </picture>
      <?php } else { ?>
        <?php the_title(); ?>
      <?php } ?>
    </h1>
  </div>
<?php } ?>

<section class="p-logo-slider">
  <div class="p-logo-slider__title lower-ttl">
    <h2 class="lower-ttl--ja">導入企業</h2>
  </div>
  <div class="l-logo-slider">
       <div class="logo-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo01.png" alt="企業ロゴ" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo05.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo09.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo13.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo17.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo21.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo25.PNG" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo29.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo33.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-1.webp" alt="オフィスHanako株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-2.png" alt="GRAND HOUSE株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-3.png" alt="アーキテックス株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-4.png" alt="エーステクノロジー株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-5.svg" alt="WITHDOM GROUP株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-6.jpg" alt="エスワイズ株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-7.svg" alt="納得住宅工房株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-8.png" alt="イーデザインホーム株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-9.svg" alt="アートテラスホーム株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-10.png" alt="エステージ株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-41.png" alt="株式会社ロゴスホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-42.png" alt="株式会社ナスキー様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-43.png" alt="株式会社ひかり工務店様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-44.png" alt="株式会社ビュー様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-45.png" alt="株式会社みのりホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-46.png" alt="株式会社ヤマウラ様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-47.jpg" alt="株式会社ヤマカ木材様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-48.gif" alt="株式会社リバティホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-49.png" alt="株式会社ピースホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-50.svg" alt="株式会社ホリエ様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pgc/member2-81.webp" alt="平松建築株式会社様" />
        </div>
      </div>
    </div>
    <div class="logo-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo02.png" alt="企業ロゴ" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo06.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo10.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo14.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo18.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo22.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo26.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo30.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-11.png" alt="タカマツビルド株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-12.jpg" alt="デイライフ株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-13.png" alt="デバイス株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-14.png" alt="ネクストイノベーション様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-15.gif" alt="びわこホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-16.png" alt="ライフベイシス株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-17.svg" alt="河窪建設株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-18.svg" alt="オプトホーム株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-19.png" alt="クオレ・ホーム株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-20.svg" alt="グローバルハウス株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-51.jpg" alt="株式会社栄都様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-52.gif" alt="株式会社永井建設様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-53.png" alt="株式会社丸山コーポレーション様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-54.png" alt="株式会社幸三建設様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-55.jpg" alt="株式会社秋山住建様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-56.webp" alt="株式会社住研社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-57.png" alt="株式会社住創館様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-58.png" alt="株式会社嵩心様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-59.svg" alt="株式会社善匠様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-60.jpg" alt="株式会社近藤工務店様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pgc/member2-82.webp" alt="悠悠ホーム株式会社様" />
        </div>
      </div>
    </div>
    <div class="logo-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo03.png" alt="企業ロゴ" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo07.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo11.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo15.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo19.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo23.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo27.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo31.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-21.webp" alt="株式会社クリエイト礼文様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-22.png" alt="株式会社アートホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-23.jpg" alt="株式会社ヴィータデザイン様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-24.png" alt="株式会社グリーンランド様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-25.svg" alt="株式会社アート建工様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-26.svg" alt="株式会社オレンジハウス様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-27.png" alt="株式会社カワムラホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-28.svg" alt="株式会社AXSデザイン様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-29.svg" alt="株式会社マーベックス様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-30.jpg" alt="株式会社LIFEFUND様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-61.webp" alt="鬼丸ホーム株式会社" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-62.webp" alt="株式会社大一建設様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-63.jpg" alt="株式会社大建建設様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-64.png" alt="株式会社池田建設様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-65.png" alt="株式会社日本中央住販様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-66.gif" alt="株式会社野村建設工業様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-67.png" alt="株式会社髙藤建設様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-68.svg" alt="株式会社藤本工務店様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-69.svg" alt="株式会社日建住宅様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-70.svg" alt="株式会社木の花ホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pgc/member2-83.png" alt="有限会社メモリアルプラザたけや様" />
        </div>
      </div>
    </div>
    <div class="logo-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo04.png" alt="企業ロゴ" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo08.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo12.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo16.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo20.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo24.png" alt="" />
        </div>
        <!-- <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo28.jpg" alt="" />
        </div> -->
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/top/logo32.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-31.png" alt="株式会社タカラサービス様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-32.gif" alt="株式会社サーティーフォー様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-33.webp" alt="株式会社サイトーホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-34.png" alt="株式会社サンアイホーム様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-35.jpg" alt="株式会社サンタ不動産様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-36.png" alt="株式会社シーキューブ様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-37.webp" alt="株式会社ジェイトラスト様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-38.svg" alt="株式会社ジョンソンホームズ様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-39.svg" alt="株式会社スタイルハウス様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-40.gif" alt="株式会社スペースエージェンシー様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-71.png" alt="南青山リアルエステート株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-72.png" alt="坂上建設株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-73.svg" alt="篠河建設株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-74.jpg" alt="森住建様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-75.png" alt="泉州ホーム株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-76.svg" alt="大英産業株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-77.svg" alt="大勝建設株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-78.svg" alt="大鎮キムラ建設株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-79.png" alt="竹内建設株式会社様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-80.png" alt="棟匠" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pgc/member2-84.jpg" alt="有限会社大崎建築様" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pgc/member2-85.png" alt="波多野工務店様" />
        </div>
      </div>
    </div>
  </div>
</section>

<div class="contents">
  <?php if ($solution) { ?>
    <section class="l-solution lower-section lazyload">
      <div class="l-solution__inner inner">
        <div class="l-solution__ttl lower-ttl">
          <h2 class="lower-ttl--ja">このようなお悩みを<br class="only-sp">解決します</h2>
        </div>
        <ul class="l-solution__list">
          <?php foreach ($solution as $item) { ?>
            <li class="l-solution__item">
              <div class="l-solution__item-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/check.svg" alt="">
              </div>
              <p class="l-solution__item-txt"><?php echo $item['text']; ?></p>
            </li>
          <?php     } ?>
        </ul>
      </div>
    </section>
  <?php } ?>

  <?php if ($compare && is_array($compare['data']) && (count($compare['data']) > 0)) { ?>
    <section class="l-compare lower-section lazyload">
      <div class="l-compare__inner inner">
        <div class="l-compare__ttl lower-ttl">
          <h2 class="lower-ttl--ja"><?php the_title(); ?>の特徴</h2>
        </div>
        <div class="l-compare__wrap">
          <?php $cnt = 0; ?>
          <?php foreach ($compare['data'] as $item) { ?>
            <?php $cnt++; ?>
            <ul class="l-compare__list">
              <li class="l-compare__item">
                <p class="l-compare__item-num"><img src="<?php echo get_template_directory_uri() ?>/img/service/detail/point<?php echo $cnt; ?>.png" alt="POINT 0<?php echo $cnt; ?>"></p>
                <h3 class="l-compare__item-ttl"><span class="left"></span><span class="text"><?php echo $item['ttl']; ?></span><span class="right"></span></h3>
                <div class="l-compare__item-wrap">
                  <div class="l-compare__item-other">
                    <h4 class="l-compare__item-ttl2"><?php echo $item['ohter_ttl']; ?></h4>
                    <p class="l-compare__item-para"><?php echo $item['ohter_para']; ?></p>
                    <div class="l-compare__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/service/detail/point<?php echo $cnt; ?>_1.png" alt="<?php echo $item['ohter_ttl']; ?>"></div>
                  </div>
                  <div class="l-compare__item-pure">
                    <h4 class="l-compare__item-ttl2"><?php echo $item['pure_ttl']; ?></h4>
                    <p class="l-compare__item-para"><?php echo $item['pure_para']; ?></p>
                    <div class="l-compare__item-img"><img src="<?php echo get_template_directory_uri() ?>/img/service/detail/point<?php echo $cnt; ?>_2.png" alt="<?php echo $item['pure_ttl']; ?>"></div>
                  </div>
                </div>
              </li>
            </ul>
          <?php         } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if ($support) { ?>
    <section class="l-support lower-section lazyload">
      <div class="l-support__inner inner">
        <div class="l-support__ttl lower-ttl">
          <h2 class="lower-ttl--ja">広告運用代行の支援内容</h2>
        </div>

        <div class="l-support__wrap">
          <?php foreach ($support as $box) { ?>
            <section class="l-support__box">
              <?php if ($box['ttl']) { ?>
                <div class="l-support__box-img">
                  <?php if ($box['image']) { ?>
                    <picture>
                      <img src="<?php echo $box['image']; ?>" alt="<?php echo strip_tags($box['ttl']); ?>">
                    </picture>
                  <?php             } ?>
                </div>
                <div class="l-support__box-text">
                  <h3 class="l-support__box-ttl"><?php echo $box['ttl']; ?></h3>
                  <?php if ($box['para']) { ?>
                    <p class="l-support__box-para"><?php echo $box['para']; ?></p>
                  <?php             } ?>
                </div>
              <?php         } ?>
            </section>
          <?php     } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if ($free && $free['movie']) { ?>
    <section class="l-movie lower-section lazyload">
      <div class="l-movie__inner inner">
        <div class="l-movie__ttl lower-ttl">
          <h2 class="lower-ttl--ja">ピュアグロースは<br>他社と比べてココが違う</h2>
        </div>
        <?php if ($free['movie']) { ?>
          <div class="l-movie__wrap">
            <?php echo $free['movie']; ?>
          </div>
        <?php     } ?>
      </div>
    </section>
  <?php } ?>

  <?php if ($price && ($price['num'] != '' || $price['unit'] != '')) { ?>
    <section class="l-price lower-section lazyload">
      <div class="l-price__inner inner">
        <div class="l-price__ttl lower-ttl">
          <h2 class="lower-ttl--ja">料金</h2>
        </div>
        <div class="l-price__wrap">
          <?php if ($price['num'] && $price['unit']) { ?>
            <p class="l-price__para"><span class="num"><?php echo $price['num']; ?></span><span class="unit"><?php echo $price['unit']; ?></span></p>
          <?php     } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if ($cta && $cta['btn']) { ?>
    <div class="l-cta section lazyload">
      <div class="l-cta__inner inner">
        <?php if ($cta['ttl']) { ?>
          <p class="l-cta__txt2"><?php echo $cta['ttl']; ?></p>
        <?php     } ?>
        <?php if ($cta['btn']) { ?>
          <div class="l-cta__btn-box btn-box flex">
            <?php foreach ($cta['btn'] as $btn) { ?>
              <div>
                <a href="<?php echo $btn['url']; ?>" class="btn _orange" <?php echo $btn['blank'] ? ' target="_blank"' : ''; ?>><?php echo $btn['text']; ?></a>
                <?php if ($btn['note']) { ?>
                  <p class="l-cta__txt3"><?php echo $btn['note']; ?></p>
                <?php             } ?>
              </div>
            <?php         } ?>
          </div>
        <?php     } ?>
      </div>
    </div>
  <?php } ?>

  <?php if ($project) { ?>
    <section class="l-project lower-section lazyload">
      <div class="inner l-project__inner c-top-card --full full">
        <div class="l-project__ttl lower-ttl">
          <h2 class="lower-ttl--ja">事例紹介</h2>
        </div>
        <div class="l-project__slider c-card__container">
          <div class="swiper-container c-card --list --sp-slider c-card01">
            <div class="swiper-wrapper c-card__list type1">
              <?php foreach ($project as $item) { ?>
                <?php
                $post_id = url_to_postid($item['url']);
                ?>
                <?php if ($post) { ?>
                  <?php
                  $title = get_the_title($post_id);
                  if (mb_strlen($title) > 21) {
                    $title = mb_substr($title, 0, 21) . '…';
                  }
                  ?>
                  <div class="swiper-slide c-card__item">
                    <article>
                      <a href="<?php the_permalink($post_id); ?>" class="c-card__item-link">
                        <div class="c-card__item-wrap">
                          <div class="c-card__item-pic img">
                            <?php if (has_post_thumbnail($post_id)) : ?>
                              <?php echo get_the_post_thumbnail($post_id); ?>
                            <?php else: ?>
                              <img class="archive__entry-thumbnail-img" src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo get_post_meta(185, '_wp_attachment_image_alt', true); ?>">
                            <?php endif; ?>
                          </div>
                          <div class="c-card__item-headline">
                            <div class="c-card__item-info">
                              <div class="time english"><?php the_time('Y.m.d', $post_id); ?></div>
                              <div class="time english update"><?php the_modified_date('Y.m.d', $post_id); ?></div>
                            </div>
                            <div class="c-card__item-ttl"><?php echo $title; ?></div>
                            <div class="c-card__arrow">詳しく見る</div>
                          </div>
                        </div>
                        <div class="c-card__item-body more">
                          <div class="c-card__item-headline2">
                            <div class="c-card__item-info">
                              <div class="time english"><?php the_time('Y.m.d', $post_id); ?></div>
                            </div>
                            <div class="c-card__item-ttl"><?php echo $title; ?></div>
                          </div>
                          <div class="c-card__arrow">詳しく見る</div>
                        </div>
                      </a>
                    </article>
                  </div>
                <?php         } ?>
              <?php     } ?>
            </div>
          </div><!-- ./swiper-container./c-card -->
          <div class="c-card__nav only-sp">
            <div class="c-card__next c-card__next01"></div>
            <div class="c-card__prev c-card__prev01"></div>
          </div>
        </div>
        <div class="l-project__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('project/')); ?>" class="btn">事例をもっと見る</a>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if ($flow) { ?>
    <?php
    $flowLength = count($flow);
    $listWidth = 145 * $flowLength + 24 * ($flowLength - 1);
    ?>
    <section class="l-flow lower-section lazyload">
      <div class="l-flow__inner inner">
        <div class="l-flow__ttl lower-ttl">
          <h2 class="lower-ttl--ja">ご相談の流れ</h2>
        </div>
        <p class="l-flow__intro">基本的にお申込みいただいてから1か月程度で導入が可能です。</p>
        <div class="l-flow__wrap">
          <ol class="l-flow__list" style="width: <?php echo ($listWidth / 16); ?>rem;">
            <?php foreach ($flow as $item) { ?>
              <li class="l-flow__item">
                <div class="l-flow__item-img">
                  <picture>
                    <img src="<?php echo $item['icon']; ?>" alt="<?php echo strip_tags($item['text']); ?>">
                  </picture>
                  <p class="l-flow__item-text"><?php echo $item['text']; ?></p>
                </div>
              </li>
            <?php     } ?>
          </ol>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if ($faq) { ?>
    <section class="l-faq lower-section lazyload">
      <div class="l-faq__inner inner">
        <div class="l-faq__ttl lower-ttl">
          <h2 class="lower-ttl--ja">よくあるご質問</h2>
        </div>
        <ul class="l-faq__list">
          <?php foreach ($faq as $item) { ?>
            <li class="l-faq__item">
              <div class="l-faq__item-question">
                <div class="l-faq__item-row">
                  <div class="l-faq__item-icon english">Q.</div>
                  <div class="l-faq__item-contents"><?php echo $item['question']; ?></div>
                </div>
              </div>
              <div class="l-faq__item-answer">
                <div class="l-faq__item-row">
                  <div class="l-faq__item-icon english">A.</div>
                  <div class="l-faq__item-contents"><?php echo $item['answer']; ?></div>
                </div>
              </div>
            </li>
          <?php     } ?>
        </ul>
      </div>
    </section>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
          <?php $cnt = 0; ?>
          <?php foreach ($faq as $item) { ?>
            <?php if ($cnt != 0) { ?>, {
              <?php         } else { ?> {
                <?php         } ?>
                <?php $cnt++; ?>
                  "@type": "Question",
                  "name": "<?php echo $item['question']; ?>",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo $item['answer']; ?>"
                  }
                }
              <?php     } ?>
              ]
        }
    </script>
  <?php } ?>

  <?php if ($cta2 && $cta2['btn']) { ?>
    <div class="l-cta section lazyload">
      <div class="l-cta__inner inner">
        <?php if ($cta['ttl']) { ?>
          <p class="l-cta__txt2"><?php echo $cta['ttl']; ?></p>
        <?php     } ?>
        <?php if ($cta2['btn']) { ?>
          <div class="l-cta__btn-box btn-box flex">
            <?php foreach ($cta2['btn'] as $btn) { ?>
              <div>
                <a href="<?php echo $btn['url']; ?>" class="btn _orange" <?php echo $btn['blank'] ? ' target="_blank"' : ''; ?>><?php echo $btn['text']; ?></a>
                <?php if ($btn['note']) { ?>
                  <p class="l-cta__txt3"><?php echo $btn['note']; ?></p>
                <?php             } ?>
              </div>
            <?php         } ?>
          </div>
        <?php     } ?>
      </div>
    </div>
  <?php } ?>
</div>

<?php if ($fbanner && is_array($fbanner) && is_array($fbanner['flg']) && (count($fbanner['flg']) > 0) && ($fbanner['flg'][0] == '1')) { ?>
  <div class="l-floatingbanner" id="fbanner">
    <div class="l-floatingbanner__inner">
      <div class="l-floatingbanner__close">
        <span class="l-floatingbanner__close-btn" id="fbanner-close-btn"></span>
      </div>
      <div class="l-floatingbanner__btn">
        <a href="<?php echo $fbanner['url']; ?>" <?php echo $fbanner['blank'] ? ' target="_blank"' : ''; ?>>
          <img src="<?php echo $fbanner['image']; ?>" alt="バナー">
        </a>
      </div>
    </div>
  </div>
  <style>
    .l_fbagjs,
    .l_qspkvy {
      display: none;
    }
  </style>
<?php } ?>

<?php
get_footer();
