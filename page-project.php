<?php get_header(); ?>

<?php
  $query_object = get_queried_object();
  $page_name = $query_object->label;
  $taxonomy = $query_object->taxonomy; 
  $term = $query_object->slug; 
  $term_name = $query_object->name;
?>

<div class="lower-mv --project _project">
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
        <div class="lower-mv__heading english">Archives</div>
        <h1 class="lower-mv__ttl">
            <span class="lower-mv__ttl-ja">プロジェクト事例紹介</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<section class="l-lead lower-section">
  <div class="l-lead__inner inner">
    <p class="l-lead__para">
    ピュアグロースは志の高い成長意欲の高いクライアントに伴走しながら成長のサポートをしてまいりました。<br>
    プロジェクトの一部を紹介いたします。
    </p>
  </div>
</section>

<section class="l-project lower-section bg-green lazyload">
  <div class="l-project__inner inner">
    <div class="l-project__ttl lower-ttl">
      <span class="lower-ttl--en english">Project for Housing / Real Estate Companies</span>
      <h2 class="lower-ttl--ja">住宅・不動産事業会社向け<br class="only-sp">プロジェクト</h2>
    </div>
    <div class="l-project__para">
      弊社には多くの県内No1ビルダー・優良ビルダーの成長支援の実績があります。<br>
      立上げ段階(0－20棟段階)から持続的成長に向けて伴走支援させて頂く中でトップビルダーになった実績が多いことが我々の強みであり、誇りです。経営者のニーズとご要望に応じて、経験値の高いプロフェッショナルが直接顧客を担当します。業界内でも圧倒的な成果を誇る有名企業を多数クライアントとして抱えており、再現性の高い、実行確度の高い経営サービスを行います。
    </div>
  </div>
  <div class="l-project__inner inner wide">
    <div class="l-project__slider c-card__container">
      <?php 
        get_template_part('components/c-card', null, $args = array(
          'posts_per_page' => 3,
          'cat' => 'manufacturing',
          'list' => true,
          'tag' => true,
          'sp-tag' => false,
          'sp-slider' => true,
          'id' => '01',
          'more' => true,
          'type' => 1,
        )); 
      ?>
    </div>
    <div class="l-project__btn-box">
      <a href="<?php echo esc_url(home_url('post/manufacturing/')); ?>" class="btn">住宅・不動産事業会社向け<br>プロジェクトをもっと見る</a>
    </div>
  </div>
</section>

<section class="l-project lower-section lazyload">
  <div class="l-project__inner inner">
    <div class="l-project__ttl lower-ttl">
      <span class="lower-ttl--en english">Project for Housing Franchise Chains <br class="only-sp">/ Voluntary Chains</span>
      <h2 class="lower-ttl--ja">住宅系FC・VC向け<br class="only-sp">プロジェクト</h2>
    </div>
    <div class="l-project__para">
      ピュアグロース社のクライアントが住宅FCの全国トップ加盟店だという事実や、急成長を果たした裏側に我々がサポートをしていたという実績を聞きつけて、FC本部やVC本部とのお付き合いが始まるというのはよくあるケースです。業界縮小時代で本部の舵取りも難易度を増しています。加盟店開発から加盟店の成果創出に向けたトータル経営サービスは全国でも弊社にしか出来ない独自の強みだと言えます。
    </div>
    <div class="l-project__slider c-card__container">
      <?php 
        get_template_part('components/c-card', null, $args = array(
          'posts_per_page' => 3,
          'cat' => 'fc-vc',
          'list' => true,
          'tag' => true,
          'sp-tag' => false,
          'sp-slider' => true,
          'id' => '02',
        )); 
      ?>
    </div>
    <div class="l-project__btn-box">
      <a href="<?php echo esc_url(home_url('post/fc-vc/')); ?>" class="btn">住宅系FC・VC向け<br>プロジェクトをもっと見る</a>
    </div>
  </div>
</section>

<section class="l-owners lower-section lazyload">
  <div class="l-owners__img only-sp">
    <img class="lazyload" data-src="<?php echo get_template_directory_uri()?>/img/project/owner-img-sp.jpg" alt="">
  </div>
  <div class="l-owners__inner inner">
    <div class="l-owners__ttl lower-ttl --left">
      <span class="lower-ttl--en english">For Business Owners</span>
      <h2 class="lower-ttl--ja">経営者の皆様へ</h2>
    </div>
    <p class="l-owners__para">
      ピュアグロースは志の高い成長意欲の高いクライアントとの深い濃密な関係性が最大の強みであり誇りです。<br>
      そんな経営者の皆様が切磋琢磨しながら学び合う環境をご用意しております。<br>
      百聞は一見にしかず。弊社が自信をもってオススメできるサービスがこちらです。
    </p>
    <div class="l-owners__btn-box">
      <a href="<?php echo esc_url(home_url('pgc/')); ?>" class="btn">経営者向け勉強会について<br class="only-sp">詳しく見る</a>
    </div>
  </div>
</section>

<?php 
get_footer();