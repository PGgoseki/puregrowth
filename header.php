<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- メタタグ読み込み -->
<?php
// 現在のURLに 'asp-products' が含まれているかチェック
if (strpos($_SERVER['REQUEST_URI'], 'asp-products') !== false) {
    echo '<meta name="robots" content="noindex, nofollow">';
}
?>
	<?php get_template_part('template/meta'); ?>
	<!-- フォント読み込み -->
	<?php get_template_part('template/font'); ?>
	<?php wp_head(); ?>



</head>

<body <?php body_class('l-body'); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58G755T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="l-header">
  <div class="l-header__inner">
      <?php if(is_front_page()): ?>
    <h1><a href="<?php echo esc_url(home_url()); ?>" class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logo/PURE_GROWTH_logo.png" alt="ピュアグロース"></a></h1>
      <?php else: ?>
        <?php if(is_page('contact') || is_page(array('174'))): ?>
    <span class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logo/PURE_GROWTH_logo.png" alt="ピュアグロース"></span>
        <?php else: ?>
    <a href="<?php echo esc_url(home_url()); ?>" class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logo/PURE_GROWTH_logo.png" alt="ピュアグロース"></a>
        <?php endif; ?>
      <?php endif; ?>
    <nav class="c-nav">
		<div id="navList">
		<?php if(!is_page(array('contact', '174', '1289', '1320', '1323', '1324', '1325', '1401', '1322', '1332', '1333', '1334', '1335', '1336', '1337', '1350', '1353', '1354', '1355', '1356', '1357', '1358', '1371', '1372', '1373', '1374', '1375', '1376', '1450', '1482', '2639') )): ?>
					<ul class="c-nav__list">
						<?php
						$nav = array(
							'サービス' => array(
								'url' => 'service/',
								'children' => array(
									'経営コンサルティング' => 'service/consulting/',
									'PGハウス（住宅フランチャイズ）' => 'https://pg-house.jp/fc_lp01/',
									'広告運用代行' => 'service/ad/',
									'採用チャンネル作成' => 'service/channel/',
									'成功報酬型コストダウン' => 'costcut/',
									'成長ビルダー視察会・勉強会' => 'pgc/',
									'土地・顧客管理システム' => 'https://sugokawa.jp/lp/',
								),
							),
							'事例' => array(
								'url' => '',
								'children' => array(
									'プロジェクト事例' => 'project/',
									'クライアントボイス' => 'post/client-voice/',
								),
							),
							'お役立ち情報' => array(
								'url' => '',
								'children' => array(
									'資料ダウンロード' => 'post/download/',
									'セミナー' => 'post/seminar/',
									'コラム' => 'post/column/',
								),
							),
							'メンバー紹介' => 'post/member/',
							'会社概要' => 'about/',
							'お問い合わせ' => 'contact/',
						);

						foreach ($nav as $ttl => $link):
						?>
						<li>
							<?php if (is_array($link)): ?>
								<?php if (!empty($link['url'])): ?>
							<a href="<?php echo esc_url(home_url($link['url'])); ?>"><span class="_border"><?php echo $ttl; ?></span></a>
								<?php else: ?>
							<a href="" onclick="return false;"><span class="_border"><?php echo $ttl; ?></span></a>
								<?php endif; ?>
								<ul class="c-nav__sublist">
									<?php foreach ($link['children'] as $subttl => $sublink): ?>
									  <?php
									$url = (preg_match('/^https?:\/\//', $sublink))
										? $sublink
										: home_url($sublink);
									?>
									<li><a href="<?php echo esc_url($url); ?>"><span class="_border"><?php echo $subttl; ?></span></a></li>
									<?php endforeach; ?>
								</ul>
							<?php else: ?>
							<a href="<?php echo esc_url(home_url($link)); ?>"><span class="_border"><?php echo $ttl; ?></span></a>
							<?php endif; ?>
						</li>
						<?php endforeach; ?>
					</ul>
					<div class="btn-wrap is-sp">
						<a href="<?php echo esc_url(home_url('/post/download_category/レポート/')); ?>" class="btn _orange _sp">資料ダウンロード</a>
						<a href="https://pg-house.jp/fc_lp01/" class="btn _sp">PGハウスについて</a>
					</div>
		<?php endif; ?>
		</div>
    </nav>
        <?php if(is_page(array('costcut') )): ?>
      <a href="#form" class="btn _header _lp is-pc">コストダウン実例集をダウンロード</a>
        <?php elseif(!is_page(array('contact', '174', '1289', '1320', '1323', '1324', '1325', '1401', '1322', '1332', '1333', '1334', '1335', '1336', '1337', '1350', '1353', '1354', '1355', '1356', '1357', '1358', '1371', '1372', '1373', '1374', '1375', '1376', '1450', '1482') )): ?>
      <a href="<?php echo esc_url(home_url('/post/download_category/レポート/')); ?>" class="btn _orange _header is-pc">資料ダウンロード</a>
      <a href="https://pg-house.jp/fc_lp01/" class="btn _header is-pc">PGハウスについて</a>
        <?php else: ?>
        <?php endif; ?>
        <?php if(!is_page(array('contact', '174', '1289', '1320', '1323', '1324', '1325', '1401', '1322', '1332', '1333', '1334', '1335', '1336', '1337', '1350', '1353', '1354', '1355', '1356', '1357', '1358', '1371', '1372', '1373', '1374', '1375', '1376', '1450', '1482', '2639') )): ?>
    <button class="hamburger"></button>
        <?php endif; ?>
  </div>
</header>
