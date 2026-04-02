<?php get_header(); ?>

<div class="lower-mv --contact">
	<div class="lower-mv__inner inner">
		<div class="lower-mv__txt">
			<div class="lower-mv__heading english">Contact</div>
			<h1 class="lower-mv__ttl">
				<span class="lower-mv__ttl-ja">お問い合わせ</span>
			</h1>
		</div>
	</div>
</div>

<section class="l-intro section">
  <div class="l-intro__inner">
    <h2 class="l-intro__title">無料の経営相談会</h2>
    <p class="l-intro__text">ピュアグロースでは、経営に関する無料相談会を開催しています。<br>全国にある地域No1ビルダー、100棟ビルダー企業様など本当に今伸ばしている会社の実践事例も豊富にございますので、お気軽にご利用下さい。<br>どんな悩みでも解決のヒントが見つかります。</p>
	  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/n18bnQc3jfY?si=PqEGULrWM2A7MXCx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="aspect-ratio: 16 / 9;"></iframe>
    <div class="l-intro__btn-box"><a href="#mw_wp_form_mw-wp-form-172" class="btn">無料の経営相談を<br class="only-sp">申し込む</a></div>

    <h2 class="l-intro__title">これまでにご相談いただいた事</h2>
    <ul class="l-intro__list">
      <li class="l-intro__item">地域No1ビルダーになるための経営戦略を持ちたい</li>
      <li class="l-intro__item">100棟ビルダーになるために、商品、営業、集客、採用、組織の相談をしたい</li>
      <li class="l-intro__item">注文住宅、リフォーム、不動産の多角化経営を相談したい</li>
      <li class="l-intro__item">集客数増加に向けた具体的な施策が知りたい</li>
      <li class="l-intro__item">営業育成について相談したい</li>
      <li class="l-intro__item">商品戦略について相談したい</li>
    </ul>
    <p class="l-intro__text">など。経営課題を解決し、成長を支援させて頂くノウハウがあります。経営に関することであれば、どんなことでもご相談ください。</p>
    <p class="l-intro__text strong"><span class="marker">経営相談やお見積り、お問い合わせをご希望の方は以下のフォームに必要事項を入力のうえ送信ください。サービスに関するご相談やお見積り依頼も承っております。</span></p>
  </div>
</section>

<section class="l-contact bg-green section">
  <div class="l-contact__inner inner --w900">

    <div class="l-contact__content">
      <?php the_content(); ?>
    </div>

  </div>
</section>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
<?php if(function_exists('bcn_display'))
{
  bcn_display();
}?>
  </div>
</div>

<?php 
get_footer();