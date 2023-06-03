<section class="pickup">
        <div class="pickup__inner inner">
            <p class="pickup__title">PickUp<span>ピックアップ</span></p>
            <div class="pickup-slider">
                <ul class="slider">
<?php
$pickup_posts = get_posts( array (
    'post_type' => 'post', //投稿タイプ
    'post_per_page' => '3', // 5件取得
    'tag' => 'pickup', // pickupタグが付いたもの
    'orderby' => 'DESC' // 新しい順に
) );
?>
<?php foreach ( $pickup_posts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <a class="pickup-article" href="<?php echo esc_url( get_permalink() ); ?>">
                            <div class="pickup-article__title"><span><?php the_title(); ?></span></div>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/tax-accountant.jpg" alt=""> -->
                            <?php
                             if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'medium' );
                            } else {
                                echo '<img src="' . esc_url( get_template_directory_uri() ) . '/images/footer-icon.png" alt="">';
                                }
                            ?>
                        </a>
                    </li>
<?php endforeach; wp_reset_postdata(); ?>
                    <!-- <li>
                        <a class="pickup-article" href="#">
                            <div class="pickup-article__title"><span>ここにタイトルが入ります。</span></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tax-accountant.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="pickup-article" href="#">
                            <div class="pickup-article__title"><span>ここにタイトルが入ります。</span></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tax-accountant.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="pickup-article" href="#">
                            <div class="pickup-article__title"><span>ここにタイトルが入ります。</span></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tax-accountant.jpg" alt="">
                        </a>
                    </li> -->
                </ul>
            </div>
            <a href="#" class="pickup__btn inner">ニュース一覧へ</a>
        </div>
    </section>
    <!-- /.pickup -->