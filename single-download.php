<?php get_header(); ?>

<?php
  $email_text = get_post_meta(get_the_ID(), 'email_text', true);
?>


<script>
    // 記事タイトルを取得してフォームにセットする関数
    function setDownloadName() {
        var downloadName = '<?php echo get_the_title(); ?>'; // 記事タイトルを取得
        document.querySelector('[name="download_name"]').value = downloadName; // フォームにセット
    }
	
	// 記事IDを取得して隠しフィールドにセットする関数
	function setDownloadPostId() {
		var postId = '<?php echo get_the_ID(); ?>'; // 記事IDを取得
		document.querySelector('[name="download_post_id"]').value = postId; // フォームにセット
	}

	// ページがロードされたときに実行
	window.onload = function() {
		setDownloadName(); // 記事タイトルをセット
		setDownloadPostId(); // 記事IDをセット
		setEmailText(); // カスタムフィールドの値をセット
	};

</script>

<div class="breadcrumbs --top" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
    <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
  </div>
</div>

<section class="l-single section lazyload --custom-post">
  <div class="l-single__inner inner">
    <div class="l-single__col-2">
      <div class="l-single__main">

        <h1 class="l-single__ttl"><?php the_title(); ?></h1>

        <div class="l-single__time">
          <span class="l-single__release"><span class="english"><?php the_time('Y.m.d'); ?></span></span>
          <span class="l-single__update"><span class="english"><?php the_modified_date('Y.m.d'); ?></span></span>
        </div>

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

        <div class="l-single__contact">
          <a href="#form" class="l-single__contact-btn">ダウンロードする</a>
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
        <div class="l-single__prev-next">
<?php
the_post_navigation(
    array(
        'prev_text' => '<span class="l-single__nav l-single__prev"><span class="icon"></span><span>%title</span></span>',
        'next_text' => '<span class="l-single__nav l-single__next"><span class="icon"></span><span>%title</span></span>',
    )
);
?>
        </div>

        <div class="l-single__btn-box btn-box">
          <a href="" class="btn">資料ダウンロード一覧に戻る</a>
        </div>

      </div>


      <aside class="l-single__aside sp-active">
        <div class="l-single__aside-inner" id="form">

          <h2 class="l-single__aside-title">資料ダウンロード<br>フォーム</h2>
          <?php $form_type = get_field('form_type'); if ( get_field( 'form_type' ) ) :?>
            <?php echo do_shortcode($form_type); ?>
          <?php else: ?>
            <?php echo do_shortcode('[mwform_formkey key="1418"]'); ?>
          <?php endif; ?>

        </div>
      </aside><!--/.l-single__aside-->


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
          'posts_per_page' => 3,
          'tag_name' => $page_tag->slug,
          'list' => true,
          'tag' => true,
          'sp-tag' => false,
          'sp-slider' => true,
          'id' => $tag_counter_id,
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