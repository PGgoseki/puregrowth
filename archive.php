<?php get_header(); ?>

<?php
  $query_object = get_queried_object();
  $page_name = $query_object->name;
  $cat_slug = $query_object->category_nicename; 
  $cat_name = $query_object->cat_name;
  $tag_name = $query_object->slug;
?>

<div class="lower-mv --articles">
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
        <div class="lower-mv__heading english">Articles</div>
        <h1 class="lower-mv__ttl">
          <span class="lower-mv__ttl-ja"><?php echo $page_name; ?>の一覧</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<section class="l-articles section">
	<?php if ( is_category(52) ) : ?>
	<div class="l-lead lower-section" style="padding-top: 0;">
	  <div class="l-lead__inner inner">
		<p class="l-lead__para">
		ピュアグロースは志の高い成長意欲の高いクライアントに伴走しながら成長のサポートをしてまいりました。<br>
		お客様の声の一部を紹介いたします。
		</p>
	  </div>
	</div>
	<?php endif; ?>
  <div class="l-articles__inner inner">
    <div class="l-articles__slider c-card__container">
      <?php 
        get_template_part('components/c-card', null, $args = array(
          'posts_per_page' => 12,
          'cat' => $cat_slug,
          // 'tag_name' => $tag_name,
          'list' => true,
          'tag' => true,
          'sp-slider' => false,
          'id' => 1,
          'more' => true,
        )); 
      ?>
      
      <?php my_custom_pagination($cat_slug , null, true ); ?>

      
    </div>
  </div>
</section>


<?php 
get_footer();