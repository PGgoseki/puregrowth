<?php get_header(); ?>

<?php
  $page_cats = get_the_category();
  $page_cat = $page_cats[0];
?>


<div class="breadcrumbs --top" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
    <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
  </div>
</div>

<section class="l-single section lazyload">
  <div class="l-single__inner inner">
    <div class="l-single__col-2">
      <div class="l-single__main">

        <h1 class="l-single__ttl"><?php the_title(); ?></h1>

        <div class="l-single__time">
          <span class="l-single__release"><span class="english"><?php the_time('Y.m.d'); ?></span></span>
          <span class="l-single__update"><span class="english"><?php the_modified_date('Y.m.d'); ?></span></span>
        </div>

        <ul class="l-single__cat-list">
          <?php 
          $cats = get_the_category(get_the_ID());
          if($cats):
            foreach($cats as $cat):
          ?>
            <li class="l-single__cat-item">
              <?php $category_id = get_cat_ID( $cat->name ); ?>
              <a href="<?php echo get_category_link($category_id); ?>" class="l-single__cat-item-link">
                <?php echo  $cat->name; ?>
              </a>
            </li>
          <?php endforeach; endif; ?>
        </ul>

        <ul class="l-single__tag-list">
          <?php
          $tags = get_the_tags(get_the_ID());
          $counter = 1;
          if($tags):
            foreach($tags as $tag):
              if($counter < 5):
          ?>
            <li class="l-single__tag-item">
              <a href="<?php echo get_tag_link($tag->term_id); ?>" class="c-card__item-tag-link">
                <?php echo  $tag->name; ?>
              </a>
            </li>
            <?php $counter++; ?>
            <?php endif; ?>
          <?php endforeach; endif; ?>
        </ul>

        <div class="l-single__thumbnail">
          <?php if (has_post_thumbnail()) : ?>
            <picture>
              <source media="(max-width: 599.98px)" srcset="<?php echo esc_url(get_the_post_thumbnail_url($post, 'single-thumbnail_sp')); ?>">
              <img class="archive__entry-thumbnail-img" class="lazyload" src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'single-thumbnail_pc')); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>">
            </picture>
          <?php endif; ?>
        </div>

        <div class="l-single__content">
          <?php the_content(); ?>
        </div>

        <?php if(get_field('author_name')): ?>
        <div class="l-single__author">
          <div class="l-single__author-ttl">監修者情報</div>
          <div class="l-single__author-row">
            <?php if(get_field('author_img')): ?>
              <?php $author_img = get_field('author_img'); ?>
            <div class="l-single__author-img">
              <img src="<?php echo esc_url($author_img['url']); ?>" alt="<?php echo esc_attr($author_img['alt']); ?>">
            </div>
            <?php endif; ?>
            <div class="l-single__author-txt">
              <div class="l-single__author-profile">
                <div class="l-single__author-name"><?php the_field('author_name'); ?></div>
                <div class="l-single__author-company">ピュアグロース株式会社</div>
              </div>
              <p class="l-single__author-para only-pc">
                <?php the_field('author_para'); ?>
              </p>
            </div>
          </div>
          <p class="l-single__author-para only-sp">
            <?php the_field('author_para'); ?>
          </p>
        </div>
        <?php endif; ?>
<!--　20231202削除
        <div class="l-single__sns">
          <ul class="l-single__sns-list">
            <li class="l-single__sns-item">
              <a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>"  target="_blank" rel="nofollow noopener"  class="l-single__sns-item-link"><img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/img/common/icon-twitter.svg" alt="twitter"></a>
            </li>
            <li class="l-single__sns-item">
              <a href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>" target='_blank' rel='noopener noreferrer' class="l-single__sns-item-link"><img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/img/common/icon-bookmark.svg" alt="bookmark"></a>
            </li>
            <li class="l-single__sns-item">
              <a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target='_blank' rel='noopener noreferrer' class="l-single__sns-item-link"><img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/img/common/icon-line.svg" alt="line"></a>
            </li>
            <li class="l-single__sns-item">
              <a href="https://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target='_blank' rel='noopener noreferrer' class="l-single__sns-item-link"><img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/img/common/icon-facebook.svg" alt="facebook"></a>
            </li>
          </ul>
        </div>
-->
        <div class="l-single__prev-next">
<?php
the_post_navigation(
    array(
        'prev_text' => '<span class="l-single__nav l-single__prev"><span class="icon"></span><span>%title</span></span>',
        'next_text' => '<span class="l-single__nav l-single__next"><span class="icon"></span><span>%title</span></span>',
        'in_same_term' => true,
    )
);
?>
        </div>


