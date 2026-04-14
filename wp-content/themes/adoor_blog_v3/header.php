<!DOCTYPE html>
<html lang="ja">
<?php if (is_front_page()): ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php else: ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php endif; ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WCGNPRD');</script>
<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_date() || is_category('お客様の声') || is_single(18761)) { ?>
		<meta name="robots" content="noindex">
	<?php } ?>
	<link rel="index" href="https://www.a-zrecycle.com/">
	<?php if (is_front_page()) {
			$canonical_url = get_bloginfo('url').'/';
		} elseif(is_home()) {
			$canonical_url = get_bloginfo('url').'/jisseki/';
		} elseif(is_post_type_archive(array('area', 'brand', 'information', 'products'))) {
			$canonical_url = get_post_type_archive_link( get_post_type() );
		} elseif (is_category()) {
			$canonical_url = get_category_link(get_query_var('cat'));
		} elseif ( is_search() ) {
 			$canonical = get_search_link();
		} elseif (is_page() || is_single()) {
			$canonical_url = get_permalink();
		} else {
			$canonical_url = home_url();
		}
		$current_page = get_query_var( 'paged' );
		$current_page = $current_page == 0 ? '1' : $current_page;
		if ( $current_page >= 2) {
			$last_char = substr($canonical_url, -1);
			if ($last_char === '/') {
				$canonical_url = $canonical_url.'page/'.$current_page;
			} else {
				$canonical_url = $canonical_url.'/page/'.$current_page;
			}
		}
	 ?>
	<?php if(!(is_404()) && !(is_post_type_archive(array('faq','recommend','column'))) && !(is_tax(array('products-item','item','column-cat'))) && !(is_singular(array('column','products')))): ?>
	<link rel="canonical" href="<?php echo $canonical_url; ?>">
	<?php endif;?>
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicon/favicon-192x192.png">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.a-zrecycle.com/info/xmlrpc.php?rsd">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<?php
	$protocol = empty( $_SERVER["HTTPS"] ) ? 'http://' : 'https://';
	$host = $_SERVER['HTTP_HOST'];
	$site_url = $protocol . $host;

	if (is_post_type_archive('post') || is_tax('item')) {
		$taxonomy = 'item';
		$term_name = '';
		$terms = get_the_terms( $post->ID, $taxonomy );
		if ($terms && !is_wp_error($terms)) {
			foreach($terms as $term) {
				$term_name = '【'.$term->name.'】';
			}
		}
	}
	?>
	<?php if (is_front_page()): //トップページ ?>
	<title>家具買取の専門ショップ「アドア東京」 </title>
	<meta name="keywords" content="家具,買取,家電,楽器,専門,アドア東京" />
	<meta name="description" content="「アドア東京」では家具買取をはじめ、家電・楽器等広いジャンルを扱う買取専門ショップです。世田谷区をはじめ目黒区・港区・渋谷区・江東区など23区を中心に出張買取キャンペーン実施中です。即日対応可！迅速に対応いたします。" />
	<?php else: //トップページ以外 ?>
	<title><?php
		if(is_tax('products-item')) {
			// 現在のページ数
			$get_current_page = get_query_var( 'paged' );
			$current_page = $get_current_page == 0 ? '1' : $get_current_page;
			if ($get_current_page > 0) {
				echo single_term_title( '', false ).'の高価買取（買取実績'.$current_page.'ページ目）｜ブランド家具の高価買取専門ショップ「アドア東京」';
			} else {
				echo single_term_title( '', false ).'の高価買取｜ブランド家具の高価買取専門ショップ「アドア東京」';
			}
		} elseif(is_tax('column-cat')) {
			// 現在のページ数
			$get_current_page = get_query_var( 'paged' );
			$current_page = $get_current_page == 0 ? '1' : $get_current_page;
			if ($get_current_page > 0) {
				echo single_term_title( '', false ).'のコラム（'.$current_page.'ページ目）｜ブランド家具の高価買取専門ショップ「アドア東京」';
			} else {
				echo single_term_title( '', false ).'のコラム｜ブランド家具の高価買取専門ショップ「アドア東京」';
			}
		} else {
			if (is_post_type_archive('post') || is_tax(array('item')) || is_home()) {
				// 現在のページ数
				$get_current_page = get_query_var( 'paged' );
				$current_page = $get_current_page == 0 ? '1' : $get_current_page;
				if (is_home()) {
					echo 'お客様の声（買取実績）';
					if ($get_current_page > 0) {
						echo $current_page.'ページ目';
					}
				} else {
					if ($terms) echo $term_name;
					echo 'お客様の声（買取実績）';
					if ($get_current_page > 0) {
						echo $current_page.'ページ目';
					}
				}
			}	elseif(is_post_type_archive('products') && is_paged()) {
 				// 現在のページ数
 				$get_current_page = get_query_var( 'paged' );
 				$current_page = $get_current_page == 0 ? '1' : $get_current_page;
 				echo '買取実績';
 				if ($get_current_page > 0) {
 					echo '（'.$current_page.'ページ目）';
 				}
			} elseif(is_post_type_archive('recommend')) {
				// 現在のページ数
				$get_current_page = get_query_var( 'paged' );
				$current_page = $get_current_page == 0 ? '1' : $get_current_page;
				echo '買取一押し商品';
				if ($get_current_page > 0) {
					echo '（'.$current_page.'ページ目）';
				}
			} elseif(is_post_type_archive('faq')) {
				// 現在のページ数
				$get_current_page = get_query_var( 'paged' );
				$current_page = $get_current_page == 0 ? '1' : $get_current_page;
				echo 'よくあるご質問';
				if ($get_current_page > 0) {
					echo '（'.$current_page.'ページ目）';
				}
			} elseif(is_post_type_archive('voice')) {
				// 現在のページ数
				$get_current_page = get_query_var( 'paged' );
				$current_page = $get_current_page == 0 ? '1' : $get_current_page;
				echo 'お客様の声（アドアの口コミ）';
				if ($get_current_page > 0) {
					echo '（'.$current_page.'ページ目）';
				}
			} elseif (is_category()) {
				// 現在のページ数
				$get_current_page = get_query_var( 'paged' );
				$current_page = $get_current_page == 0 ? '1' : $get_current_page;
				if ($get_current_page > 0) {
					echo trim(wp_title('', false)).'（買取実績'.$current_page.'ページ目）';
				} else {
					echo trim(wp_title('', false)).'（買取実績）';
				}
			} else {
				echo trim(wp_title('', false));
			}
			echo '｜';
			bloginfo('name');
		}
	?></title>
	<meta name="keywords" content="家具買取,家電買取,楽器買取の専門店｜アドア東京">
	<meta name="description" content="家具買取、家電買取、楽器買取のアドア(adoor) の<?php
	echo trim(wp_title('', false));
	if (is_archive() || is_home() || is_tax()) {
		// 現在のページ数
		$get_current_page = get_query_var( 'paged' );
		$current_page = $get_current_page == 0 ? '1' : $get_current_page;
		if (is_home()) {
			echo 'お客様の声（買取実績）';
			if ($get_current_page > 0) {
				echo $current_page.'ページ目';
			}
		} else {
			if ($get_current_page > 0) {
				echo $current_page.'ページ目';
			}
		}
	} ?>です。「アドア東京」では家具買取をはじめ、家電・楽器等広いジャンルを扱う買取専門ショップです。世田谷区、目黒区・港区・渋谷区・江東区など23区を中心に出張買取キャンペーン実施中です。高価買取！即日対応可！迅速に対応いたします。">
	<?php endif; ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link href="/css/layout.css?v1.0.2" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/contents.css?v1.1.8" rel="stylesheet" type="text/css" media="all" />
	<!--[if lt IE 9]> <script src="https://www.a-zrecycle.com/js/respond.js"></script> <![endif]-->
	<script src="/js/cmn-js.js"></script>
	<!-- scriptForGotop -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
	$(function() {
		var topBtn = $('#page-top');
		topBtn.hide();
		//スクロールが100に達したらボタン表示
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				topBtn.fadeIn();}
				else { topBtn.fadeOut();
				}
			});
			//スクロールしてトップ
			topBtn.click(function () {
				$('body,html').animate({
					scrollTop: 0}, 500);
					return false;
				});
			});
			$(document).ready(function(){
				$('#mv-slider').slick({
					autoplay: true,
					autoplaySpeed: 4500,
					slidesToShow: 3,
					slidesToScroll: 1,
					arrows: true,
					fade: false,
					infinite: true,
					centerMode: true,
					centerPadding: 0,
					responsive: [
						{
						 breakpoint: 787,
						 settings: {
							 slidesToShow: 1,
						 }
					 }
					]
				});
				// rollover
				$(window).scroll(function() {
					var scrollHeight = $(document).height();
					var scrollPosition = $(window).height() + $(window).scrollTop();
					if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
						// dom.query('.form_tel').addClass('bottom_fix');
						$('.sp_form_tel').addClass('bottom_fix');
						$('.form_tel').addClass('bottom_fix');
					}
					else{
						// dom.query('.form_tel').removeClass('bottom_fix');
						$('.sp_form_tel').removeClass('bottom_fix');
						$('.form_tel').removeClass('bottom_fix');
					}
				});

			});
			</script>
			<!-- /scriptForGotop -->
		<script type="text/JavaScript" src="/js/common.js?v1.0.1"></script>
	</head>
	<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCGNPRD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
			<!-- page -->
			<div id="page"<?php
				if(is_front_page()) {
					echo 'class="toppage"';
				} elseif(is_tax(array('info_cat','column-cat')) || is_single() || is_home() || is_category() || is_singular('faq') || is_post_type_archive(array('faq', 'information', 'column', 'voice'))) { echo ' class="page-bg"';} ?>>


				<header role="header" class="site-header">
					<div class="container">
						<div class="inner clearfix">
							<div class="col-left">
								<h1 class="site-header-title">
									<?php
									 if (is_category()) {
										$get_current_page = get_query_var( 'paged' );
										$current_page = $get_current_page == 0 ? '1' : $get_current_page;
										if ($get_current_page > 0) {
											echo trim(wp_title('', false)).' お客様の声（買取実績）一覧 '.$current_page.'ページ目';
										} else {
											echo trim(wp_title('', false)).' お客様の声（買取実績）一覧';
										}
									} elseif(is_singular('area')) {
										echo trim(wp_title('', false)).'の家具買取、家電買取の出張買取なら【アドア東京】';
									} else { ?>
									家具買取、家電買取の出張買取なら【アドア東京】
								<?php } ?>
								</h1>
								<a href="/" class="site-header-logo">
									<img src="/images/cmn/logo.jpg" width="166" height="48" alt="a door アドア　東京">
								</a>
							</div>
							<div class="col-right">
								<div class="site-header-tel">
									<a href="tel:0120531017"><span>0120-531-017</span><small>電話受付 9:30〜18:30</small></a>
								</div>
								<div class="site-header-inquiry">
									<a href="<?php echo esc_url( adoor_contact_form_url() ); ?>"><span>買取のご相談</span></a>
								</div>
								<div class="site-header-nav-btn" id="nav-toggle-btn">
									<span></span>
									<span></span>
									<span></span>
									MENU
								</div>
								<table>
									<tr>
										<th>年中無休</th>
										<td>まずはお電話・メールにてお気軽にお問い合わせください。</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</header>
				<nav role="navigation" class="site-navigation">
					<ul>
						<li>
							<a href="/purchase/delivery.html">お買取の流れ</a>
						</li>
						<li>
							<a href="/faq/">よくあるご質問</a>
						</li>
						<li>
							<a href="/products">買取実績</a>
						</li>
						<li>
							<a href="/voice">お客様の声</a>
						</li>
						<li>
							<a href="/area/">対応エリア</a>
						</li>
						<li>
							<a href="/column/">コラム</a>
						</li>
						<li>
							<a href="/brand">高価買取ブランド</a>
						</li>
						<li>
							<a href="/about/index.html#shop1">店舗のご案内</a>
						</li>
					</ul>
				</nav>

