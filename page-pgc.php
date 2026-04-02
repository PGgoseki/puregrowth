<?php get_header(); ?>

<div class="lower-mv --pgc">
    <div class="wrap">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="breadcrumbs__inner inner">
                <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
            </div>
        </div>
<!--
        <div class="lower-mv__inner inner">
            <div class="lower-mv__txt">
                <div class="lower-mv__heading english">Pure Growth Club</div>
                <h1 class="lower-mv__ttl">
                    <span class="lower-mv__ttl-ja">ピュアグロースクラブ</span>
                </h1>
            </div>
        </div>
-->
    </div>
</div>

<section class="l-about lower-section">
    <div class="l-about__inner inner">
        <div class="l-about__ttl lower-ttl">
            <span class="lower-ttl--en english">About Pure Growth Club</span>
            <h2 class="lower-ttl--ja">ピュアグロースクラブとは</h2>
        </div>
        <div class="l-about__heading">
            <span>日本一成長意欲の強い</span><br class="only-sp"><span>ビルダー経営者が集まる</span><br><span>経営者向け勉強会</span>
        </div>
        <div class="l-about__img">
            <picture>
                <source media="(min-width: 767px)"
                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/about1.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/about1.png" alt="">
            </picture>
        </div>
    </div>
</section>

<section class="l-member lower-section">
    <h2 class="l-member__heading">会員企業の一部ご紹介<br><span>※掲載許可を頂いた会員様</span>
    </h2>
    <div class="l-logo-slider">
        <div class="logo-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo02.png" alt="ヤマト住建様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo01.png" alt="ヒノキヤグループ様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo05.png" alt="国分ハウジング様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo09.png" alt="アールプランナー様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo10.png" alt="ホームライフ様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo33.png" alt="アイニコグループ様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-5.svg"
                        alt="WITHDOM GROUP株式会社様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo30.jpg" alt="紀の国住宅様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo21.png" alt="ノークホームズ様" />
                </div>
            </div>
        </div>
        <div class="logo-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo03.png" alt="ロゴスホールディングス様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo07.png" alt="ヘルシーホーム様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo11.png" alt="アルプスピアホーム様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo15.png" alt="シリウスEHC様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo04.png" alt="シアーズホーム様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo08.jpg" alt="大英産業様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/logo32.png" alt="建匠様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pgc/member2-81.webp" alt="平松建築株式会社様" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/member2-30.jpg" alt="株式会社LIFEFUND様" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="l-movie lower-section">
    <div class="l-movie__inner inner">
        <div class="l-movie__heading">
            <em>次のステージを目指す工務店</em>のための<br class="only-sp">
            経営者向けの勉強会です。<br>
            集客・営業・採用など、<em>リアルな事例</em>を<br class="only-sp">会員様同士で共有。<br>
            <br class="only-sp">
            全国の経営者・幹部が学び合い、<br class="only-sp">
            共に成長しています。
        </div>
        <div class="l-movie__video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/4-O8SPzUPsY?si=zGOHUHkF47wOqrEA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    </div>
</section>

