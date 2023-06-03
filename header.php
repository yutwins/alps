<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ALPS税理士法人</title>
		<link rel="icon" type="image/png" href="/images/ALPS-icon04.png">

		<!-- swiper読み込みコード -->
		<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

		<!-- google fonts読み込みコード -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			  href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Noto+Sans+JP:wght@300;400;500&display=swap"
			  rel="stylesheet">

		<!-- slickの読み込み -->
		<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="/scss/styles.scss">
<link rel="stylesheet" href="/css/styles.css"> -->

		<script src="https://sdk.form.run/js/v2/formrun.js"></script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="header">
			<div class="header__inner">
				<a href="<?php echo esc_url(home_url( '/' )); ?>" class="header-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="header-logo">
				</a>
				<ul class="header-list">
					<li class="header-list-item"><a href="<?php echo esc_url(home_url( 'services-price' )); ?>">業務内容</a></li>
					<li class="header-list-item"><a href="<?php echo esc_url(home_url( 'services-price' )); ?>#page-price">料金体系</a></li>
					<li class="header-list-item"><a href="<?php echo esc_url(home_url( 'company' )); ?>">会社概要</a></li>
					<!-- <li class="header-list-item"><a href="<?php echo esc_url(home_url( 'archive' )); ?>">ニュース</a></li> -->
					<li class="header-list-item"><a href="<?php echo esc_url(home_url( 'contact' )); ?>">お問い合わせ/Q&A</a></li>
				</ul>
			</div>
		</header>
		<!-- /.header -->


		<div class="drawer-icon">
			<div class="drawer__bars">
				<div class="drawer-bar01"></div>
				<div class="drawer-bar02"></div>
				<div class="drawer-bar03"></div>
			</div>
		</div>

		<div class="drawer-content">
			<div class="drawer-content-items">
				<div class="drawer-content-logo"><a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="logo"></a></div>
				<div class="drawer-content-item"><a href="<?php echo esc_url(home_url( 'services-price' )); ?>">業務内容</a></div>
				<div class="drawer-content-item"><a href="<?php echo esc_url(home_url( 'services-price' )); ?>#page-price">料金体系</a></div>
				<div class="drawer-content-item"><a href="<?php echo esc_url(home_url( 'company' )); ?>">会社概要</a></div>
				<!-- <div class="drawer-content-item"><a href="<?php echo esc_url(home_url( 'archive' )); ?>">ニュース</a></div> -->
				<div class="drawer-content-item"><a href="<?php echo esc_url(home_url( 'contact' )); ?>">お問い合わせ/Q&A</a></div>
			</div>
		</div>

		<div class="drawer-background"></div>
		<!-- /.drawer -->

		<?php 
		if( ! is_front_page() ) :
		$page = get_post(get_the_ID());
		$slug = $page->post_name;
		?>
		<section class="page-top">
			<div class="page-top__inner">
				<figure class="page-top-bg">
					<?php echo get_main_image(); ?>
				</figure>
				<div class="page-top-title">
					<p class="page-top-head"><?php echo rawurldecode($slug); ?></p>
					<p class="page-top-subhead"><?php echo get_the_title(); ?></p>
				</div>
			</div>
			<div class="page-top-nav">
				<?php 
				if(function_exists('bcn_display'))
				{
					bcn_display();
				}
				?>
			</div>
		</section>
		<!-- /.page-top -->
		<?php endif; ?>


