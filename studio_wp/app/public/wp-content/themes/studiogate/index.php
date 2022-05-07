<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="スタジオゲートは配信を始める前から徹底したサポートによって不安なくライバーが配信を始められる環境を作っています。">
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/asset/img/ogp.jpg">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/asset/img/ogp.jpg">
  <meta property="og:title" content="ライブ配信ならスタジオゲート">
  <meta property="og:site_name" content="スタジオゲート - 公式ホームページ">
  <meta property="og:description" content="スタジオゲートは配信を始める前から徹底したサポートによって不安なくライバーが配信を始められる環境を作っています。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://studio-gate.tokyo">
  <title>ライブ配信ならスタジオゲート</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
  <link
	rel="stylesheet"
	type="text/css"
	href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
  />
  <link
	rel="stylesheet"
	type="text/css"
	href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
  />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/asset/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<header class="l-header u-pc">
		<h1><a href="/"><img src="<?php echo get_template_directory_uri() ?>/asset/img/logo_01.png" width="399" height="44" alt="STUDIO GATE" class="p-header__logo"></a></h1>
		<nav class="p-header__nav">
			<ul class="p-header__list">
				<li class="p-header__item"><a href="#livers">Livers</a></li>
				<li class="p-header__item"><a href="#about">About</a></li>
				<li class="p-header__item"><a href="#sponser">Sponser</a></li>
				<li class="p-header__item"><a href="#service">Service</a></li>
				<li class="p-header__item"><a href="#voice">Voice</a></li>
				<li class="p-header__item"><a href="#contact">Contact</a></li>
				<li class="p-header__item"><a href="#company">Company</a></li>
			</ul>
		</nav>
	</header>

	<div class="ham_menu active" id="ham_menu">
		<div class="line top_line"></div>
		<div class="line middle_line1"></div>
		<div class="line middle_line2"></div>
		<div class="line under_line"></div>
	</div>
	<div class="mask" id="mask"></div>
	<header class="u-sp active" id="header">
		<nav>
			<ul>
				<li><a href="#livers">Livers</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#sponser">Sponser</a></li>
				<li><a href="#service">Service</a></li>
				<li><a href="#voice">Voice</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#company">Company</a></li>
			</ul>
		</nav>
	</header>

	<main class="l-content">
		<div class="p-kv">
			<div class="slider slider1">
				<?php
					$args = array(
						'post_type' => 'kv_left'
					);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()):
				?>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<div><img src="<?php echo CFS()->get('kv_left_img') ?>" alt="<?php the_title(); ?>" /></div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
			</div>
			<div class="center">
				<img src="<?php echo get_template_directory_uri() ?>/asset/img/kv_pc.png" width="2000" height="1160" alt="業界サポートNo. 1 ライブ配信するなら スタジオゲート 映像、舞台、広告、CM案件ももらえる！" class="u-pc">
				<img src="<?php echo get_template_directory_uri() ?>/asset/img/kv_sp.png" width="1100" height="691" alt="業界サポートNo. 1 ライブ配信するなら スタジオゲート 映像、舞台、広告、CM案件ももらえる！" class="u-sp">
				<p class="p-kv__text">
					業界サポートNo. 1<br>
					ライブ配信するなら<br>
					<span class="p-kv__text--l">スタジオゲート</span><br>
					<span class="p-kv__text--s">映像、舞台、広告、CM案件ももらえる！</span>
				</p>
			</div>
			<div class="slider slider2" dir="rtl">
			<?php
					$args = array(
						'post_type' => 'kv_right'
					);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()):
				?>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<div><img src="<?php echo CFS()->get('kv_right_img') ?>" alt="<?php the_title(); ?>" /></div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</div>

		<section id="livers" class="l-content__section">
			<h2 class="c-heading">Livers</h2>
			<div class="l-content__bg--black" id="characters">
				<?php
					$args = array(
						'post_type' => 'livers'
					);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()):
				?>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<div class="c-card__4col">
					<img src="<?php echo CFS()->get('livers_image') ?>" alt="<?php the_title(); ?>">
					<p class="c-card__category"><?php echo CFS()->get('livers_work') ?></p>
					<p class="c-card__name"><?php echo CFS()->get('livers_name') ?></p>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</section>

		<section id="about" class="l-content__section">
			<h2 class="c-heading">About</h2>
			<div class="p-about__area__wrap">
				<div class="p-about__area">
					<div class="p-about__area__inner">
					<?php
					$args = array(
						'post_type' => 'about'
					);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()):
				?>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
						<section class="p-about__detail">
							<div class="p-about__textarea">
								<div>
									<h3 class="p-about__ttl"><?php echo CFS()->get('about_title') ?></h3>
									<p class="p-about__txt"><?php echo CFS()->get('about_text') ?></p>
								</div>
							</div>
							<div class="p-about__img">
								<img src="<?php echo CFS()->get('about_img') ?>" alt="<?php the_title(); ?>">
							</div>
						</section>
						<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<section id="sponser" class="l-content__section">
			<h2 class="c-heading">Sponser</h2>
			<img src="<?php echo get_template_directory_uri() ?>/asset/img/img_03.png" width="1999" height="1007" alt="Beauty Japan スタジオゲートは”beauty Japan”の公式スポンサーです。" class="p-sponser__img">
		</section>

		<section id="service" class="l-content__section">
			<h2 class="c-heading">Service</h2>
			<div class="p-service__area">
				<div class="p-service__box">
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_01.png" width="157" height="157" alt="配信以外にCM案件も取れる!!" class="p-service__icon">
							<h3 class="p-service__ttl">配信以外に<br>CM案件も取れる!!</h3>
						</div>
						<p class="p-service__txt">映画やCM案件を持っている<br>
							製作会社と業務提携!!超本格的な<br>
							機材でCM出演もサポート!!</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_02.png" width="157" height="157" alt="ライブ中もサポート" class="p-service__icon">
							<h3 class="p-service__ttl">ライブ中もサポート</h3>
						</div>
						<p class="p-service__txt">ライブ中にもコメントやギフトで<br>
							徹底的にサポート!<br>
							トップライバーとのコラボも充実!</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_03.png" width="157" height="157" alt="法律税務相談サポート" class="p-service__icon">
							<h3 class="p-service__ttl">法律税務相談<br>サポート</h3>
						</div>
						<p class="p-service__txt">弊社顧問弁護士や税理士による<br>
							相談サポート付きです。</p>
					</section>
				</div>
				<div class="p-service__box">
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_04.png" width="157" height="157" alt="配信以外にCM案件も取れる!!" class="p-service__icon">
							<h3 class="p-service__ttl">充実したサポート</h3>
						</div>
						<p class="p-service__txt">月に数回オンラインや対面で<br>
						どうすればフォロワーが増えるか<br>
						コンサルを行っています。</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_05.png" width="157" height="157" alt="ライブ中もサポート" class="p-service__icon">
							<h3 class="p-service__ttl">専属マネージャー付き</h3>
						</div>
						<p class="p-service__txt">配信に専念できるように<br>
							専属のマネージャーがつきます。</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_06.png" width="157" height="157" alt="法律税務相談サポート" class="p-service__icon">
							<h3 class="p-service__ttl">スタジオ<br>無料貸し出し</h3>
						</div>
						<p class="p-service__txt">スタジオも無料で貸し出します。<br>
						実家に住んでる方もやりやすい !<br>しかも場所は渋谷のど真ん中 !</p>
					</section>
				</div>
				<div class="p-service__box">
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_07.png" width="157" height="157" alt="無料講義" class="p-service__icon">
							<h3 class="p-service__ttl">無料講義</h3>
						</div>
						<p class="p-service__txt">実際のトップライバーが<br>
							「どうすればもっと稼げるのか」<br>
							を定期的に配信します。</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_08.png" width="157" height="157" alt="ライバー同士の交流会" class="p-service__icon">
							<h3 class="p-service__ttl">ライバー同士の交流会</h3>
						</div>
						<p class="p-service__txt">ライバー同士の交流会も定期的に<br>
							行っています。その場でライブ配信も<br>
							出来てフォロワーの獲得のチャンス !</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_09.png" width="157" height="157" alt="カウンセリング" class="p-service__icon">
							<h3 class="p-service__ttl">カウンセリング</h3>
						</div>
						<p class="p-service__txt">何を話して良いかわからないなどの<br>
							お悩みは24時間いつでも相談できる<br>
							体勢をとっています。</p>
					</section>
				</div>
			</div>
		</section>

		<section id="voice" class="l-content__section">
			<h2 class="c-heading">Voice</h2>
			<div class="p-voice__cnt">
				<div class="p-voice__wrap">
					<?php
						$args = array(
							'post_type' => 'voice'
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
					?>
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<div class="p-voice__area">
						<div class="p-voice__img__wrap">
							<img src="<?php echo CFS()->get('voice_img') ?>" alt="<?php the_title(); ?>" class="p-voice__img">
						</div>
						<div class="p-voice__detail">
							<div>
								<p class="p-voice__name"><?php echo CFS()->get('voice_name') ?></p>
								<p class="p-voice__ttl"><?php echo CFS()->get('voice_title') ?></p>
								<p class="p-voice__txt"><?php echo CFS()->get('voice_text') ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section id="contact" class="l-content__section">
			<h2 class="c-heading">Contact</h2>
			<div class="p-contact">
				<section class="p-contact__client">
					<h3 class="p-contact__client__ttl">For Client</h3>
					<p class="c-text">企業様のお問い合わせはこちらへ</p>
					<div class="c-text">
						<?php echo do_shortcode('[contact-form-7 id="80" title="Contact form 1"]')?>
					</div>
				</section>
				<section class="p-contact__liver">
					<h3 class="p-contact__liver__ttl">For Liver</h3>
					<p class="c-text">ライバーのお仕事に興味がある人はこちらへ</p>
					<div class="p-contact__btn__area">
						<img src="<?php echo get_template_directory_uri() ?>/asset/img/arrow_01.png" width="497" height="301" alt="矢印" class="p-contact__arrow">
						<a href="https://lin.ee/J2TDM7S" target="_blank" class="p-contact__liver__link">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/btn_01.png" width="320" height="455" alt="LINEで応募する" class="p-contact__btn">
						</a>
					</div>
				</section>
			</div>
		</section>

		<section id="company" class="l-content__section">
			<h2 class="c-heading">Company</h2>
			<div class="p-company__content">
				<div class="p-company__detail">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/logo_01.png" width="399" height="44" alt="STUDIO GATE" class="p-company__logo">
					<p class="p-company__ttl">会社概要</p>
					<p class="c-text">合同会社スタジオゲート</p>
					<?php
						$args = array(
							'post_type' => 'company',
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
					?>
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<p class="c-text"><?php echo CFS()->get('company_text') ?></p>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
				<div class="p-company__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.487767883481!2d139.70025811480286!3d35.664989938470804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca60a68b265%3A0xe7d14091d18be5a3!2z44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yW5LiB55uu77yS77yT4oiS77yU!5e0!3m2!1sja!2sjp!4v1650536996627!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>
	</main>
	<footer class="l-footer">
		<p>All rights reserved  by studio gate</p>
	</footer>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/asset/js/smoothscroll.js"></script>
</body>
</html>