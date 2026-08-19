<?php
/*
Template Name: アンケート回答完了ページ
*/
//ヘッダー header.php読み込み
get_header();
?>

<div class="lower-mv --small">
  <div class="lower-mv__inner inner --w900">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Questionnaire</div>
      <h1 class="lower-mv__ttl">
        <span class="lower-mv__ttl-ja">アンケート回答完了</span>
      </h1>
    </div>
  </div>
</div>

<section class="l-contact --thanks">
  <div class="l-contact__inner inner --w900">

    <div class="l-contact__content">
      <p class="l-contact__text">
        この度はアンケートにお答えいただきまして、誠にありがとうございました。<br>
        今後の例会運営の参考にさせていただきます。<br>
        どうぞよろしくお願いいたします。
      </p>
      <div class="l-contact__thanks">
        <div class="l-contact__btn-box">
          <a href="<?php echo esc_url(home_url()); ?>" class="btn">TOPページへ</a>
        </div>
      </div>
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