<section class="l-contents bg-green lower-section">
    <div class="l-contents__inner inner">
        <div class="l-contents__ttl lower-ttl">
            <span class="lower-ttl--en english">Contents of PGC</span>
            <h2 class="lower-ttl--ja">PGCのコンテンツ</h2>
        </div>
        <div class="l-contents__lead">
            「成長ビルダー視察」と「集合型・個別勉強会」の二本立てのコンテンツを隔月で実施しています。
        </div>
        <div class="l-contents__row">
            <div class="l-contents__txt">
                <h3 class="l-contents__heading">成長ビルダー視察</h3>
                <p class="l-contents__para">
                    会員企業の現地視察と当日経営者プレゼンが主なコンテンツです。新展示場・社屋・社長の自宅等の見学を通じて成長のエッセンスをより深い気づきとして自社に持ち帰って頂けます。<br>
                    また視察企業様プレゼンにおいては、経営者自ら、通常開催の業界セミナー等では話さないような特別講演をいただいております。視察先企業は与え好きな企業様ばかりで、深い、濃い質問にも答えていただけております。当日は懇親会まで含めて1日たっぷりと学ぶことが可能です。
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider l-contents__slider01">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider01.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider01.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider02.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider02.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider03.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider03.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-contents__nav">
                    <div class="l-contents__next l-contents01__next"></div>
                    <div class="l-contents__prev l-contents01__prev"></div>
                </div>
                <div class="l-contents__pagination l-contents__pagination01"></div>
            </div>
        </div>
        <div class="l-contents__row">
            <div class="l-contents__txt">
                <h3 class="l-contents__heading">集合型・個別勉強会</h3>
                <p class="l-contents__para">
                    我々からの業界提言講演を行った後、1社40分の課題解決を個別企業ごとに行っていきます。参加者の経営者は成長意欲が強く、他社の課題を自社に置き換えて聞いて頂けます。通常の定額支援でお話するような濃い経営課題について、解決議論を視察頂くことができます。また、参加者の社長から意見をもらうこともでき、「伸びている社長の考え方」をインストールすることも　可能です。
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider l-contents__slider02">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider04.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider04.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider05.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-slider05.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-contents__nav">
                    <div class="l-contents__next l-contents02__next"></div>
                    <div class="l-contents__prev l-contents02__prev"></div>
                </div>
                <div class="l-contents__pagination l-contents__pagination02"></div>
            </div>
        </div>
        <div class="l-contents__recommend">
            <div class="l-contents__recommend-box">
                <h2 class="l-contents__recommend-ttl">こんな方にオススメです</h2>
                <ul class="l-contents__recommend-list">
                    <li class="l-contents__recommend-item">
                        <span>高いレベルのビルダーの取り組みを実際に見てみたい</span>
                    </li>
                    <li class="l-contents__recommend-item">
                        <span>セミナーや資料だけではわからない成長ビルダーの取り組みを知りたい</span>
                    </li>
                    <li class="l-contents__recommend-item">
                        <span>レベルの高い経営者と仲良くなりたい</span>
                    </li>
                    <li class="l-contents__recommend-item">
                        <span>事業承継を考えており、次世代経営者の仲間づくりをしたい</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="l-grow lower-section lazyload">
    <div class="l-grow__inner inner">
        <div class="l-grow__ttl">Grow Together</div>
        <p class="l-grow__txt">
            ここでしか得られない人脈や<br class="only-sp">
            ノウハウを活かし、<br class="only-sp">
            ともに成長していきましょう！
        </p>
        <div class="l-grow__btn-box btn-box">
                 <a href="<?php echo esc_url(home_url('contact/')); ?>" class="btn _orange">詳しい資料を取り寄せる</a>
        </div>
    </div>
</section>

