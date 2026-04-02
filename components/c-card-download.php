<?php
// $args 配列から各変数に個別に値を取り出す
$posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : '';
$cat = isset($args['cat']) ? $args['cat'] : '';
$tag_name = isset($args['tag_name']) ? $args['tag_name'] : '';
$list = isset($args['list']) ? $args['list'] : '';
// $args 配列が設定されているかを確認し、'tag_name' キーが存在するかどうかをチェックする
if (isset($args) && isset($args['tag_name'])) {
    $tag_name = $args['tag_name'];
} else {
    $tag_name = ''; // 'tag_name' キーが存在しない場合はデフォルト値を設定する
}
$sp_slider = isset($args['sp-slider']) ? $args['sp-slider'] : '';
$slider_id = isset($args['id']) ? $args['id'] : '';
?>

<?php
  $article_query = new WP_Query([
    'paged' => $paged,
    'post_status' => 'publish',
    'post_type' => 'download',
    'posts_per_page' => $posts_per_page,
	     'meta_query' => [
      [
        'key' => 'meta_noindex',
        'value' => '1',
        'compare' => '!='
      ]
    ]
  ]);
  if ($article_query->have_posts()) :
  ?>

    <div class="swiper-container c-card <?php if($list) { echo '--list'; } ?> <?php if($sp_slider) { echo '--sp-slider'; } ?> c-card<?php if($slider_id) { echo $slider_id; } ?>">
  
      <div class="swiper-wrapper c-card__list ">
        <?php while ($article_query->have_posts()) : $article_query->the_post() ?>
        <?php
          $tag_class = '';
          $tags = get_the_terms(get_the_ID(), 'download_category');
          if($tags):
            $tag_class = ' tag_on';
          endif;
        ?>
        <div class="swiper-slide c-card__item <?php echo $tag_class; ?>">
          <article>
            <a href="<?php the_permalink(); ?>" class="c-card__item-link">
              <div class="c-card__item-pic img">
                <?php if (has_post_thumbnail()) : ?>
                  <picture>
                    <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>">
                    <img class="archive__entry-thumbnail-img" class="lazyload" src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>">
                  </picture>
                <?php else : ?>
                  <picture>
                    <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>">
                    <img class="archive__entry-thumbnail-img" src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo get_post_meta( 185, '_wp_attachment_image_alt', true ); ?>">
                  </picture>
                <?php endif; ?>
              </div>
              <div class="c-card__item-body">
  <?php 
  if($tags && !is_wp_error($tags)):
  ?>
              <ul class="c-card__item-cat-list">
  <?php 
    foreach($tags as $term):
  ?>
    <li class="c-card__item-cat-item">
<?php /* ?>
      <a href="<?php echo get_term_link($term); ?>" class="c-card__item-cat-item-link">
<?php */ ?>
        <?php echo $term->name; ?>
<?php /* ?>
      </a>
<?php */ ?>
    </li>
  <?php endforeach; ?>
</ul>
  <?php endif; ?>
<div class="c-card__item-info">
  <div class="time english"><?php the_time('Y.m.d'); ?></div>
</div>
<div class="c-card__item-ttl"><?php my_get_title(21) ?></div>
<div class="c-card__item-txt"><?php my_get_excerpt(75); ?></div>
<div class="c-card__arrow">詳しく見る</div>
              </div>
            </a>
<?php if($tag): ?>
    <ul class="c-card__item-tag-list <?php if(!$sp_tag) { echo 'only-pc'; } ?>">
      <?php
      $counter = 1;
      if($tags && !is_wp_error($tags)):
        foreach($tags as $tag):
          if($counter < 5):
      ?>
        <li class="c-card__item-tag-item">
          <a href="<?php echo get_term_link($tag); ?>" class="c-card__item-tag-link">
          <?php echo $tag->name; ?>
          </a>
        </li>
        <?php $counter++; ?>
        <?php endif; ?>
      <?php endforeach; endif; ?>
    </ul>
<?php endif; ?>
          </article>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div><!-- ./swiper-container./c-card -->
<!--
    <div class="c-card__nav <?php if($sp_slider) { echo 'only-sp'; } ?>">
      <div class="c-card__next c-card__next<?php if($slider_id) { echo $slider_id; } ?>"></div>
      <div class="c-card__prev c-card__prev<?php if($slider_id) { echo $slider_id; } ?>"></div>
    </div>
-->
  <?php endif; ?>

