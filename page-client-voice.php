<?php get_header(); ?>

<?php
  $query_object = get_queried_object();
  $cat_slug = "client-voice"; 
  $cat_name = "クライアントボイス";
  $tag_name = "client-voice";
?>

<div class="lower-mv --articles">
  <div class="lower-mv__inner inner">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Client Voice</div>
      <h1 class="lower-mv__ttl">
        <span class="lower-mv__ttl-ja">クライアントボイス</span>
      </h1>
		<span class="lower-mv__ttl-en english">Supporting Quality Management <br class="only-sp">and Growth</span>
    </div>
  </div>
</div>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
    <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
  </div>
</div>

<section class="l-lead lower-section">
  <div class="l-lead__inner inner">
    <p class="l-lead__para">
    ピュアグロースは志の高い成長意欲の高いクライアントに伴走しながら成長のサポートをしてまいりました。<br>
    お客様の声の一部を紹介いたします。
    </p>
  </div>
</section>

<section class="l-articles section">
  <div class="l-articles__inner inner">
    <div class="l-articles__slider c-card__container">
      <?php 
        get_template_part('components/c-card', null, $args = array(
          'posts_per_page' => 30,
          'cat' => $cat_slug,
          // 'tag_name' => $tag_name,
          'list' => true,
          'tag' => true,
          'sp-slider' => false,
          'id' => 1,
        )); 
      ?>

      <?php my_custom_pagination($cat_slug , null, true ); ?>

      
    </div>
  </div>
</section>


<?php 
get_footer();