<?php if (is_front_page()): ?>
		<div id="mainvisual">
			<div id="mv-slider">
				<div class="slide-item">
					<a href="https://store.shopping.yahoo.co.jp/adoor/?device=pc&"><img src="/images/top/mv_slide006.jpg" alt="アドアYahooショッピング店"></a>
				</div>
				<div class="slide-item">
					<a href="/about/#shop1"><img src="/images/top/mv_slide001.jpg" alt="おかげさまで15周年買取件数8万件突破！家具、家電、楽器など高価買取いたします"></a>
				</div>
				<div class="slide-item">
					<a href="/purchase/delivery.html"><img src="/images/top/mv_slide002.jpg" alt="ヴィンテージ家具、ブランド家具は、アドア東京にお売りください。"></a>
				</div>

				<div class="slide-item">
					<a href="/products"><img src="/images/top/mv_slide003.jpg" alt="１点から大規模まで、当日買取、翌日引き取りなど柔軟に対応いたします！"></a>
				</div>

				<div class="slide-item">
					<a href="/brand/cassina-ixc"><img src="/images/top/mv_slide004.jpg" alt="モデルルーム展示家具を高価お買取り"></a>
				</div>


			</div>
			<p>アドア東京ではブランド家具の出張買取を行っております、経験豊富なプロのバイヤーが正しい価値をご案内！</p>
		</div>
<?php endif; ?>
	<div id="contents-area">
<?php if (!is_front_page()): ?>
		<div class="breadcrumbs">
			<?php if(function_exists('custom_breadcrumb'))
			 {
				 custom_breadcrumb();
			 }
			?>
		</div>
<?php endif; ?>
		<div class="contents-wrapper">
			<main class="main-contents" role="main">
