<?php get_header(); ?>
<main id="main">
    <div class="mainvisual">
        <h2 class="catch-phrase1">Welcome to MOBILE PLUS</h2>
        <h2 class="catch-phrase2">
            私たちはお客様の目線で寄り添う
            <br>トータルカーアドバイザーです
        </h2>
    </div>
    <section id="about">
        <div class="container">
            <h3 class="section-title">わたしたちについて</h3>
            <h4 class="english-title">ABOUT US</h4>
            <div class="about-text">
                <p>モービルプラスでは「万が一に備えて」または「困った！」の要望を親身になって対応致します。
                    <br>もし、緊急事態がおとずれた際には的確な判断で対応し、
                <p class="spaced-paragraph">駆けつけ要請の場合には、即座に対応・応急処置を施します。</p>
                お客様に安心感を与え、「駆けつけてくれてよかった！」と思っていただける、
                <br>そんな想いを込めて日々業務に取り組んで参ります。</p>
            </div>
            <ul class="about-logo fadein">
                <li class="about-list">
                    <div class="list-title1">親身な対応</div>
                    <picture class="aboutus1_pic">
                        <source srcset="<?php echo esc_url(get_template_directory_uri().'/img/aboutus1.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri().'/img/aboutus1.png'); ?>" alt="親身な対応" class="aboutus1_img">
                    </picture>
                </li>
                <li class="about-list">
                    <div class="list-title1">緊急時の即応力</div>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri().'/img/aboutus2.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri().'/img/aboutus2.png'); ?>" alt="緊急時の即応力">
                    </picture>
                </li>
                <li class="about-list">
                    <div class="list-title1">安心感のご提供</div>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/aboutus3.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/aboutus3.png'); ?>" alt="安心感">
                    </picture>
                </li>
                <li class="about-list">
                    <div class="list-title2">信頼できる<br>アフターサービス</div>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/aboutus4.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/aboutus4.png'); ?>" alt="アフターサービス">
                    </picture>
                </li>
            </ul>
            <div class="business-title">
                <picture class="car_pic">
                    <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/car-logo.webp'); ?>" type="image/webp">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/car-logo.png'); ?>" alt="自動車" class="car-logo">
                </picture>
                <span>事業紹介</span>
            </div>
            <div class="business-intro">
                <div class="business">
                    <h5>整備・点検</h5>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/business1.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/business1.png'); ?>" alt="整備・点検">
                    </picture>
                    <div class="business-btn">
                        <a href="<?php echo esc_url(home_url('/meintenance')); ?>">整備・点検の詳細はこちら</a>
                    </div>
                </div>
                <div class="business">
                    <h5>中古車販売</h5>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/business2.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/business2.png'); ?>" alt="中古車販売">
                    </picture>
                    <div class="business-btn">
                        <a href="https://www.goo-net.com/usedcar_shop/0804261/stock.html" target="_blank" rel="noopener">
                            中古車販売の詳細はこちら
                        </a>
                    </div>
                </div>
            </div>
            <div class="number-title">適格請求書発行事業者登録番号を取得</div>
            <div class="number-text">
                インボイス制度の運用開始にあわせ、請求書に登録番号を表示いたします。
                <br>適格請求書発行事業者については、国税庁のサイトからもご確認いただけます。
            </div>
            <div class="number">適格請求書発行事業者登録番号：　T9810438829471</div>
        </div>
    </section>
    <section id="service">
        <div class="container">
            <h3 class="section-title">各種サービス</h3>
            <h4 class="english-title">SERVICE</h4>
            <ul class="service-list delayscroll">
                <li class="icon floatUp">
                    <p class="icon-title">自動車修理</p>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/service1.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/service1.png'); ?>" alt="自動車修理">
                    </picture>
                </li>
                <li class="icon floatUp">
                    <p class="icon-title">12カ月点検</p>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/service2.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/service2.png'); ?>" alt="12カ月点検">
                    </picture>
                </li>
                <li class="icon floatUp">
                    <p class="icon-title">バッテリー交換</p>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/service3.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/service3.png'); ?>" alt="バッテリー交換">
                    </picture>
                </li>
                <li class="icon floatUp">
                    <p class="icon-title">電装品<br>取り付け</p>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/service4.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/service4.png'); ?>" alt="電装品取り付け">
                    </picture>
                </li>
                <li class="icon floatUp">
                    <p class="icon-title">コーティング</p>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/service5.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/service5.png'); ?>" alt="コーティング">
                    </picture>
                </li>
                <li class="icon floatUp">
                    <p class="icon-title">自動車保険</p>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/service6.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/service6.png'); ?>" alt="自動車保険">
                    </picture>
            </ul>
        </div>
        <div class="service-sub">
            <div class="sub-title">
                モービルプラスのサービスはココがすごい！
            </div>
            <div class="service-item fadein">
                <div class="inner">
                    <div class="number-name">
                        <div class="sub-number">01</div>
                        <div class="service-name">重整備対応</div>
                    </div>
                    <div class="subservice-text">
                        <p>エンジンのオーバーホールなどの重整備も対応しております。</p>
                        <a href="<?php echo site_url('/meintenance/#meintenance1'); ?>" class="bgleft"><span>詳細はこちら</span></a>
                    </div>
                    <picture class="slide_pic">
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/engine.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/engine.jpg'); ?>" alt="エンジン" class="slide-img">
                    </picture>
                </div>
            </div>
            <div class="service-item fadein">
                <div class="inner">
                    <div class="number-name">
                        <div class="sub-number">02</div>
                        <div class="service-name">テスター完備</div>
                    </div>
                    <div class="subservice-text">
                        <p>各メーカー対応テスター完備で安心のアフターサポート</p>
                        <a href="<?php echo site_url('/meintenance/#meintenance2'); ?>" class="bgleft"><span>詳細はこちら</span></a>
                    </div>
                    <picture class="slide_pic">
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/tester.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/tester.jpg'); ?>" alt="テスター" class="slide-img">
                    </picture>
                </div>
            </div>
            <div class="service-item fadein">
                <div class="inner">
                    <div class="number-name">
                        <div class="sub-number">03</div>
                        <div class="service-name">積載車保有</div>
                    </div>
                    <div class="subservice-text">
                        <p>フルフラット車載部搭載の積載車を保有</p>
                        <a href="<?php echo site_url('/meintenance/#meintenance3'); ?>" class="bgleft"><span>詳細はこちら</span></a>
                    </div>
                    <picture class="slide_pic">
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/transporter.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/transporter.jpg'); ?>" alt="積載車" class="slide-img">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="various">
        <div class="container">
            <h3 class="section-title">各種取り扱い</h3>
            <h4 class="english-title">Various handling</h4>
            <div class="various-text">
                モービルプラスでは各種メーカーを取り扱いすることにより、
                <br>普段のメンテナンスから万が一の事故等の際にも安心してお任せいただけます。
            </div>
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/various.webp'); ?>" type="image/webp">
                <img loading="lazy" class="various-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/various.png'); ?>" alt="取り扱いメーカー">
            </picture>
        </div>
    </section>
    <section id="export">
        <div class="container">
            <h3 class="section-title">輸出事業</h3>
            <h4 class="english-title">EXPORT BUSINESS</h4>
            <div class="export-contain">
                <picture class="export_pic">
                    <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/export.webp'); ?>" type="image/webp">
                    <img loading="lazy" class="export_img" src="<?php echo esc_url(get_template_directory_uri() . '/img/export.jpg'); ?>" alt="輸出事業">
                </picture>
                <div class="export-text">
                    <p class="spaced-paragraph">モービルプラスは、国内での車両販売および車両整備をメインとして、
                        海外に中古自動車を販売している輸出企業様向けのコンディションチェック、
                        メンテナンスなど商品化作業のサポートを提供いたします。</p>
                    車両整備、輸出、陸送などでお困りの際はお気軽にお問い合わせください。
                </div>
            </div>
        </div>
    </section>
    <section id="used">
        <div class="container">
            <h3 class="section-title">中古車販売</h3>
            <h4 class="english-title">USED CAR SALE</h4>
            <a href="https://www.goo-net.com/usedcar_shop/0804261/stock.html" target="_blank" rel="noopener">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/usedcar-logo.webp'); ?>" type="image/webp">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/usedcar-logo.png'); ?>" alt="中古車販売" class="used-img">
                </picture>
            </a>
            <div class="announce">モービルプラス販売中古車情報はこちらからお願いいたします。</div>
        </div>
    </section>
    <section id="sdgs">
        <div class="container fadein">
            <h3 class="section-title">モービルプラスSDGs宣言</h3>
            <h4 class="english-title">Declaration for SDGs</h4>
            <div class="sdgs-text">
                <div class="sdgs_bg"></div>
                <p class="spaced-paragraph">リサイクル部品を使って修理をすることで、製造、流通の際に排出されるCO2を抑えることができます。</p>
                多くの人に自動車リサイクル部品を利用してもらうための情報発信を行い、
                <br>廃棄物の抑制やCO2削減に貢献します。
                <br>九州の玄関口である北九州市を未来の方たちへ引き継いでいきます。
            </div>
        </div>
    </section>
    <section id="access">
        <div class="container">
            <h3 class="section-title">アクセス</h3>
            <h4 class="english-title">ACCESS</h4>
            <div class="address-container">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4683.9545366292305!2d130.97654411292044!3d33.888211168788324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543959595754375%3A0xcf2fe382b6c7441b!2z44Oi44O844OT44Or44OX44Op44K5!5e0!3m2!1sja!2sjp!4v1722150287651!5m2!1sja!2sjp"
                        width="480" height="450"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="address">
                    <div class="company">
                        <span>モービルプラス</span>
                        <br>〒800-0102
                        <br>福岡県北九州市門司区猿喰1179-1
                    </div>
                    <br>Tel：093-481-8000
                    <br>Fax：093-481-7700
                    <br>Email：mobile-plus@if-n.ne.jp
                    <br>適格請求書発行事業者登録番号：T9810438829471
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>