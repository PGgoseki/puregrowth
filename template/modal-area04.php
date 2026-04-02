<?php
$regions = array(
  'mie'      => '三重県',
  'shiga'    => '滋賀県',
  'kyoto'    => '京都府',
  'osaka'    => '大阪府',
  'hyogo'    => '兵庫県',
  'nara'     => '奈良県',
  'wakayama' => '和歌山県',
);

foreach ($regions as $region_slug => $region_name) : 
  $args = array(
    'post_type' => 'post',
    'category_name' => 'client-voice',
    'meta_query' => array(
      array(
        'key' => 'voice_region',
        'value' => $region_slug,
        'compare' => 'IN'
      )
    ),
  );
  $my_query = new WP_Query($args);

  // 記事が存在する場合のみ表示
  if ($my_query->have_posts()) : ?>
    <dl class="c-map-modal__item">
      <dt class="c-map-modal__head"><?php echo $region_name; ?></dt>
      <dd class="c-map-modal__body">
        <?php
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <?php if ( get_field( 'meta_noindex' ) ): ?>
            <div class="c-map-modal__link --nolink nolink"><?php if ( get_field( 'voice_name' ) ) : ?><?php the_field( 'voice_name' ); ?><?php else: ?><?php the_title(); ?><?php endif; ?>様</div>
          <?php else: ?>
            <a href="<?php the_permalink(); ?>" class="c-map-modal__link"><?php if ( get_field( 'voice_name' ) ) : ?><?php the_field( 'voice_name' ); ?><?php else: ?><?php the_title(); ?><?php endif; ?>様</a>
          <?php endif; ?>
        <?php endwhile; ?>
      </dd>
    </dl>
  <?php endif;
  wp_reset_postdata();
endforeach; ?>