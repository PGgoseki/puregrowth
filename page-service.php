<?php get_header(); ?>

<div class="lower-mv --service">
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
        <div class="lower-mv__heading english">Service</div>
        <h1 class="lower-mv__ttl">
          <span class="lower-mv__ttl-ja">サービス一覧</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<section class="l-service lower-section lazyload">
  <div class="l-service__inner inner">
    <div class="l-service__ttl lower-ttl">
      <h2 class="lower-ttl--ja">対ハウスメーカー・工務店の<br class="only-sp">クライアント数は全国No.1</h2>
    </div>
    <div class="l-service__img">
      <picture class="image">
        <img src="<?php echo get_template_directory_uri()?>/img/service/service01.png" alt="取引会社数 80社超">
      </picture>
      <picture class="image">
        <img src="<?php echo get_template_directory_uri()?>/img/service/service02.png" alt="平均継続年数 7年超">
      </picture>
      <picture class="image">
        <img src="<?php echo get_template_directory_uri()?>/img/service/service03.png" alt="平均成長率 114%">
      </picture>
      <picture class="image">
        <img src="<?php echo get_template_directory_uri()?>/img/service/service04.png" alt="クレーム解約 0件">
      </picture>
    </div>
  </div>
</section>

<section class="l-solution2 lower-section bg-green lazyload">
  <div class="l-solution2__inner inner">
    <h2 class="l-solution2__ttl">あらゆるフェーズや課題に対し、<br>再現性の高いソリューションを<br class="only-sp">揃えております</h2>
    <p class="l-solution2__copy"><span class="marker">立上げ段階(0-20棟段階)から<br class="only-sp">県内トップビルダーへの<br class="only-sp">成長実績多数！</span></p>
    <p class="l-solution2__para">家族経営だった工務店が、地域一番店になり、県内ナンバーワンになるまでの軌跡を多数伴走してまいりました。<br>机上の空論ではなく実際の成果を基にしているため、再現性が高く実現確度の高いサービスを提供できています。</p>
  </div>
</section>

<div class="l-nav lower-section bg-green lazyload">
  <div class="l-nav__inner inner">
    <div class="l-nav__ttl lower-ttl">
      <h2 class="lower-ttl--ja">お悩み別のご支援プラン</h2>
    </div>
    <ul class="l-nav__list">
      <li class="l-nav__item"><a href="#consulting"><p><span class="small">経営に対する幅広いアドバイスがほしいなら</span><span class="ttl">経営コンサルティング</span></p></a></li>
      <li class="l-nav__item"><a href="#ad"><p><span class="small">効率的に成長ギアを加速させたいなら</span><span class="ttl">広告運用代行</span></p></a></li>
      <li class="l-nav__item"><a href="#channel"><p><span class="small">採用のミスマッチ防止＆定着率向上を狙うなら</span><span class="ttl">採用チャンネル作成</span></p></a></li>
      <li class="l-nav__item"><a href="#costcut"><p><span class="small">低リスクで利益を改善したいなら</span><span class="ttl">成果報酬型コスト削減</span></p></a></li>
      <li class="l-nav__item"><a href="#pgc"><p><span class="small">同業の経営者ネットワークに興味があるなら</span><span class="ttl">ピュアグロースクラブ</span></p></a></li>
    </ul>
  </div>
</div>

