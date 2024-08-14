<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>MOBIL PLUS</title>
    <meta name="description" content="自動車修理・整備のことならモービルプラスへ！">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <div class="header-container">
            <h1 class="site-title">
                <a class="site-logo" href="<?php echo esc_url(home_url()); ?>">
                    <picture class="header_pic">
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/header-logo.webp'); ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/header-logo'); ?>"
                            alt="モービルプラスロゴ" class="header-logo">
                    </picture>
                </a>
            </h1>
            <div class="header-menu">
                <div class="usedcar-top">
                    <a href="https://www.goo-net.com/usedcar_shop/0804261/stock.html" target="_blank">
                        中古車販売はこちら
                    </a>
                </div>
                <nav id="navi">
                    <ul class="nav-menu">
                        <li><a href="<?php echo esc_url(home_url('/#about')); ?>">わたしたちについて</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#service')); ?>">各種サービス</a></li>
                        <li><a href="<?php echo esc_url(home_url('/meintenance')); ?>">整備・点検</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#various')); ?>">各種取り扱い</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#export')); ?>">輸出事業</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#used')); ?>">中古車販売</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#sdgs')); ?>">モービルプラスSDGs宣言</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#access')); ?>">アクセス</a></li>
                    </ul>
                </nav>
                <div class="toggle_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="mask"></div>
            </div>
        </div>
    </header>