<section class="l-schedule lower-section">
    <div class="l-schedule__inner inner">
        <div class="l-schedule__ttl lower-ttl">
            <span class="lower-ttl--en english">Annual Schedule</span>
            <h2 class="lower-ttl--ja">年間スケジュール</h2>
        </div>
        <div class="l-schedule__row">
            <div class="l-schedule__txt">
                <div class="l-schedule__heading">
                    内容の濃い勉強会を<br>
                    年間11回開催します
                </div>
                <p class="l-schedule__para">
                    <span>①1泊2日の視察＆勉強会　　　…3回<br>
                        ②2泊3日の中期経営計画合宿　…2回 <br>
                        ③「合同支援」の集合勉強会 　…3回<br>
                        ④最新事例の共有セミナー　 　…2回<br>
                        ⑤年末の感謝祭＆表彰式　 　　…1回
                    </span>
                    <br>
                    ※会員様には専用のチャットワークを準備させていただきます。入会後招待させていただきます。そちらで例会スケジュール・データコンテンツ等のやり取りはさせていただきます。<br>
                    ※入会後は会員同士での質問・情報共有もしていただくことが可能です。
                </p>
            </div>
            <div class="l-schedule__example">
                       <div class="l-schedule__table-ttl">2026年の開催スケジュール</div>
                <div class="l-schedule__table-img">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="<?php echo get_template_directory_uri() ?>/img/pgc/schedule.jpg">
                                   <img src="<?php echo get_template_directory_uri() ?>/img/pgc/schedule.jpg"
                            alt="2026年の開催スケジュール">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="l-contents bg-green lower-section">
    <div class="l-contents__inner inner">
        <div class="l-contents__ttl lower-ttl">
                 <span class="lower-ttl--en english">Contents of PGC</span>
                 <h2 class="lower-ttl--ja">コンテンツ紹介</h2>
        </div>
        <div class="l-contents__row">
            <div class="l-contents__txt">
                       <h3 class="l-contents__heading">26年3月<br>Gハウス様</h3>
                <p class="l-contents__para">
                    <span class="bold">
                        【視察の見どころ】<br>
                        ①全国成長率TOPビルダーの成長戦略<br>
                        ②集客力が高い商品戦略<br>
                        ③趙社長が見据える経営戦略<br>
                        <br>
                    </span>
                    <br>
                    大阪本社で急成長を続けるGハウス様。<br>
                    今回、業界初の視察ツアーということで快諾いただきました。<br>
                    本社社屋と最新　モデルハウスを趙社長の講演とともに徹底公開いたします。
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider l-contents__slider03">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <a href="https://pure-growth.co.jp/seminar/pgc2026-3/"
                                target="_blank"
                                rel="noopener noreferrer">
                                    <picture>
                                        <source media=""
                                            srcset="<?php echo get_template_directory_uri() ?>/img/pgc/0311about1.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pgc/0311about1.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--ここまで-->
        </div>
        <!-- 26年3月 -->
        <div class="l-contents__row">
            <div class="l-contents__txt">
                       <h3 class="l-contents__heading">26年6月<br>カワムラホーム様</h3>
                <p class="l-contents__para">
                    <span class="bold">
                        【視察内容】<br>
                        ①札幌各拠点の視察<br>
                        ②コスパ住宅のコストダウンノウハウ<br>
                        ③川村社長の成長＆人事戦略<br>
                        <br>
                    </span>
                    <br>
                    札幌立ち上げで初年度130棟契約を実現した各店舗の視察と、川村社長の今後の展望についての特別講演。<br>
                    100億補助金採択の展望や、唯一コストダウンできなかった商品開発のポイントを大公開します。
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider l-contents__slider02">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <a href="https://pure-growth.co.jp/seminar/pgc2026-6/"
                                target="_blank"
                                rel="noopener noreferrer">
                                    <picture>
                                        <source media="(min-width: 767px)"
                                            srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0626-1.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0626-1.png"
                                            alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 26年9月 -->
        <div class="l-contents__row">
            <div class="l-contents__txt">
                       <h3 class="l-contents__heading">26年9月<br>シリウス様</h3>
                <p class="l-contents__para">
                    <span class="bold">
                        【視察の見どころ】<br>
                        ①2026年オープンの体感ショールーム見学<br>
                        ②社風を体現する朝礼視察<br>
                        ③佐藤代表の県内20年連続No1の戦略<br>
                        <br>
                    </span>
                    <br>
                    岩手県20年連続No1の実績。<br>
                    飯田グループも一条工務店も寄せ付けない無類の強さ、紹介力、高生産性など、地域ビルダーのTOP戦略を余すことなく体感いただけるツアーです。
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider l-contents__slider03">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <a href="https://pure-growth.co.jp/seminar/pgc2026-11/"
                                target="_blank"
                                rel="noopener noreferrer">
                                    <picture>
                                        <source media="(min-width: 767px)"                  
                                            srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0911-1.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0911-1.png"
                                            alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ここまで-->
        </div>
        <!-- 定例 -->
          <div class="l-contents__row">
            <div class="l-contents__txt">
                <h3 class="l-contents__heading">経営計画合宿</h3>
                <p class="l-contents__para">
                    <span class="bold">
                        【主な合宿スケジュール】<br>
                        ･初日作成手法と実践事例共有<br>
                        ･２日目作成タイム＆随時アドバイス<br>
                        ･最終日に参加者全員発表<br>
                    </span>
                    <br>
                    設経営計画書作成を2泊3日で徹底サポート。
                    初作成の会社も､既にある方もオススメの本命企画。<br>
                    2代目・幹部とのペア参加をオススメします。<br>
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0401.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0401.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-contents__row mgn-top-gray">
            <div class="l-contents__txt">
                <h3 class="l-contents__heading">合同勉強会</h3>
                <p class="l-contents__para">
                    視察や経営計画合宿だけでは解決しきれない自社の経営課題について、相談し解決できる「集合勉強会」を年間6回実施しています。<br>
                    1社40分～60分の経営課題を代表の宮内が直接解決いたします。テーマは何でもOKです。<br>
                    <br>
                    「通常は営業支援がメインだが、出店候補について見てほしい」<br>
                    「最近の他社のトレンド、他社の経営者の経営課題やナマの声を聞きたい」<br>
                    <br>
                    1:1ではない、1:Nだから出る化学反応をご体感いただける勉強会です。懇親会も開催します。参加者数が多い時は1泊2日になることもあります。<br>
                    新しいクライアント様同士の交流や、近い価値観の経営者仲間ができる貴重な機会です。<br>
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0601.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0601.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-contents__row mgn-top-gray">
            <div class="l-contents__txt">
                <h3 class="l-contents__heading">年末総会</h3>
                <p class="l-contents__para">
                    全会員と優秀企業が集まる、年に1回のイベント。<br>
                    ビルダー表彰と、業界トレンドを徹底解説。
                </p>
            </div>
            <div class="l-contents__slider-container">
                <div class="swiper-container l-contents__slider">
                    <div class="swiper-wrapper l-contents__list">
                        <div class="swiper-slide l-contents__item">
                            <div class="l-contents__img">
                                <picture>
                                    <source media="(min-width: 767px)"
                                        srcset="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0701.jpg">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pgc/contents-photo0701.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section class="l-fee lower-section">
    <div class="l-fee__inner inner">
        <div class="l-fee__ttl lower-ttl">
            <span class="lower-ttl--en english">Membership Fee</span>
            <h2 class="lower-ttl--ja">会費</h2>
        </div>
        <ul class="l-fee__list">
			<li class="l-fee__item">
				<div class="l-fee__item-heading">入会金</div>
				<div class="l-fee__item-price">30<span>万円</span><span>(税別)</span></div>
			</li>
			<li class="l-fee__item">
				<div class="l-fee__item-heading">月会費</div>
				<div class="l-fee__item-price">10<span>万円</span><span>(税別)</span></div>
			</li>
		</ul>
        <p class="l-fee__para">
    <span class="box">
        <em>会費に含まれるもの</em>
        <span>
            ①勉強会・視察会参加費用<br>
            ②中期経営計画合宿の参加費用・ホテル宿泊費<br>
            ③年末総会の参加費用<br>
            ④集合勉強会の参加費用
        </span>
    </span>
    <br>
    ※新規入会時、1年分一括入金いただける場合は入会金を免除させていただきます。<br>
    ※会員については1年間ごとに自動更新とさせていただきます。<br>
    ※退会時は1か月前までに担当までご連絡下さい。
