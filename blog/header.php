<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="imagetoolbar" content="no" />


	<link rel="INDEX" href="https://www.a-zrecycle.com/" />
	<link rev="made" href="mailto:aaaaaaaaaa@aaa" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.a-zrecycle.com/info/xmlrpc.php?rsd" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<?php
	$protocol = empty( $_SERVER["HTTPS"] ) ? 'http://' : 'https://';
	$host = $_SERVER['HTTP_HOST'];

	$site_url = $protocol . $host;
	?>

	<title><?php echo trim(wp_title('', false));
		if (is_archive() || is_home()) {
			// 現在のページ数
			$get_current_page = get_query_var( 'paged' );
			$current_page = $get_current_page == 0 ? '1' : $get_current_page;
			if (is_home()) {
				echo 'お客様の声（買取実績）';
				if ($get_current_page > 0) {
					echo $current_page.'ページ目 | ';
				}
			} else {
				if ($get_current_page > 0) {
					echo $current_page.'ページ目';
				}
			}
		}
		if(wp_title('',false)) {
			echo ' | ';
		}
		bloginfo('name');
	?></title>
	<meta name="keywords" content="家具買取,家電買取,楽器買取の専門店｜アドア東京">
	<meta name="description" content="家具買取、家電買取、 楽器買取の高価買取なら【アドア東京】の<?php echo trim(wp_title('', false));
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
	<link href="<?php echo $site_url; ?>/css/contents.css?v1.0.4" rel="stylesheet" type="text/css" media="all" />
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
