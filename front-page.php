<?php get_header(); ?>    

<section class="top">
	<!-- Slider main container -->
	<div class="swiper">
		<video class="alps-video pc-only" src="<?php echo get_template_directory_uri(); ?>/images/top-movie.mp4" loop autoplay muted playsinline></video>
		<video class="alps-video sp-only" src="<?php echo get_template_directory_uri(); ?>/images/top_video_sp.mp4" loop autoplay muted playsinline></video>
		<div class="top-message">
			<p class="top-message-text">あなたと一緒に<br><span></span>成長していく事務所へ</p>
		</div>
	</div>
</section>
<!-- /.top -->


<!-- <section class="pickup">
<?php
// get_template_part('template-parts/pickup'); 
?> 
</section> -->
<!-- /.pickup -->

<section class="about">
	<div class="about__inner inner">
		<div class="about-right">
			<div class="section__title about__title">
				<h2 class="section-en__title about-en__title">About</h2>
				<p class="section__subtitle about__subtitle">ALPS税理士法人について</p>
			</div>
			<div class="about-text">中小企業の皆様にとって、会社のお金は経営者個人のお金そのものです。<br>
				弊社は、会計税務のプロフェッショナルとして、経営者にとって避けては通れない税金問題を一緒に取り組み、解決していきます。<br>
				<br>
				専門的なスキルは当然のことながら、何より、皆様とのコミュニケーションを大事にし、とことん親身に寄り添い、サポートする。<br>
				そんな税理士であり続けたい、と考えております。<br>
				<br>
				あなたと一緒に成長してく事務所へ。<br>
				事業の成長を通して、次のステージに、一緒に進んで行きましょう。</div>
		</div>
		<div class="about-left">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_image.jpg" alt="about-test" oncontextmenu="return false;">
			</figure>
		</div>
	</div>
</section>
<!-- /.about -->

<section class="feature">
	<div class="feature__inner inner">
		<div class="section__title feature__title">
			<h2 class="section-en__title feature-en__title">Feature</h2>
			<p class="section__subtitle feature__subtitle">3つの特徴</p>
		</div>
		<div class="feature-items">
			<div class="feature-item feature-item01">
				<div class="feature-item-number">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Number01.png" alt="number01">
				</div>
				<p class="feature-item-head">クラウド会計に柔軟に対応</p>
				<p class="feature-item-text">マネーフォワードやfreeeといった、クラウド会計のサポートを強みとしていることから、近年増加しているリモートワークやテレワークを推進する企業に対しても手厚いサポートが可能です。<br>
					クラウド会計を用いることで、バックオフィス業務の効率化や、経理面での工数削減の効果が期待できます。</p>
			</div>
			<div class="feature-item feature-item02">
				<div class="feature-item-number">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Number02.png" alt="number02">
				</div>
				<p class="feature-item-head">税理士による直接サポート</p>
				<p class="feature-item-text">中小の税理士事務所によくある、営業担当が税理士資格を持っていない、そんな不安は一切ありません。<br>
					幣社は4大税理士法人出身の税理士2人が直接サポートします。<br>
					平均年齢が60歳代といわれる税理士業界のなかで、若手の経営者と同じ目線に立ち、柔軟かつ迅速な対応が可能です。</p>
			</div>
			<div class="feature-item feature-item03">
				<div class="feature-item-number">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Number03.png" alt="number03">
				</div>
				<p class="feature-item-head">スタートアップ企業に対する<br>
					実績も豊富</p>
				<p class="feature-item-text">スタートアップ企業に対する実績も豊富で、事業・組織の拡大を見据えた、中長期的なお付き合いが可能です。<br>
					コミュニケーションを大切にすることで、会計税務の悩みを速やかに解消します。
					また、他士業との関係性も厚く、ワンストップでサービスを提供できます。</p>
			</div>
		</div>
	</div>
</section>
<!-- /.feature -->

<section class="s-p">   
	<div class="s-q__inner inner">
		<div class="service">
			<div class="section__title service__title">
				<h2 class="section-en__title service-en__title">Our Services</h2>
				<p class="section__subtitle service__subtitle">業務内容</p>
			</div>
			<a href="<?php echo esc_url(home_url( 'services-price' )); ?>" class="service__btn">
				<div class="service__btn-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service-content-img-test.png" alt=""></div>
				<p class="service__btn-text">会計・税務顧問、個人確定申告、開業支援、相続・事業承継などのサービス概要をご確認いただけます。</p>
				<figure class="service__btn-arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow01.png" alt="arrow"></figure>
			</a>
		</div>
		<div class="price">
			<div class="section__title price__title">
				<h2 class="section-en__title price-en__title">Price</h2>
				<p class="section__subtitle price__subtitle">料金体系</p>
			</div>
			<a href="<?php echo esc_url(home_url( 'services-price' )) ?>#page-price" class="price__btn">
				<div class="price__btn-img"><img src="<?php echo get_template_directory_uri(); ?>/images/price-img-test.png" alt=""></div>
				<p class="price__btn-text">個人事業、法人のお客様の顧問料や決算料などを<br>ご確認いただけます。</p>
				<figure class="price__btn-arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow01.png" alt="arrow"></figure>
			</a>
		</div>
	</div>
</section>
<!-- /.s-p -->

<section class="staff">
	<div class="staff__inner inner">
		<div class="section__title staff__title">
			<h2 class="section-en__title staff-en__title">Staff</h2>
			<p class="section__subtitle staff_subtitle">スタッフ</p>
		</div>
		<div class="staff-items">
			<div class="staff-item staff-item01">
				<div class="staff-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Akigawa-img.png" alt="Akigawa" oncontextmenu="return false;">
				</div>
				<div class="staff-item-text">
					<p class="staff-position">ALPS税理士法人 代表</p>
					<p class="staff-name">秋川　哲朗<span>Tetsuroh Akigawa</span></p>
					<table class="staff-table">
						<tr>
							<td>2017年~19年</td>
							<td>KPMG税理士法人　大阪事務所　所属</td>
						</tr>
						<tr>
							<td>2019年~20年</td>
							<td>飲食専門のコンサル会社　所属</td>
						</tr>
						<tr>
							<td>2021年</td>
							<td>秋川哲朗税理士事務所　開業</td>
						</tr>
						<tr>
							<td>2022年</td>
							<td>ALPS税理士法人設立</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="staff-item staff-item02">
				<div class="staff-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Nakajima-img.png" alt="Nakajima" oncontextmenu="return false;">
				</div>
				<div class="staff-item-text">
					<p class="staff-position">ALPS税理士法人 副代表</p>
					<p class="staff-name">中島　右稀<span>Yuki Nakajima</span></p>
					<table class="staff-table">
						<tr>
							<td>2019年~21年</td>
							<td>デロイトトーマツ税理士法人　大阪事務所　所属</td>
						</tr>
						<tr>
							<td>2022年</td>
							<td>不動産会社を事業承継</td>
						</tr>
						<tr>
							<td></td>
							<td>ALPS税理士法人設立</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<a href="<?php echo esc_url(home_url( 'company' )) ?>#page-staff" class="staff__btn">view more</a>
	</div>
</section>
<!-- /.staff -->
<?php get_footer(); ?>

