<?php get_header(); ?>

<div class="lower-mv --sitemap">
	<div class="wrap">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<div class="breadcrumbs__inner inner">
<?php if(function_exists('bcn_display'))
{
	bcn_display();
}?>
			</div>
		</div>
		<div class="lower-mv__inner inner">
			<div class="lower-mv__txt">
				<div class="lower-mv__heading english">Site Map</div>
				<h1 class="lower-mv__ttl">
					<span class="lower-mv__ttl-ja">サイトマップ</span>
				</h1>
			</div>
		</div>
	</div>
</div>

<section class="l-sitemap lower-section">
	<div class="l-sitemap__inner inner">
		<p class="l-sitemap__totop"><a href="<?php echo esc_url(home_url('/')); ?>" class="l-sitemap__item-link">TOPページ</a></p>
		<div class="l-sitemap__row">
			<ul class="l-sitemap__lists">
				<li class="l-sitemap__sp-order1">
					<a href="<?php echo esc_url(home_url('service/')); ?>" class="l-sitemap__heading">サービス</a>
					<ul class="l-sitemap__sublists">
						<li><a href="<?php echo esc_url(home_url('service/consulting/')); ?>" class="l-sitemap__item-link">経営コンサルティング</a></li>
						<li><a href="<?php echo esc_url(home_url('service/ad/')); ?>" class="l-sitemap__item-link">広告運用代行</a></li>
						<li><a href="<?php echo esc_url(home_url('service/channel/')); ?>" class="l-sitemap__item-link">採用チャンネル作成</a></li>
					</ul>
					<ul class="l-sitemap__sublists">
						<li><a href="<?php echo esc_url(home_url('costcut/')); ?>" class="l-sitemap__item-link">成功報酬型コストダウン</a></li>
						<li><a href="<?php echo esc_url(home_url('pgc/')); ?>" class="l-sitemap__item-link">成長ビルダー視察会・勉強会</a></li>
					</ul>
				</li>
				<li class="l-sitemap__sp-order2">
					<span class="l-sitemap__heading">事例</span>
					<ul class="l-sitemap__sublists">
						<li><a href="<?php echo esc_url(home_url('project/')); ?>" class="l-sitemap__item-link">プロジェクト事例</a></li>
						<li><a href="<?php echo esc_url(home_url('post/client-voice/')); ?>" class="l-sitemap__item-link">クライアントボイス</a></li>
					</ul>
				</li>
				<li class="l-sitemap__sp-order3">
					<span class="l-sitemap__heading">お役立ち情報</span>
					<ul class="l-sitemap__sublists">
						<li><a href="<?php echo esc_url(home_url('post/download/')); ?>" class="l-sitemap__item-link">資料ダウンロード</a></li>
						<li><a href="<?php echo esc_url(home_url('post/seminar/')); ?>" class="l-sitemap__item-link">セミナー</a></li>
						<li><a href="<?php echo esc_url(home_url('post/column/')); ?>" class="l-sitemap__item-link">コラム</a></li>
					</ul>
				</li>
			</ul>
			<ul class="l-sitemap__lists horizontal">
				<li class="l-sitemap__sp-order5"><a href="<?php echo esc_url(home_url('post/member/')); ?>" class="l-sitemap__item-link" target="_blank">メンバー紹介</a></li>
				<li class="l-sitemap__sp-order6"><a href="<?php echo esc_url(home_url('about/')); ?>" class="l-sitemap__item-link" target="_blank">会社概要</a></li>
				<li class="l-sitemap__sp-order7"><a href="<?php echo esc_url(home_url('contact/')); ?>" class="l-sitemap__item-link">お問い合わせ</a></li>
			</ul>
		</div>
	</div>
</section>


<?php 
get_footer();