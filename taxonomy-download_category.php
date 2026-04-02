<?php
get_header();

// 現在のタームオブジェクトを取得
$term = get_queried_object();
?>

<div class="lower-mv --articles">
  <div class="lower-mv__inner inner">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Download</div>
      <h1 class="lower-mv__ttl">
        <span class="lower-mv__ttl-ja"><?php echo esc_html($term->name); ?>の<br class="only-sp">資料ダウンロード一覧</span>
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
  <div class="l-articles__inner inner">
    <div class="l-articles__slider c-card__container">
		<?php
		$cat_slug = 'your_value_here'; // ここに適切なカテゴリーのスラッグを指定してください
		get_template_part('components/c-card-download-category', null, $args = array(
		  'posts_per_page' => 12,
		  'list' => true,
		  'tag' => true,
		  'sp-slider' => false,
		  'id' => 1,
		)); 
		?>

<?php
// 変数を初期化します
$term = get_queried_object();
$term_id = $term->term_id ?? null;
$project = false; // 必要に応じて初期化

// ページネーションの呼び出し
my_custom_pagination($term->slug, $term_id, $project);
?>

    </div>
  </div>
</section>


<?php 
get_footer();