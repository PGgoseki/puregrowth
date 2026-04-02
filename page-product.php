<?php
/**
 * Template Name: 商品のテンプレート
 */
?>
<?php get_header(); ?>

<div class="lower-mv --product">
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
        <div class="lower-mv__heading english">Seminar</div>
        <h1 class="lower-mv__ttl">
          <span class="lower-mv__ttl-ja">セミナー申し込み内容の確認</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="l-product">
  <div class="l-product__inner">
  <?php the_content(); ?>
  </div>
</div>

<?php 
get_footer();
?>
