<?php
/*
Template Name: アンケートページ用
*/
get_header();
?>
<?php include("newcon-css.php"); ?>
<style>
  .l-contact input[type=email] {
    padding-left: 0.9375rem;
    width: 100%;
    font-weight: 400;
    background: #fff;
    border-radius: 0.4375rem;
    border: 0.0625rem solid #959595; }
    @media only screen and (min-width: 768px) {
      .l-contact input[type=email] {
        padding-left: 1.25rem;
        font-size: 1.125rem;
        border-radius: 0.625rem; } }
    .l-contact input[type=email]::placeholder,
    .l-contact textarea::placeholder {
      color: #C3C0C0; }
  .l-contact input[type=email] {
    height: 3rem; }
    @media only screen and (min-width: 768px) {
      .l-contact input[type=email] {
        max-width: 30rem;
        height: 3.6875rem; } }
    .l-contact input[type=radio] {
    display: none; }
  .l-contact input[type=radio] + span {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9375rem;
    letter-spacing: 0;
    line-height: 1.4;
    position: relative; }
    @media only screen and (min-width: 768px) {
      .l-contact input[type=radio] + span {
        gap: 0.5rem;
        font-size: 1.125rem;
        letter-spacing: .05em;
        line-height: 1.8888888889; } }
    .l-contact input[type=radio] + span::before {
      content: "";
      display: inline-block;
      width: 1.5rem;
      height: 1.5rem;
      background: #fff;
      border-radius: 0.1875rem;
      border: 0.0625rem solid #959595; }
      @media only screen and (min-width: 768px) {
        .l-contact input[type=radio] + span::before {
          width: 1.5rem;
          height: 1.5rem; } }
    .l-contact input[type=radio] + span::after {
      content: "";
      display: inline-block;
      width: 0.75rem;
      height: 0.5rem;
      border-left: 0.125rem solid #00B6C9;
      border-bottom: 0.125rem solid #00B6C9;
      position: absolute;
      left: 0.3125rem;
      top: 50%;
      transform: translateY(-68%) rotate(-45deg);
      display: none; }
      @media only screen and (min-width: 768px) {
        .l-contact input[type=radio] + span::after {
          width: 1.25rem;
          height: 0.875rem;
          border-width: 0.25rem;
          left: 0.40625rem;
          transform: translateY(-80%) rotate(-45deg); } }
  .l-contact input[type=radio]:checked + span::after {
    display: inline-block; }
 .selectbox {
    display: inline-flex;
    align-items: center;
    position: relative;
}
.selectbox::after {
    position: absolute;
    right: 15px;
    width: 10px;
    height: 7px;
    background-color: #535353;
    clip-path: polygon(0 0, 100% 0, 50% 100%);
    content: '';
    pointer-events: none;
}
.selectbox select {
    appearance: none;
    min-width: 230px;
    height: 2.8em;
    padding: .4em calc(.8em + 30px) .4em .8em;
    border: 1px solid #d0d0d0;
    border-radius: 3px;
    background-color: #fff;
    color: #333333;
    font-size: 1em;
    cursor: pointer;
}
/*  .wpcf7-spinner {
    display: none;
  }*/
</style>
<script>
jQuery(function($){
  $(".newconserviceCont .q").on("click", function(e){
    e.preventDefault();
    $(this).next(".a").stop().slideToggle();
    $(this).find(".toggle img").toggleClass("show");
  });
});
</script>
<div id="newcon">
<div class="lower-mv --contact">
  <div class="lower-mv__inner inner">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Questionnaire</div>
      <h1 class="lower-mv__ttl"> <span class="lower-mv__ttl-ja">
        <?php the_title(); ?>
        </span> </h1>
    </div>
  </div>
</div>
<section class="l-contact bg-green section">
  <div class="l-contact__inner inner --w900">
    <?php if(is_page('questionnaire-thanks')): ?>
    <p style="font-size: 16px; line-height: 1.8; padding: 0 0 3em;">この度はアンケートにお答えいただきまして、誠にありがとうございました。<br>今後の勉強会運営の参考にさせていただきます。<br>どうぞよろしくお願いいたします。</p>
    <?php else: ?>
    <p style="font-size: 16px; line-height: 1.8; padding: 0 0 3em;">
		本日はピュアグロースの視察会にご参加いただきありがとうございます。<br>
		今後の例会運営の品質向上のために、アンケートへご協力お願いいたします。
	  </p>
    <?php endif; ?>
    <div class="l-contact__content">
      <?php while(have_posts()): ?>
      <?php the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
    </div>
  </div>
</section>
