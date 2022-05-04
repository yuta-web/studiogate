<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="スタジオゲートは配信を始める前から徹底したサポートによって不安なくライバーが配信を始められる環境を作っています。">
  <meta property="og:image" content="https://studio-gate.tokyo/<?php echo get_template_directory_uri() ?>/asset/img/ogp.jpg">
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
	<?php wp_head(); ?>
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
				$cfs_slick_grp = CFS()->get('kv_group');
				if( !empty( $cfs_slick_grp ) ) {
					foreach( $cfs_slick_grp as $cfs_slick ) {
						$cfs_slick_img_id = $cfs_slick['kv_img'];
						$cfs_slick_img_url = wp_get_attachment_url( $cfs_slick_img_id );
						$cfs_slick_img_alt = get_post_meta( $cfs_slick_img_id, '_wp_attachment_image_alt', true );
						$output_cfs_slick .= '<div><img src="'.$cfs_slick_img_url.'" alt="'.$cfs_slick_img_alt.'"><div>';
					}
				}
			?>
			<?php echo $output_cfs_slick; ?>
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
				<div><img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_01.png" alt="" /></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_02.png" alt="" /></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_03.png" alt="" /></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_04.png" alt="" /></div>
			</div>
		</div>

		<section id="livers" class="l-content__section">
			<h2 class="c-heading">Livers</h2>
			<div class="l-content__bg--black" id="characters">
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_01.png" width="369" height="347" alt="NMB48　肥川彩愛">
					<p class="c-card__category">タレント</p>
					<p class="c-card__name">NMB48　肥川彩愛</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_02.png" width="370" height="347" alt="こっぺ">
					<p class="c-card__category">ライバー</p>
					<p class="c-card__name">こっぺ</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_03.png" width="383" height="345" alt="ゆうこりん">
					<p class="c-card__category">ライバー</p>
					<p class="c-card__name">ゆうこりん</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_04.png" width="369" height="345" alt="やぐちみき">
					<p class="c-card__category">タレント</p>
					<p class="c-card__name">やぐちみき</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_05.png" width="370" height="350" alt="水野愛日">
					<p class="c-card__category">声優</p>
					<p class="c-card__name">水野愛日</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_06.png" width="375" height="349" alt="なおち">
					<p class="c-card__category">ライバー</p>
					<p class="c-card__name">なおち</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_07.png" width="371" height="349" alt="山口さやか">
					<p class="c-card__category">歌手</p>
					<p class="c-card__name">山口さやか</p>
				</div>
				<div class="c-card__4col">
					<img src="<?php echo get_template_directory_uri() ?>/asset/img/livers_08.png" width="371" height="348" alt="あーみん">
					<p class="c-card__category">女子プロレスラー</p>
					<p class="c-card__name">あーみん</p>
				</div>
			</div>
		</section>

		<section id="about" class="l-content__section">
			<h2 class="c-heading">About</h2>
			<div class="p-about__area__wrap">
				<div class="p-about__area">
					<div class="p-about__area__inner">
						<section class="p-about__detail">
							<div class="p-about__textarea">
								<div>
									<h3 class="p-about__ttl">About us</h3>
									<p class="p-about__txt">私たちはライブ配信の芸能事務所です。<br>
										イチナナやBIGO LIVEなどで活躍できるライバーを育てるだけでなく、<br>
										ライブコマースや映像、CM、舞台でも活躍できる人材の育成を行っております。</p>
								</div>
							</div>
							<div class="p-about__img p-about__img-01">
								<img src="<?php echo get_template_directory_uri() ?>/asset/img/img_01.png" width="552" height="743" alt="About us">
							</div>
						</section>
						<section class="p-about__detail reverse">
							<div class="p-about__textarea">
								<div>
									<h3 class="p-about__ttl">ライバーサポートNo. 1へ</h3>
									<p class="p-about__txt">
										私たちはライバーのサポート力業界No. 1を目指しています。<br>
										ライブ配信の事務所に入ったけどサポートが全くなかったというのはよく聞く話です。<br>
										スタジオゲートは配信を始める前から徹底したサポートによって不安なくライバー配信が始められる環境を作っています。</p>
								</div>
							</div>
							<div class="p-about__img p-about__img-02">
								<img src="<?php echo get_template_directory_uri() ?>/asset/img/img_02.png" width="558" height="752" alt="ライバーサポートNo.1へ">
							</div>
						</section>
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
							<h3 class="p-service__ttl">配信以外に<br>CM案件も取れる!!</h3>
						</div>
						<p class="p-service__txt">映画やCM案件を持っている<br>
							製作会社と業務提携!!超本格的な<br>
							機材でCM出演もサポート!!</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_05.png" width="157" height="157" alt="ライブ中もサポート" class="p-service__icon">
							<h3 class="p-service__ttl">ライブ中もサポート</h3>
						</div>
						<p class="p-service__txt">ライブ中にもコメントやギフトで<br>
							徹底的にサポート!<br>
							トップライバーとのコラボも充実!</p>
					</section>
					<section class="p-service__detail">
						<div class="p-service__ttl__area">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/icon_06.png" width="157" height="157" alt="法律税務相談サポート" class="p-service__icon">
							<h3 class="p-service__ttl">法律税務相談<br>サポート</h3>
						</div>
						<p class="p-service__txt">弊社顧問弁護士や税理士による<br>
							相談サポート付きです。</p>
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
					<div class="p-voice__area">
						<div class="p-voice__img__wrap">
							<img src="<?php echo get_template_directory_uri() ?>/asset/img/img_04.png" width="563" height="751" alt="所属ライバー　肥川彩愛" class="p-voice__img">
						</div>
						<div class="p-voice__detail">
							<div>
								<p class="p-voice__name">所属ライバー　肥川彩愛</p>
								<p class="p-voice__ttl">スタジオゲートでよかった！</p>
								<p class="p-voice__txt">最初は配信が不安で何を話せば良いかわからなかったのですが、<br>
									最初は一緒に配信をしてくれるので全然困りませんでした !<br>
									ファン同士を紹介してくれるのですぐにファンがつきました !</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

		<section id="contact" class="l-content__section">
			<h2 class="c-heading">Contact</h2>
			<div class="p-contact">
				<section class="p-contact__client">
					<h3 class="p-contact__client__ttl">For Client</h3>
					<p class="c-text">企業様のお問い合わせはこちらへ</p>
					<form action="confirm.php" method="post" class="c-text">
						<label for="yourname">名前</label>
						<input id="yourname" type="text" name="yourname">
						<label for="companyname">会社名</label>
						<input id="companyname" type="text" name="companyname">
						<label for="mail">返信用メールアドレス</label>
						<input id="mail" type="email" name="mail">
						<label for="num">電話番号</label>
						<input id="num" type="number" name="num">
						<label for="comment">問い合わせ内容</label>
						<textarea id="comment" name="comment"></textarea>
						<div class="p-contact__submit__wrap">
							<input type="submit" value="送信" class="p-contact__submit">
						</div>
					</form>
				</section>
				<section class="p-contact__liver">
					<h3 class="p-contact__liver__ttl">For Liver</h3>
					<p class="c-text">ライバーのお仕事に興味がある人はこちらへ</p>
					<div class="p-contact__btn__area">
						<img src="<?php echo get_template_directory_uri() ?>/asset/img/arrow_01.png" width="497" height="301" alt="矢印" class="p-contact__arrow">
						<a href="https://lin.ee/J2TDM7S" class="p-contact__liver__link">
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
					<p class="c-text">連絡先：info@studio-gate.tokyo<br>
						本社：東京都渋谷区神宮前六丁目２３番４号<br>
						事業内容:タレント、モデル、アーティストのマネージメント<br>
						ファンコミュニティ事業<br>
						インターネットによる広告業務及び番組配信前各号に附帯関連する⼀切の事業</p>
				</div>
				<div class="p-company__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.487767883481!2d139.70025811480286!3d35.664989938470804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca60a68b265%3A0xe7d14091d18be5a3!2z44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yW5LiB55uu77yS77yT4oiS77yU!5e0!3m2!1sja!2sjp!4v1650536996627!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section> -->
	</main>
	<footer class="l-footer">
		<p>ll rights reserved  by studio gate</p>
	</footer>
	<script
	type="text/javascript"
	src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
	>
	</script>
	<script src="<?php echo get_template_directory_uri() ?>/asset/js/functions.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/asset/js/main.js"></script>
</body>
</html>