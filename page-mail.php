<?php
/**
 * Template Name: メルマガ
 */
?>
<?php get_header(); ?>

<div class="lower-mv --project">
	<div class="lower-mv__inner inner">
		<div class="lower-mv__txt">
			<div class="lower-mv__heading english">Contact</div>
			<h1 class="lower-mv__ttl">
				<span class="lower-mv__ttl-ja">メルマガ申し込み</span>
			</h1>
		</div>
	</div>
</div>

<section class="l-contact bg-green section">
  <div class="l-contact__inner inner --mail">

    <div class="l-contact__content">
      <?php the_content(); ?>
    </div>

  </div>
</section>


<?php 
get_footer();