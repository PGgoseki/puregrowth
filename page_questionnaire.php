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

  /* ===== プルダウン ===== */
  .l-contact__select-wrap {
    position: relative;
    display: block;
    width: 100%;
    max-width: 24rem; }
  .l-contact__select-wrap::after {
    content: "";
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 0.375rem solid transparent;
    border-right: 0.375rem solid transparent;
    border-top: 0.5rem solid #00B6C9;
    pointer-events: none; }
  .l-contact__select {
    appearance: none;
    -webkit-appearance: none;
    width: 100%;
    height: 3rem;
    padding: 0 2.5rem 0 0.9375rem;
    background: #fff;
    border: 0.0625rem solid #959595;
    border-radius: 0.4375rem;
    font-size: 0.9375rem;
    color: #333;
    cursor: pointer;
    transition: border-color 0.2s ease, box-shadow 0.2s ease; }
    @media only screen and (min-width: 768px) {
      .l-contact__select {
        height: 3.6875rem;
        padding-left: 1.25rem;
        font-size: 1.125rem;
        border-radius: 0.625rem; } }
  .l-contact__select:focus {
    outline: none;
    border-color: #00B6C9;
    box-shadow: 0 0 0 0.1875rem rgba(0, 182, 201, 0.2); }
  .l-contact__select option[value=""] {
    color: #C3C0C0; }

  /* ===== チェックボックス ===== */
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
    border-radius: 50%;
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

  /* チェックボックス用スタイル */
  .l-contact input[type=checkbox] {
    display: none; }
  .l-contact input[type=checkbox] + span {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9375rem;
    letter-spacing: 0;
    line-height: 1.4;
    position: relative;
    white-space: nowrap; }
    @media only screen and (min-width: 768px) {
      .l-contact input[type=checkbox] + span {
        gap: 0.5rem;
        font-size: 1.125rem;
        letter-spacing: .05em;
        line-height: 1.8888888889; } }
  .l-contact input[type=checkbox] + span::before {
    content: "";
    display: inline-block;
    width: 1.5rem;
    height: 1.5rem;
    background: #fff;
    border: 0.0625rem solid #959595;
    border-radius: 0.25rem;
    flex-shrink: 0; }
    @media only screen and (min-width: 768px) {
      .l-contact input[type=checkbox] + span::before {
        width: 1.5rem;
        height: 1.5rem; } }
  .l-contact input[type=checkbox] + span::after {
    content: "";
    display: none;
    width: 0.75rem;
    height: 0.5rem;
    border-left: 0.125rem solid #00B6C9;
    border-bottom: 0.125rem solid #00B6C9;
    position: absolute;
    left: 0.3125rem;
    top: 50%;
    transform: translateY(-68%) rotate(-45deg); }
    @media only screen and (min-width: 768px) {
      .l-contact input[type=checkbox] + span::after {
        width: 1.25rem;
        height: 0.875rem;
        border-width: 0.25rem;
        left: 0.40625rem;
        transform: translateY(-80%) rotate(-45deg); } }
  .l-contact input[type=checkbox]:checked + span::after {
    display: inline-block; }

  /* チェックボックス/ラジオを1行につき1項目で表示 */
  .l-contact .wpcf7-checkbox .wpcf7-list-item,
  .l-contact .wpcf7-radio .wpcf7-list-item {
    display: block;
    margin: 0 0 0.75rem; }
  .l-contact .wpcf7-checkbox .wpcf7-list-item:last-child,
  .l-contact .wpcf7-radio .wpcf7-list-item:last-child {
    margin-bottom: 0; }

  /* ===== selectbox（既存クラス） ===== */
  .selectbox {
    display: inline-flex;
    align-items: center;
    position: relative; }
  .selectbox::after {
    position: absolute;
    right: 15px;
    width: 10px;
    height: 7px;
    background-color: #535353;
    clip-path: polygon(0 0, 100% 0, 50% 100%);
    content: '';
    pointer-events: none; }
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
    cursor: pointer; }

  /* ===== セレクトボックス（CF7・他のフォーム要素と統一） ===== */
  .l-contact .wpcf7-form-control-wrap:has(> select.wpcf7-select) {
    position: relative;
    display: block;
    width: 100%;
    max-width: 30rem; }
  .l-contact .wpcf7-form-control-wrap:has(> select.wpcf7-select)::after {
    content: "";
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 0.375rem solid transparent;
    border-right: 0.375rem solid transparent;
    border-top: 0.5rem solid #00B6C9;
    pointer-events: none; }
  .l-contact select.wpcf7-select {
    appearance: none;
    -webkit-appearance: none;
    width: 100%;
    height: 3rem;
    padding: 0 2.5rem 0 0.9375rem;
    background: #fff;
    border: 0.0625rem solid #959595;
    border-radius: 0.4375rem;
    font-size: 0.9375rem;
    color: #333;
    cursor: pointer;
    transition: border-color 0.2s ease, box-shadow 0.2s ease; }
    @media only screen and (min-width: 768px) {
      .l-contact select.wpcf7-select {
        height: 3.6875rem;
        padding-left: 1.25rem;
        font-size: 1.125rem;
        border-radius: 0.625rem; } }
  .l-contact select.wpcf7-select:focus {
    outline: none;
    border-color: #00B6C9;
    box-shadow: 0 0 0 0.1875rem rgba(0, 182, 201, 0.2); }
  .l-contact select.wpcf7-select:invalid,
  .l-contact select.wpcf7-select option[value=""] {
    color: #C3C0C0; }
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
    <p style="font-size: 16px; line-height: 1.8; padding: 0 0 3em;">
      本日はPGサマーサミット2026にご参加いただきありがとうございます。<br>
      アンケートへご回答いただいた方に本日のテキストをお送りしておりますので、ご回答にご協力お願いいたします。
    </p>
    <div class="l-contact__content">
      <?php while(have_posts()): ?>
      <?php the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
    </div>
  </div>
</section>