<div class="l-single__btn-box btn-box">
  <?php
    $categories = get_the_category();
    $is_manufacturing = false;
    $is_fc_vc = false;
    $category_id = null;
    $page_cat_name = '';

    foreach ($categories as $cat) {
      if ($cat->name == '住宅・不動産事業会社向けプロジェクト') {
        $is_manufacturing = true;
        break;
      } elseif ($cat->name == '住宅系FC・VC向けプロジェクト') {
        $is_fc_vc = true;
        break;
      }
    }

    if ($is_manufacturing) {
      $link = esc_url(home_url('/post/manufacturing/'));
      $page_cat_name = '住宅・不動産事業会社向けプロジェクト';
    } elseif ($is_fc_vc) {
      $link = esc_url(home_url('/post/fc-vc/'));
      $page_cat_name = '住宅系FC・VC向けプロジェクト';
    } else {
      if (!empty($categories)) {
        $category_id = get_cat_ID($categories[0]->name);
        $link = get_category_link($category_id);
        $page_cat_name = $categories[0]->name;
      }
    }
  ?>
  <a href="<?php echo $link; ?>" class="btn"><?php echo $page_cat_name; ?>の<br class="only-sp">一覧に戻る</a>
</div>

      </div>


      <aside class="l-single__aside">
        <div class="l-single__aside-inner">


          <div class="l-single__aside-ttl"><?php echo $page_cat->name; ?>の<br class="only-pc">最新記事</div>
          <?php
          $article_query = new WP_Query([
            'paged' => $paged,
            'post_status' => 'publish',
            'post_type' => 'post',
            'posts_per_page' => 4,
            'category_name' => $page_cat->slug,
          ]);
          if ($article_query->have_posts()) :
          ?>
          <ul class="l-single__aside-list">
            <?php while ($article_query->have_posts()) : $article_query->the_post() ?>
            <li class="l-single__aside-item">
              <a href="<?php the_permalink(); ?>" class="l-single__aside-item-link">
                <div class="l-single__aside-item-row">
                  <div class="l-single__aside-item-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                      <img class="archive__entry-thumbnail-img" class="lazyload" src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>">
                    <?php else : ?>
                      <img class="archive__entry-thumbnail-img lazyload" data-src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo get_post_meta( 185, '_wp_attachment_image_alt', true ); ?>">
                    <?php endif; ?>
                  </div>
                  <div class="l-single__aside-item-txt">
                    <div class="l-single__aside-item-time english"><?php the_time('Y.m.d'); ?></div>
                    <div class="l-single__aside-item-ttl"><?php my_get_title(25); ?></div>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
			
<div class="l-single__aside-btn-box btn-box">
  <?php
    $categories = get_the_category();
    $is_manufacturing = false;
    $category_id = null;
    $page_cat_name = '';

    foreach ($categories as $cat) {
      if ($cat->name == '住宅・不動産事業会社向けプロジェクト') {
        $is_manufacturing = true;
        break;
      }
    }

    if ($is_manufacturing) {
      $link = esc_url(home_url('/post/manufacturing/'));
      $page_cat_name = '住宅・不動産事業会社向けプロジェクト';
    } else {
      if (!empty($categories)) {
        $category_id = get_cat_ID($categories[0]->name);
        $link = get_category_link($category_id);
        $page_cat_name = $categories[0]->name;
      }
    }
  ?>
  <a href="<?php echo $link; ?>" class="btn"><?php echo $page_cat_name; ?>の一覧</a>
</div>
          <div class="l-single__aside-banner">
            <a href="https://lin.ee/w11X0jb" target="_blank" rel="”noopener”" id="l_zfjiaf">
              <img src="<?php echo get_template_directory_uri()?>/img/common/aside-banner.jpg" alt="LINEお友だち登録で最新の住宅経営ノウハウ公開中！">
            </a>
          </div>
        </div>
      </aside>


    </div>
  </div>
</section>

<?php
  $page_tags = get_the_tags();
  $tag_counter = 1;
?>

<?php if($page_tags): ?>
<?php foreach($page_tags as $page_tag): ?>

<section class="l-articles <?php if($tag_counter & 1) { echo 'bg-green'; } ?> lower-section lazyload">
  <div class="l-articles__inner inner hidden">
    <h2 class="l-articles__ttl lower-ttl">
      <span class="lower-ttl--ja">#<?php echo $page_tag->name; ?> の最新記事</span>
    </h2>
    <div class="l-articles__slider c-card__container">
      <?php 
        $tag_counter_id = '0'. $tag_counter;
        get_template_part('components/c-card', null, $args = array(
          'posts_per_page' => 4,
          'tag_name' => $page_tag->slug,
          'list' => true,
          'tag' => false,
          'sp-tag' => false,
          'sp-slider' => false,
          'id' => $tag_counter_id,
          'more' => true,
        )); 
      ?>
    </div>
  </div>
</section>
<?php $tag_counter++ ; ?>
<?php endforeach; ?>
<?php endif; ?>



<?php 
get_footer();