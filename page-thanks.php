<?php if(is_page(array('2641') )): ?>
<?php
// WordPressの初期化（※PHP7.4では動かない場合あり、その場合この行は削除）
require_once('wp-load.php');

// リファラを取得
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// リファラが存在しないか、指定されたページ経由でない場合にリダイレクト
if (empty($referrer) || strpos($referrer, esc_url(home_url()) . '/costcut/') !== 0) {
    wp_redirect(esc_url(home_url()) . '/costcut/');
    exit();
}

// リファラが正しい場合、通常のコンテンツを表示
// ここに通常のコンテンツの表示コードを追加
?>
<?php endif; ?>
<?php
/*
Template Name: お問い合わせ完了
*/
//ヘッダー header.php読み込み
get_header();
?>

<div class="lower-mv --contact">
	<div class="lower-mv__inner inner">
		<div class="lower-mv__txt">
          <?php if(is_page(array('2641') )): ?>
			<div class="lower-mv__heading english">Download</div>
          <?php elseif(is_page(array('174') )): ?>
			<div class="lower-mv__heading english">Thanks</div>
          <?php else: ?>
			<div class="lower-mv__heading english">Contact</div>
          <?php endif; ?>
			<h1 class="lower-mv__ttl">
          <?php if(is_page(array('2218') )): ?>
				<span class="lower-mv__ttl-ja">お申し込み完了</span>
          php elseif(is_page(array('2641') )): ?>
				<span class="lower-mv__ttl-ja">資料ダウンロード<br class="only-sp">申し込み完了</span>
          <?php else: ?>
				<span class="lower-mv__ttl-ja">お問い合わせ完了</span>
          <?php endif; ?>
			</h1>
      <?php the_content(); ?>
		</div>
	</div>
</div>

<?php if(is_page(array('1482') )): ?>
<section class="l-contact --thanks">
  <div class="l-contact__inner inner --w900">

    <div class="l-contact__content">
      <p class="l-contact__thanks">
        <div class="l-contact__btn-box">
          <?php
          // URLパラメーターから download_post_id を取得
          $download_post_id = isset($_GET['download_post_id']) ? intval($_GET['download_post_id']) : 0;

          // 投稿IDからカスタムフィールドの値を取得
          $custom_field_value = get_field('download_url', $download_post_id);

          if ($custom_field_value) {
              echo '<a href="' . esc_url($custom_field_value) . '" class="btn _green">資料をダウンロードする</a>';
          } else {
              echo '<p>自動返信メールに資料ダウンロードURLが記載されております。</p>';
          }
          ?>
        </div>
      </p>
    </div>

  </div>
</section>
<?php elseif(is_page(array('2641') )): ?>
<section class="l-contact --thanks">
  <div class="l-contact__inner inner --w900">

    <div class="l-contact__content">
      <p class="l-contact__thanks">
        <div class="l-contact__btn-box --left">
			<p class="l-contact__btn-text">
				資料ダウンロードありがとうございます。<br>
				いただいたメールアドレスにダウンロードリンクをお送りしています。<br>
				該当の資料は以下のリンクからもダウンロードいただけます。
			</p>
			<div class="l-contact__btn-box --col2">
				<a href="https://pure-growth.co.jp/wp-content/uploads/2025/07/costdown-examples.pdf?usp=share_link" class="btn _orange" target="_blank">ダウンロードする</a>
				<a href="<?php echo esc_url(home_url()); ?>" class="btn _green">TOPページへ</a>
			</div>
        </div>
      </p>
    </div>

  </div>
</section>
<?php else: ?>
<section class="l-contact --thanks">
  <div class="l-contact__inner inner --w900">

    <div class="l-contact__content">
      <div class="l-contact__thanks">
        <div class="l-contact__btn-box">
          <a href="<?php echo esc_url(home_url()); ?>" class="btn">TOPページへ</a>
        </div>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>

<div class="breadcrumbs sticky" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
    <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
  </div>
</div>

<?php 
get_footer();