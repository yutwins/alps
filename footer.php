<?php
if ( !is_page('contact') ):
?>
    <a href="<?php echo esc_url(home_url( 'contact' )); ?>" class="contact__btn">
        <span>Contact Us</span>
        <img src="<?php echo get_template_directory_uri(); ?>/images/Arrow.png" alt="">
    </a>
<?php 
endif; 
?>

    <footer class="footer">
        <div class="footer__inner">
            <div class="footer-left">
                <a href="<?php echo esc_url(home_url( '/' )); ?>" class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon.png" alt="footer-logo">
                </a>
                <p class="footer-name">ALPS税理士法人</p>
                <a href="https://goo.gl/maps/6c8Y4CycEmwtCPDW8" target="_blank" rel="noopener" class="footer-loc">〒541-0041<br>
                    大阪市中央区北浜３ー２ー２５ 京阪淀屋橋ビル８F</a>
                <p class="footer-text">受付時間 : 平日 9:00～17:00<br>
                    ※お問い合わせフォームからは24時間受け付けております。<br>
                    定休日 : 土日・祝日
                </p>
            </div>
            <div class="footer-right">
                <div class="footer-certification">
                    <p class="footer-certification-text">
                         ALPS税理士法人は、<br>
                        MFクラウド公認メンバー、<br>
                        freee2つ星認定アドバイザーです。
                    </p>
                    <div class="footer-certification-images">
                        <img class="mf-blue" src="<?php echo get_template_directory_uri(); ?>/images/MF公認00(blue).png" alt="mf-blue">
                        <img class="freee-blue" src="<?php echo get_template_directory_uri(); ?>/images/freee認定(blue).png" alt="freee-blue">
                    </div>
                    <ul class="footer-list">
                        <li class="footer-list-item"><a href="<?php echo esc_url(home_url( 'services-price' )); ?>">業務内容</a></li>
                        <li class="footer-list-item"><a href="<?php echo esc_url(home_url( 'services-price' )); ?>#page-price">料金体系</a></li>
                        <li class="footer-list-item"><a href="<?php echo esc_url(home_url( 'company' )); ?>">会社概要</a></li>
                        <!-- <li class="footer-list-item"><a href="<?php echo esc_url(home_url( 'archive' )); ?>">ニュース</a></li> -->
                        <li class="footer-list-item"><a href="<?php echo esc_url(home_url( 'contact' )); ?>">お問い合わせ/Q&A</a></li>
                    </ul>
                    <div class="privacy-policy">
                        <a href="<?php echo esc_url(home_url( 'privacy-policy' )); ?>" class="privacy-policy-text">プライバシーポリシー</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">© 2022 ALPS税理士法人.</p>
    </footer>
    <!-- /.footer -->

    <!-- swiperライブラリ読み込みコード↓ -->
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->

    
    <!-- jQueryライブラリ読み込みコード↓ -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    
    <!-- slickライブラリ読み込みコード -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <!-- slick.min.jsの読み込みコード -->
    <!-- <script src="./js/slick.min.js"></script> -->

    <!-- <script src="/js/script.js"></script> -->

    <?php wp_footer(); ?>
</body>

</html>