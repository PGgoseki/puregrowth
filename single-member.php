<?php
/**
 * Template Name: メンバー詳細
 */
?>
<?php get_header(); ?>
<?php
// カスタムフィールドの取得
$name_ja         = get_field('name_ja');
$name_en         = get_field('name_en');
$sns             = get_field('sns');
//$member_image    = get_field('member_image');
//$member_image_sp = get_field('member_image_sp');
$intro           = get_field('intro');
$service         = get_field('service');
$profile         = get_field('profile');
$project         = get_field('project');
$movie           = get_field('movie');
$column          = get_field('column');
$cta             = get_field('cta');
$cta2            = get_field('cta2');
?>

<div class="breadcrumbs --top" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
    <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
  </div>
</div>

<section class="l-intro lower-section lazyload">
  <div class="l-intro__inner inner">
    <div class="l-intro__wrap">
      <div class="l-intro__text">
        <div class="l-intro__ttl lower-ttl">
<?php if ($name_en) { ?>
          <p class="lower-ttl--en"><?php echo $name_en; ?></p>
<?php } ?>
          <h1 class="lower-ttl--ja"><?php echo $name_ja; ?></h1>
        </div>
        <div class="l-intro__sns">
<?php if ($sns) { ?>
<?php     foreach ($sns as $item) { ?>
          <div class="l-intro__sns-item"><a href="<?php echo $item['sns_url']; ?>" target="_blank"><img src="<?php echo $item['sns_icon']; ?>" alt="SNS"></a></div>
<?php     } ?>
<?php } ?>
        </div>
      </div>
      <div class="l-intro__img">
<?php if (has_post_thumbnail()) : ?>
        <picture class="image">
          <img src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>" alt="<?php echo $name_ja; ?>">
        </picture>
<?php else : ?>
        <picture>
          <img src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo $name_ja; ?>">
        </picture>
<?php endif; ?>
      </div>
<?php if ($intro) { ?>
      <div class="l-intro__para"><?php echo $intro; ?></div>
<?php } ?>
    </div>

<?php if ($service && is_array($service)) { ?>
    <div class="l-intro__service">
      <h2 class="l-intro__service-ttl">担当可能な<br class="only-sp">サービス提供領域</h2>
      <ul class="l-intro__service-list">
<?php     foreach ($service as $item) { ?>
<?php         if (!empty($item['url']) && !empty($item['text'])) { ?>
        <li class="l-intro__service-item"><a href="<?php echo $item['url']; ?>" class="btn"><?php echo $item['text']; ?></a></li>
<?php         } ?>
<?php     } ?>
      </ul>
    </div>
<?php } ?>
  </div>
</section>

<?php if ($cta && is_array($cta['btn']) && !empty($cta['btn'][0]['text'])) { ?>
<div class="l-cta section lazyload">
  <div class="l-cta__inner inner">
<?php     if ($cta['ttl']) { ?>
    <p class="l-cta__txt5"><?php echo $cta['ttl']; ?></p>
<?php     } ?>
<?php     if ($cta['btn']) { ?>
    <div class="l-cta__btn-box btn-box">
      <div>
        <a href="<?php echo $cta['btn']['url']; ?>" class="btn _orange"<?php echo $cta['btn']['blank'] ? ' target="_blank"' : ''; ?>><?php echo $cta['btn']['text']; ?></a>
      </div>
    </div>
<?php     } ?>
  </div>
</div>
<?php } ?>

<div class="l-nav lazyload">
  <div class="l-nav__inner inner">
    <ul class="l-nav__list">
<?php if ($profile && $profile['movie']) { ?>
      <li class="l-nav__item"><a href="#profile"><p>プロフィール紹介</p></a></li>
<?php } ?>
<?php if ($project && is_array($project)) { ?>
      <li class="l-nav__item"><a href="#project"><p>対応した事例・レポート</p></a></li>
<?php } ?>
<?php if ($movie && is_array($movie)) { ?>
      <li class="l-nav__item"><a href="#movie"><p>出演動画</p></a></li>
<?php } ?>
<?php if ($column && is_array($column)) { ?>
      <li class="l-nav__item"><a href="#column"><p>執筆コラム</p></a></li>
<?php } ?>
    </ul>
  </div>
