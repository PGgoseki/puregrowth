<?php get_header(); ?>

<div class="lower-mv --404 _404">
  <div class="wrap">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner inner">
<?php if(function_exists('bcn_display'))
{
  bcn_display();
}?>
      </div>
    </div>
    <div class="lower-mv__inner inner">
      <div class="lower-mv__txt">
        <div class="lower-mv__heading english">404 Not Found</div>
        <h1 class="lower-mv__ttl">
          <span class="lower-mv__ttl-ja">ページが<br class="only-sp">見つかりませんでした</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<section class="l-404">
  <div class="l-404__inner inner">
    <p class="l-404__para">
      申し訳ございませんが、お探しのページは見つかりませんでした。<br>
      ページが移動または削除されたか、URLの入力間違いの可能性がございます。<br>
      恐れ入りますがTOPページへ移動するか、サイトマップよりお探しください。
    </p>
    <ul class="l-404__list">
      <li class="l-404__item">
        <div class="l-404__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('')); ?>" class="btn">TOPページへ</a>
        </div>
      </li>
      <li class="l-404__item">
        <div class="l-404__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('sitemap/')); ?>" class="btn">サイトマップへ</a>
        </div>
      </li>
    </ul>
  </div>
</section>


<?php 
get_footer();