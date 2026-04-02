<?php
/*
Template Name: 資料ダウンロード完了ページ
*/
//ヘッダー header.php読み込み
get_header();
?>

<div class="lower-mv --small">
  <div class="lower-mv__inner inner --w900">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Download</div>
      <h1 class="lower-mv__ttl">
        <span class="lower-mv__ttl-ja">資料ダウンロード<br class="only-sp">申し込み完了</span>
      </h1>
    </div>
  </div>
</div>

<section class="l-contact --thanks">
  <div class="l-contact__inner inner --w900">

    <div class="l-contact__content">
	<p class="l-contact__text">
			資料ダウンロードありがとうございます。<br>
			いただいたメールアドレスにダウンロードリンクをお送りしています。<br>
		</p>
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