</div>

<?php if ($profile && $profile['movie']) { ?>
<section class="l-profile lower-section lazyload" id="profile">
  <div class="l-profile__inner inner">
    <div class="l-profile__ttl lower-ttl">
      <h2 class="lower-ttl--ja">プロフィール紹介</h2>
    </div>
    <div class="l-profile__area current" id="area01">
      <?php echo $profile['movie']; ?>
    </div>
  </div>
</section>
<?php } ?>

<?php if ($project && is_array($project)) { ?>
  <section class="l-project lower-section lazyload" id="project">
    <div class="inner l-project__inner c-top-card --full full">
      <div class="l-project__ttl lower-ttl">
        <h2 class="lower-ttl--ja">対応した事例・レポート</h2>
      </div>
      <div class="l-project__slider c-card__container">
        <div class="swiper-container c-card --list --sp-slider c-card01">
          <div class="swiper-wrapper c-card__list type1">
<?php     foreach ($project as $item) { ?>
<?php
              $post_id = url_to_postid($item['url']);
?>
<?php         if ($post) { ?>
<?php
                  $title = get_the_title($post_id);
                  if(mb_strlen( $title ) > 21 ) {
                    $title = mb_substr($title, 0, 21) . '…';
                  }
?>
            <div class="swiper-slide c-card__item">
              <article>
                <a href="<?php the_permalink($post_id); ?>" class="c-card__item-link">
                  <div class="c-card__item-wrap">
                    <div class="c-card__item-pic img">
                      <?php if ( has_post_thumbnail($post_id) ) : ?>
                        <?php echo get_the_post_thumbnail($post_id); ?>
                      <?php else: ?>
                      <img class="archive__entry-thumbnail-img" src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo get_post_meta( 185, '_wp_attachment_image_alt', true ); ?>">
                      <?php endif; ?>
                    </div>
                    <div class="c-card__item-headline">
                      <div class="c-card__item-info">
                        <div class="time english"><?php the_time('Y.m.d', $post_id); ?></div>
                        <div class="time english update"><?php the_modified_date('Y.m.d', $post_id); ?></div>
                      </div>
                      <div class="c-card__item-ttl"><?php echo $title; ?></div>
                      <div class="c-card__arrow">詳しく見る</div>
                    </div>
                  </div>
                  <div class="c-card__item-body more">
                    <div class="c-card__item-headline2">
                      <div class="c-card__item-info">
                        <div class="time english"><?php the_time('Y.m.d', $post_id); ?></div>
                      </div>
                      <div class="c-card__item-ttl"><?php echo $title; ?></div>
                    </div>
                    <div class="c-card__arrow">詳しく見る</div>
                  </div>
                </a>
              </article>
            </div>
<?php         } ?>
<?php     } ?>
          </div>
        </div><!-- ./swiper-container./c-card -->
        <div class="c-card__nav only-sp">
          <div class="c-card__next c-card__next01"></div>
          <div class="c-card__prev c-card__prev01"></div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if ($movie && is_array($movie)) { ?>
<section class="l-movie lower-section lazyload" id="movie">
  <div class="l-movie__inner inner">
    <div class="l-movie__ttl lower-ttl">
      <h2 class="lower-ttl--ja">出演動画</h2>
    </div>
    <ul class="l-movie__list">
<?php     foreach ($movie as $item) { ?>
      <li class="l-movie__item">
        <div class="l-movie__movie">
            <?php echo $item['url']; ?>
        </div>
        <p class="l-movie__headline"><?php echo $item['headline']; ?></p>
      </li>
<?php     } ?>
    </ul>
  </div>
</section>
<?php } ?>

<?php if ($column && is_array($column)) { ?>
  <section class="l-column lower-section lazyload" id="column">
    <div class="inner l-column__inner c-top-card --full full">
      <div class="l-column__ttl lower-ttl">
        <h2 class="lower-ttl--ja">執筆コラム</h2>
      </div>
      <div class="l-column__slider c-card__container">
        <div class="swiper-container c-card --list --sp-slider c-card02">
          <div class="swiper-wrapper c-card__list type1">
<?php     foreach ($column as $item) { ?>
<?php
              $post_id = url_to_postid($item['url']);
?>
<?php         if ($post) { ?>
<?php
                  $title = get_the_title($post_id);
                  if(mb_strlen( $title ) > 21 ) {
                    $title = mb_substr($title, 0, 21) . '…';
                  }
?>
            <div class="swiper-slide c-card__item">
              <article>
                <a href="<?php the_permalink($post_id); ?>" class="c-card__item-link">
                  <div class="c-card__item-wrap">
                    <div class="c-card__item-pic img">
                      <?php if ( has_post_thumbnail($post_id) ) : ?>
                        <?php echo get_the_post_thumbnail($post_id); ?>
                      <?php else: ?>
                      <img class="archive__entry-thumbnail-img" src="<?php echo esc_url(wp_get_attachment_image_url(185, 'full')); ?>" alt="<?php echo get_post_meta( 185, '_wp_attachment_image_alt', true ); ?>">
                      <?php endif; ?>
                    </div>
                    <div class="c-card__item-headline">
                      <div class="c-card__item-info">
                        <div class="time english"><?php the_time('Y.m.d', $post_id); ?></div>
                        <div class="time english update"><?php the_modified_date('Y.m.d', $post_id); ?></div>
                      </div>
                      <div class="c-card__item-ttl"><?php echo $title; ?></div>
                      <div class="c-card__arrow">詳しく見る</div>
                    </div>
                  </div>
                  <div class="c-card__item-body more">
                    <div class="c-card__item-headline2">
                      <div class="c-card__item-info">
                        <div class="time english"><?php the_time('Y.m.d', $post_id); ?></div>
                      </div>
                      <div class="c-card__item-ttl"><?php echo $title; ?></div>
                    </div>
                    <div class="c-card__arrow">詳しく見る</div>
                  </div>
                </a>
              </article>
            </div>
<?php         } ?>
<?php     } ?>
          </div>
        </div><!-- ./swiper-container./c-card -->
        <div class="c-card__nav only-sp">
          <div class="c-card__next c-card__next02"></div>
          <div class="c-card__prev c-card__prev02"></div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if ($cta2 && is_array($cta2) && is_array($cta2[0]['btn']) && !empty($cta2[0]['btn'][0]['text'])) { ?>
<div class="l-cta section lazyload">
  <div class="l-cta__inner inner">
    <div class="l-cta__wrap">
<?php     $cnt = 0; ?>
<?php     foreach ($cta2 as $area) { ?>
<?php         if ($cnt >= 2) { break; } ?>
<?php         $cnt++; ?>
      <div class="l-cta__area">
<?php         if ($area['ttl']) { ?>
        <h2 class="l-cta__ttl2"><?php echo $area['ttl']; ?></h2>
<?php         } ?>
<?php         if ($area['para']) { ?>
        <p class="l-cta__txt4"><?php echo $area['para']; ?></p>
<?php         } ?>
<?php         if ($area['btn']) { ?>
        <div class="l-cta__btn-box btn-box">
          <div>
            <a href="<?php echo $area['btn']['url']; ?>" class="btn _orange"<?php echo $area['btn']['blank'] ? ' target="_blank"' : ''; ?>><?php echo $area['btn']['text']; ?></a>
          </div>
        </div>
<?php         } ?>
      </div>
<?php     } ?>
    </div>
  </div>
</div>
<?php } ?>

<?php 
get_footer();