</p>

    </div>
</section>
-->

<section class="l-ambience lower-section bg-green">
    <div class="l-ambience__inner inner">
        <div class="l-ambience__ttl lower-ttl">
            <span class="lower-ttl--en english">Ambience</span>
            <h2 class="lower-ttl--ja">PGCの雰囲気</h2>
        </div>
        <div class="l-ambience__container">
            <div class="swiper-container l-ambience__slider">
                <div class="swiper-wrapper l-ambience__list">
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider01.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider01.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider02.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider02.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider03.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider03.png"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider04.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider04.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav05.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav05.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider06.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider06.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider07.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider07.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav08.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav08.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="l-ambience__nav">
                    <div class="l-ambience__next l-ambience__next"></div>
                    <div class="l-ambience__prev l-ambience__prev"></div>
                </div>
            </div>
        </div>
        <div class="l-ambience__container">
            <div class="swiper-container l-ambience__nav-slider">
                <div class="swiper-wrapper l-ambience__nav-list">
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider01.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider01.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider02.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider02.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider03.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider03.png"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider04.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider04.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav05.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav05.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider06.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider06.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider07.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider07.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide l-ambience__nav-item">
                        <div class="l-ambience__img">
                            <picture>
                                <source media="(min-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav08.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pgc/ambience-slider-nav08.jpg"
                                    alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="l-grow lower-section lazyload">
    <div class="l-grow__inner inner">
        <div class="l-grow__ttl">Grow Together</div>
        <p class="l-grow__txt">
            ここでしか得られない人脈や<br class="only-sp">
            ノウハウを活かし、<br class="only-sp">
            ともに成長していきましょう！
        </p>
        <div class="l-grow__btn-box btn-box">
            <a href="<?php echo esc_url(home_url('contact/')); ?>" class="btn _orange">詳しい資料を取り寄せる</a>
        </div>
    </div>
</section>

<?php
get_footer();