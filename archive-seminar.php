<?php get_header(); ?>

<div class="lower-mv --articles">
  <div class="lower-mv__inner inner">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Seminar</div>
      <h1 class="lower-mv__ttl">
        <span class="lower-mv__ttl-ja">セミナー一覧</span>
      </h1>
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

<section class="l-articles section">
  <div class="l-category-nav">
    <div class="inner">
      <div class="l-category-nav__content">
        <h2 class="l-category-nav__title">カテゴリーから絞り込む</h2>
        <div class="l-category-nav__links">
          <?php
          // カスタムタクソノミーのスラッグを指定
          $taxonomy = 'seminar_category';
          
          // タクソノミーのタームを取得
          $terms = get_terms(array(
            'taxonomy' => $taxonomy,
            'hide_empty' => true, // 記事が存在するタームのみを取得
          ));
          
          // タームが存在する場合、リンクを生成
          if ( !empty($terms) && !is_wp_error($terms) ) {
            foreach ($terms as $term) {
              $term_link = get_term_link($term);
              if (is_wp_error($term_link)) {
                continue;
              }
              echo '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="l-articles__inner inner">
    <div class="l-articles__slider c-card__container">
		<?php
		$cat_slug = 'your_value_here'; // ここに適切なカテゴリーのスラッグを指定してください
		get_template_part('components/c-card-seminar', null, $args = array(
		  'posts_per_page' => 12,
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