<section class="l-plan lower-section lazyload" id="consulting">
  <div class="l-plan__inner inner">
    <div class="l-plan__wrap">
      <div class="l-plan__img">
        <picture>
          <img src="<?php echo get_template_directory_uri()?>/img/service/plan01.jpg" alt="経営コンサルティング">
        </picture>
      </div>
      <div class="l-plan__text">
        <h3 class="l-plan__ttl">経営コンサルティング</h3>
        <p class="l-plan__para"><em class="marker">住宅業界に精通したプロフェッショナルが直接顧客を担当</em>します。<br>業界内でも圧倒的な成果を誇る有名企業をクライアントとして多数抱えているため、<em class="marker">再現性と実行確度の高い</em>経営コンサルを行います。<br>クライアントの70％が年間20棟台からの取引で、平均取引年数は7年というのが弊社の誇りです。</p>
        <div class="l-plan__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('service/consulting/')); ?>" class="btn">経営コンサルティング<br class="only-sp">について<br class="only-pc">詳しく見る</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-plan lower-section lazyload" id="ad">
  <div class="l-plan__inner inner">
    <div class="l-plan__wrap">
      <div class="l-plan__img">
        <picture>
          <img src="<?php echo get_template_directory_uri()?>/img/service/plan02.jpg" alt="広告運用代行">
        </picture>
      </div>
      <div class="l-plan__text">
        <h3 class="l-plan__ttl">広告運用代行</h3>
        <p class="l-plan__para">住宅業界に特化したWeb集客代行サービスです。<br>マーケティングのプロが専属で対応し、<em class="marker">80社以上の運用実績</em>から導き出した最適解をご提案します。<br>業界特化だからこそ最速最短で成果へと繋げます。</p>
        <div class="l-plan__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('service/ad/')); ?>" class="btn">広告運用代行について<br class="only-sp">詳しく見る</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-plan lower-section lazyload" id="channel">
  <div class="l-plan__inner inner">
    <div class="l-plan__wrap">
      <div class="l-plan__img">
        <picture>
          <img src="<?php echo get_template_directory_uri()?>/img/service/plan03.jpg" alt="採用チャンネル作成">
        </picture>
      </div>
      <div class="l-plan__text">
        <h3 class="l-plan__ttl">採用チャンネル作成</h3>
        <p class="l-plan__para"><em class="marker">採用におけるミスマッチ防止や定着率の向上</em>を目指すなら、<br class="only-pc">Youtube採用チャンネルの作成をオススメします。<br>求職者が魅力を感じやすく、採用に直結しやすい動画のノウハウを豊富に持っているため、効率的に採用成功へ導くことが可能です。<br><em class="marker">住宅業界に精通したプロが企画～制作まで一貫してサポート</em>するため、安心してご利用いただけます。</p>
        <div class="l-plan__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('service/channel/')); ?>" class="btn">採用チャンネル作成について<br>詳しく見る</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-plan lower-section lazyload" id="costcut">
  <div class="l-plan__inner inner">
    <div class="l-plan__wrap">
      <div class="l-plan__img">
        <picture>
          <img src="<?php echo get_template_directory_uri()?>/img/service/plan04.jpg" alt="成果報酬型コスト削減">
        </picture>
      </div>
      <div class="l-plan__text">
        <h3 class="l-plan__ttl">成果報酬型コスト削減</h3>
        <p class="l-plan__para">コストダウン金額に応じた成果報酬型のコンサルティングサービスです。<br><em class="marker">コストダウンできなかった場合は成果報酬は発生しない</em>ので、リスクなくスタートいただけます。<br>コンサルタントと実務経験者それぞれの知見をもとに提案する、業界で唯一無二のサービスです。</p>
        <div class="l-plan__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('costcut/')); ?>" class="btn">成果報酬型コスト削減<br class="only-sp">について<br class="only-pc">詳しく見る</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-plan lower-section lazyload" id="pgc">
  <div class="l-plan__inner inner">
    <div class="l-plan__wrap">
      <div class="l-plan__img">
        <picture>
          <img src="<?php echo get_template_directory_uri()?>/img/service/plan05.jpg" alt="ピュアグロースクラブ">
        </picture>
      </div>
      <div class="l-plan__text">
        <h3 class="l-plan__ttl">ピュアグロースクラブ</h3>
        <p class="l-plan__para">「日本一成長意欲の強いビルダー経営者が集まる勉強会」として企画運営しており、<em class="marker">成長ビルダー視察と集合・個別勉強会の2本立て</em>で運営しています。<br>総勢200名超えの動員実績もあり、日頃の事業経営では味わえない体験ができると大変好評を得ている企画です。<br>トップビルダーの経営者と交流を持つことで、伸びる取組みを知り、貴社の事業に取り入れていただくことができます。</p>
        <div class="l-plan__btn-box btn-box">
          <a href="<?php echo esc_url(home_url('pgc/')); ?>" class="btn">ピュアグロースクラブ<br class="only-sp">について<br class="only-pc">詳しく見る</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();