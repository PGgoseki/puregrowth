<?php
// $args 配列から各変数に個別に値を取り出す
$posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : '';
$list = isset($args['list']) ? $args['list'] : '';
$sp_slider = isset($args['sp-slider']) ? $args['sp-slider'] : '';
$slider_id = isset($args['id']) ? $args['id'] : '';

// カスタムタクソノミーのスラッグを指定
$taxonomy = 'seminar_category';
$term = get_queried_object();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$article_query = new WP_Query([
    'paged' => $paged,
    'post_status' => 'publish',
    'post_type' => 'seminar',
	 'has_password' => false,
    'tax_query' => [
        [
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $term->slug,
        ],
    ],
    'posts_per_page' => $posts_per_page,
]);
if ($article_query->have_posts()) :
?>

<div class="swiper-container c-card <?php if ($list) { echo '--list'; } ?> <?php if ($sp_slider) { echo '--sp-slider'; } ?> c-card<?php if ($slider_id) { echo $slider_id; } ?>">

    <div class="swiper-wrapper c-card__list ">
        <?php while ($article_query->have_posts()) : $article_query->the_post(); ?>
        <?php
          $tag_class = '';
          $tags = get_the_terms(get_the_ID(), $taxonomy);
          if($tags):
            $tag_class = ' tag_on';
          endif;
        ?>
        <div class="swiper-slide c-card__item <?php echo $tag_class; ?>">
            <article>
                <a href="<?php if (get_field('external')) : ?><?php the_field('external'); ?><?php else : ?><?php the_permalink(); ?><?php endif; ?>" class="c-card__item-link" <?php if (get_field('external')) : ?>target="_blank"<?php endif; ?>>
                    <div class="c-card__item-pic img">
                        <?php if (has_post_thumbnail()) : ?>
                        <picture>
                            <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>">
                            <img class="archive__entry-thumbnail-img lazyload" src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>">
                        </picture>
                        <?php else : ?>
                        <picture>
                            <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>">
                            <img class="archive__entry-thumbnail-img" src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo get_post_meta(185, '_wp_attachment_image_alt', true); ?>">
                        </picture>
                        <?php endif; ?>
                    </div>
                    <div class="c-card__item-body">
                            <?php 
                            if ($tags && !is_wp_error($tags)):
                            ?>
                        <ul class="c-card__item-cat-list">
                            <?php 
                                foreach ($tags as $term):
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
                            <div class="time english"><?php echo esc_html( get_field('event_date') ); ?></div>
                        </div>
                        <div class="c-card__item-ttl"><?php my_get_title(21) ?></div>
                        <div class="c-card__item-txt"><?php my_get_excerpt(75); ?></div>
                        <div class="c-card__arrow">詳しく見る</div>
                    </div>
                    <ul class="c-card__item-tag-list <?php if (!$sp_tag) { echo 'only-pc'; } ?>">
                    </ul>
                </a>
            </article>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div><!-- ./swiper-container./c-card -->

<?php endif; ?>
