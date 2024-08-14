<footer id="footer">
    <div class="footer-container">
        <ul class="footer-menu">
            <li><a href="<?php echo esc_url(home_url('/#about')); ?>">わたしたちについて</a></li>
            <li><a href="<?php echo esc_url(home_url('/#service')); ?>">各種サービス</a></li>
            <li><a href="<?php echo esc_url(home_url('/meintenance/')); ?>">整備・点検</a></li>
            <li><a href="<?php echo esc_url(home_url('/#various')); ?>">各種取り扱い</a></li>
            <li><a href="<?php echo esc_url(home_url('/#export')); ?>">輸出事業</a></li>
            <li><a href="<?php echo esc_url(home_url('/#used')); ?>">中古車販売</a></li>
            <li><a href="<?php echo esc_url(home_url('/#sdgs')); ?>">モービルプラスSDGs宣言</a></li>
            <li><a href="<?php echo esc_url(home_url('/#access')); ?>">アクセス</a></li>
        </ul>
        <a href="index.html" class="footer-logo">
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri().'/img/full-logo.webp'); ?>" type="image/webp">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri().'/img/full-logo.png'); ?>" alt="北九州の自動車整備工場">
            </picture>
        </a>
    </div>
    <div class="copy-light">© 2024 MOBIL PLUS</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>