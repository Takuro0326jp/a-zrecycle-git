<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
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
	<?php if (is_home() || is_front_page() ) {
			$canonical_url = get_bloginfo('url').'/';
		} elseif(is_post_type_archive(array('faq', 'area', 'brand', 'information'))) {
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
	<?php if(!(is_404())):?>
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

	<title><?php
		if (is_post_type_archive('post') || is_tax('item') || is_home()) {
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
		} else {
			echo trim(wp_title('', false));
		}
		echo '｜';
		bloginfo('name');
	?></title>
	<meta name="keywords" content="家具買取,家電買取,楽器買取の専門店｜アドア東京">
	<meta name="description" content="家具買取、家電買取、楽器買取のアドア(adoor) の<?php echo trim(wp_title('', false));
	if (is_archive() || is_home()) {
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
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

	<?php /*
	<link href="https://www.a-zrecycle.com/css/layout.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://www.a-zrecycle.com/css/contents.css" rel="stylesheet" type="text/css" media="all" />
	*/ ?>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
	<link href="<?php echo $site_url; ?>/css/layout.css?v1.0.2" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $site_url; ?>/css/contents.css?v1.0.6" rel="stylesheet" type="text/css" media="all" />
	<!--[if lt IE 9]> <script src="https://www.a-zrecycle.com/js/respond.js"></script> <![endif]-->
	<?php /*
	<script src="https://www.a-zrecycle.com/js/cmn-js.js"></script>
	*/ ?>
	<script src="<?php echo $site_url; ?>/js/cmn-js.js"></script>


	<!-- scriptForGotop -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WCGNPRD');</script>
		<!-- End Google Tag Manager -->

		<script type="text/JavaScript" src="<?php echo $site_url; ?>/js/common.js?v1.0.1"></script>
	</head>

	<body>
		<noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id=GTM-WCGNPRD"
			height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->

			<!-- page -->
			<div id="page"<?php if(is_tax() || is_single() || is_home() || is_category() || is_singular('faq') || is_post_type_archive(array('faq', 'information'))) echo ' class="page-bg"'; ?>>

				<?php include( ABSPATH . '/../include/site-header.php'); ?>

	<div id="contents-area">

		<div class="breadcrumbs">
			<?php if(function_exists('custom_breadcrumb'))
			 {
				 custom_breadcrumb();
			 }
			?>
		</div>

		<div class="contents-wrapper">
			<main class="main-contents" role="main">
