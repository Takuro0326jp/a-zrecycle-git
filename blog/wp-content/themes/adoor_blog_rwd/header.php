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

	<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

	<?php /*
	<link href="https://www.a-zrecycle.com/css/layout.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://www.a-zrecycle.com/css/contents.css" rel="stylesheet" type="text/css" media="all" />
	*/ ?>
	<link href="<?php echo $site_url; ?>/css/layout.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $site_url; ?>/css/contents.css" rel="stylesheet" type="text/css" media="all" />
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

	</head>





	<body>
		<noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id=GTM-WCGNPRD"
			height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->

			<!-- page -->
			<div id="page">




				<!-- #header-box -->
				<div id="header-box">
					<h1 id="top">アドアは家具、家電、楽器買取の専門ショップです。</h1>
					<p id="top-catch">家具・家電・楽器の買取専門ショップ「a door アドア　東京」</p>
					<div id="header-logo" class="a-img">
						<?php /*
						<a href="https://www.a-zrecycle.com/"><img src="https://www.a-zrecycle.com/images/cmn/img_h_logo.gif" width="190" height="60" alt="a door アドア　東京"></a>
						*/ ?>
						<a href="https://www.a-zrecycle.com/"><img src="<?php echo $site_url; ?>/images/cmn/img_h_logo.gif" width="190" height="60" alt="a door アドア　東京"></a>
					</div>
					<div id="header-mail" class="a-img">
						<?php /*
						<a href="https://www.a-zrecycle.com/form/index.php"><img src="https://www.a-zrecycle.com/images/cmn/header_mail.gif" alt="メールでのお問い合わせ24時間受付OK、営業時間外はコチラから！メールアドレス： def1011@gamma.ocn.ne.jp" width="272" height="66" ></a>
						*/ ?>
						<a href="https://www.a-zrecycle.com/form/index.php"><img src="<?php echo $site_url; ?>/images/cmn/header_mail.gif" alt="メールでのお問い合わせ24時間受付OK、営業時間外はコチラから！メールアドレス： info@adoor.jp" width="272" height="66" ></a>
					</div>
					<div id="header-phone" class="a-img">
						<div class="pc"><img src="https://www.a-zrecycle.com/images/cmn/header_phone.gif" alt="お電話でのお問い合わせ:フリーダイヤル0120-531-017 受付時間：9:30～19:00" width="208" height="63" ></div>
						<div class="nonpc"><a href="tel:0120531017"><img src="https://www.a-zrecycle.com/images/cmn/header_phone_s.gif" alt="お電話でのお問い合わせ:フリーダイヤル0120-531-017 受付時間：9:30～19:00" width="208" height="66" ></a></div>
					</div>

					<!-- gnavi -->
					<div id="gnavi-box">
						<div id="gnavi">
							<ul>
								<li id="gnavi-1"><a href="https://www.a-zrecycle.com/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('header_btn_1','','https://www.a-zrecycle.com/images/cmn/gnavi_home_o.gif',0)"><img src="https://www.a-zrecycle.com/images/cmn/gnavi_home.gif" alt="ホーム" name="header_btn_1" width="96" height="15" id="header_btn_1" /></a></li>
								<li id="gnavi-2"><a href="https://www.a-zrecycle.com/purchase/delivery.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('header_btn_2','','https://www.a-zrecycle.com/images/cmn/gnavi_purchase_o.gif',0)"><img src="https://www.a-zrecycle.com/images/cmn/gnavi_purchase.gif" alt="お買取までの流れ" name="header_btn_2" width="96" height="15" id="header_btn_2" /></a></li>
								<li id="gnavi-3"><a href="https://www.a-zrecycle.com/faq/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('header_btn_3','','https://www.a-zrecycle.com/images/cmn/gnavi_qna_o.gif',0)"><img src="https://www.a-zrecycle.com/images/cmn/gnavi_qna.gif" alt="よくあるご質問" name="header_btn_3" width="96" height="15" id="header_btn_3" /></a></li>
								<li id="gnavi-4"><a href="https://www.a-zrecycle.com/blog/archives/18761" onmouseover="MM_swapImage('header_btn_4','','https://www.a-zrecycle.com/images/cmn/gnavi_voice_o.gif',0)" onmouseout="MM_swapImgRestore()"><img src="https://www.a-zrecycle.com/images/cmn/gnavi_voice.gif" alt="お客様の声" name="header_btn_4" width="96" height="15" id="header_btn_4" /></a></li>
								<li id="gnavi-5"><a href="https://www.a-zrecycle.com/about/index.html#shop1" onmouseover="MM_swapImage('header_btn_5','','https://www.a-zrecycle.com/images/cmn/gnavi_about_o.gif',0)" onmouseout="MM_swapImgRestore()"><img src="https://www.a-zrecycle.com/images/cmn/gnavi_about.gif" alt="店舗のご案内" name="header_btn_5" width="96" height="15" id="header_btn_5" /></a></li>
							</ul>
						</div>
					</div>
					<!-- /gnavi -->

					<div id="head">
						<div id="nonpc-small-head a-img">
							<a href="https://www.a-zrecycle.com/" id="head-m"><img src="https://www.a-zrecycle.com/images/cmn/head_m.jpg" width="550" height="323" alt=""></a>
							<a href="https://www.a-zrecycle.com/" id="head-s"><img src="https://www.a-zrecycle.com/images/cmn/head_s.jpg" width="300" height="190" alt=""></a>
						</div>
						<p id="mainnavi-ttl"><img src="https://www.a-zrecycle.com/images/cmn/mainnavi_ttl.gif" width="260" height="28" alt="選べる3つのお買取方法"></p>
						<ul>
							<li><a href="https://www.a-zrecycle.com/purchase/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('mainnavi_house','','https://www.a-zrecycle.com/images/cmn/mainnavi_house_o.gif',0)"><img src="https://www.a-zrecycle.com/images/cmn/mainnavi_house.gif" alt="店頭でお買取" name="mainnavi_house" width="270" height="76" border="0"></a></li>
							<li><a href="https://www.a-zrecycle.com/purchase/send.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('mainnavi_package','','https://www.a-zrecycle.com/images/cmn/mainnavi_package_o.gif',0)"><img src="https://www.a-zrecycle.com/images/cmn/mainnavi_package.gif" alt="郵送でお買取" name="mainnavi_package" width="270" height="76" border="0"></a></li>
							<li><a href="https://www.a-zrecycle.com/purchase/delivery.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('mainnavi_transpo','','https://www.a-zrecycle.com/images/cmn/mainnavi_transpo_o.gif',0)"><img src="https://www.a-zrecycle.com/images/cmn/mainnavi_transpo.gif" alt="出張で、お買取" name="mainnavi_transpo" width="270" height="76" border="0"></a></li>
						</ul>
					</div>
					<!-- /#head -->

				</div>
				<!-- /#header-box -->



				<div id="contents-area">

					<div id="middle_nav">
						<div id="pankuzu"><!-- #BeginLibraryItem "/Library/breadcrumb_home.lbi" --><a href="https://www.a-zrecycle.com/">家具,家電,楽器買取Home</a><!-- #EndLibraryItem --> <span class="fb">blog</span></div>
					</div>


					<!-- #contents-box -->
					<div id="contents-box">



						<!-- .side-left-parts -->
						<div class="side-left-parts pc"><!-- #BeginLibraryItem "/Library/side_left_URL.lbi" -->
							<div class="sidebar a-img">
								<ul class="left_banner">
									<li><a href="https://www.a-zrecycle.com/blog/archives/13232"><img src="https://www.a-zrecycle.com/images/cmn/leftbanner_magazine.jpg" width="210" height="141" alt="雑誌に掲載されました" class="imghover" /></a></li>
									<li><a href="https://www.a-zrecycle.com/blog/archives/18700"><img src="https://www.a-zrecycle.com/images/cmn/leftbanner_tv.jpg" width="210" height="141" alt="テレビでも紹介されました" class="imghover" /></a></li>
									<li class="mt_00"><a href="https://www.a-zrecycle.com/blog/archives/26904"><img src="https://www.a-zrecycle.com/images/cmn/leftbanner_tv_02.jpg" width="210" height="109" alt="私の何がイケないの？" class="imghover" /></a></li>
									<li><a href="https://www.a-zrecycle.com/blog/archives/18707"><img src="https://www.a-zrecycle.com/images/cmn/leftbanner_vintage.jpg" width="210" height="113" alt="ヴィンテージ家具の輸入も行なっております" class="imghover" /></a></li>
									<li class="text_banner opacity06">
										<a href="https://www.a-zrecycle.com/form/index.php">
											<p>目黒区・港区・渋谷区・<br />
												世田谷区など・・・</p>
											</a>
										</li>
									</ul>
									<div id="left_navi">
										<div><img src="https://www.a-zrecycle.com/images/cmn/title_lnavi.gif" alt="取扱商品" width="210" height="30" /></div>
										<div class="left_navi01"><a href="https://www.a-zrecycle.com/products/index.html"><img src="https://www.a-zrecycle.com/images/cmn/lnavi_electronics.gif" alt="家電" width="63" height="22" class="imghover" /></a></div>
										<div class="left_navi01"><a href="https://www.a-zrecycle.com/products/design_furniture.html"><img src="https://www.a-zrecycle.com/images/cmn/lnavi_furniture.gif" alt="家具" width="63" height="29" class="imghover" /></a></div>
										<div class="left_subnavi">
											<div class="left_navi02"><a href="https://www.a-zrecycle.com/products/bed.html"><img src="https://www.a-zrecycle.com/images/cmn/snavi_bed.gif" alt="ベッド" width="73" height="14" class="imghover" /></a></div>
											<div class="left_navi02"><a href="https://www.a-zrecycle.com/products/antique.html"><img src="https://www.a-zrecycle.com/images/cmn/snavi_antic_furniture.gif" alt="北欧ミッドセンチュリー" width="181" height="15" class="imghover" /></a></div>
											<div class="left_navi02"><a href="https://www.a-zrecycle.com/products/design_furniture.html"><img src="https://www.a-zrecycle.com/images/cmn/snavi_design_furniture.gif" alt="デザイナーズ家具" width="181" height="14" class="imghover" /></a></div>
										</div>
										<div class="left_navi01"><a href="https://www.a-zrecycle.com/products/bicycle.html"><img src="https://www.a-zrecycle.com/images/cmn/lnavi_bicycle.gif" alt="自転車" width="86" height="20" class="imghover" /></a></div>
										<div class="left_navi01"><a href="https://www.a-zrecycle.com/products/instrument.html"><img src="https://www.a-zrecycle.com/images/cmn/lnavi_musical_instrument.gif" alt="楽器・オーディオ" width="144" height="28" class="imghover" /></a></div>
										<div class="left_subnavi">
											<div class="left_navi02"><a href="https://www.a-zrecycle.com/products/instrument.html"><img src="https://www.a-zrecycle.com/images/cmn/snavi_instruments.gif" alt="楽器" width="67" height="14" class="imghover" /></a></div>
											<div class="left_navi02"><a href="https://www.a-zrecycle.com/products/audio.html"><img src="https://www.a-zrecycle.com/images/cmn/snavi_audio.gif" alt="オーディオ" width="99" height="14" class="imghover" /></a></div>
										</div>
									</div>
									<div class="left_contact">
										<h3><img src="https://www.a-zrecycle.com/images/cmn/lefttitle_contact.jpg" width="210" height="29" alt="お問い合わせ" /></h3>
										<div class="pc"><img src="https://www.a-zrecycle.com/images/cmn/header_phone.gif" alt="お電話でのお問い合わせ:フリーダイヤル0120-531-017 受付時間：9:30～19:00" width="208" height="63" ></div>
										<div class="nonpc a-img"><a href="tel:0120531017"><img src="https://www.a-zrecycle.com/images/cmn/header_phone_s.gif" alt="お電話でのお問い合わせ:フリーダイヤル0120-531-017 受付時間：9:30～19:00" width="208" height="66" ></a></div>
										<h4 class="left_contact_bottom"><img src="https://www.a-zrecycle.com/images/cmn/header_title_mail.gif" width="153" height="14" alt="メールでのお問い合わせ" /></h4>
										<div class="left_mailbtnarea"> <img src="https://www.a-zrecycle.com/images/cmn/left_mail_txt.gif" width="125" height="24" alt="24時間受付OK、営業時間外はコチラから！" />
											<div class="tc a-img"><a href="https://www.a-zrecycle.com/form/index.php"><img src="https://www.a-zrecycle.com/images/cmn/btn_contact02.jpg" width="180" height="29" alt="お問い合わせ" /></a></div>
											<div class="tr"><img src="https://www.a-zrecycle.com/images/cmn/left_mail_address.gif" width="139" height="14" alt="def1011@gamma.ocn.ne.jp" /></div>
										</div>
									</div>
								</div>
								<!-- /#sidebox -->

								<!-- SIDE_RIGHT -->
								<!-- PC,nonPC -->
								<div id="side-right-parts">
									<div class="sidebar">
										<div class="mb10 a-img"><a href="https://www.a-zrecycle.com/form/index.php"><img src="https://www.a-zrecycle.com/images/cmn/rightbanner_contact.jpg" width="210" height="150" alt="申し込み" /></a></div>
										<div class="mb10 a-img"><a href="https://www.a-zrecycle.com/blog/archives/18761"><img src="https://www.a-zrecycle.com/images/cmn/rightbanner_voice.jpg" width="210" height="101" alt="ご利用いただいたお客様の声" /></a></div>
										<div class="mb10 a-img"><a href="https://www.a-zrecycle.com/blog/"><img src="https://www.a-zrecycle.com/images/cmn/bt_blog.gif" alt="ブログ" width="210" height="101" /></a>
										</div>

										<div><img src="https://www.a-zrecycle.com/images/cmn/rnavi_faq.gif" alt="よくあるご質問" width="210" height="31" /></div>
										<div class="right_faq">
											<div class="right_f"><img src="https://www.a-zrecycle.com/images/cmn/ico_question.gif" alt="" width="14" height="14" />　<a href="https://www.a-zrecycle.com/faq/index.html#q1">買取していない物はありますか？</a></div>
											<div class="right_f"><img src="https://www.a-zrecycle.com/images/cmn/ico_question.gif" alt="" width="14" height="14" />　<a href="https://www.a-zrecycle.com/faq/index.html#q2">郵送は、本当に無料ですか？</a></div>
											<div class="right_f"><img src="https://www.a-zrecycle.com/images/cmn/ico_question.gif" alt="" width="14" height="14" />　<a href="https://www.a-zrecycle.com/faq/index.html#q3">どこまで出張買取に来れますか？</a></div>
										</div>

										<div class="mb10 a-img"><a href="https://www.a-zrecycle.com/blog/archives/22541"><img src="https://www.a-zrecycle.com/images/cmn/staff_bnr.png" width="210" height="121" alt="スタッフ募集" /></a></div>

										<div><img src="https://www.a-zrecycle.com/images/cmn/rnavi_map.gif" alt="窓口のご案内" width="210" height="31" /></div>
										<div class="right_shop mb10">
											<table border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td class="right_shop_td03"><a href="https://www.a-zrecycle.com/about/index.html#shop1"><img src="https://www.a-zrecycle.com/images/cmn/img_shop2.gif" alt="買取りセンター" width="94" height="94" class="imghover" /></a></td>
												</tr>
												<tr>
													<td class="right_shop_td04"><a href="https://www.a-zrecycle.com/about/index.html#shop1">【a door アドア東京　世田谷買取センター】</a></td>
												</tr>
												<tr>
													<td class="right_shop_td03">「店頭買取」「郵送買取」「出張買取」対応中!!</td>
												</tr>
											</table>
										</div>

										<div class="fb_timeline">
											<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fadoortokyo&amp;width=210&amp;height=330&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;show_border=true&amp;header=true&amp;appId=203721442990477" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:210px; height:330px;" allowTransparency="true"></iframe>
										</div>

									</div><!-- /.sidebar -->
								</div><!-- /#side-right-parts -->
								<!-- #EndLibraryItem --></div>
								<!-- /.side-left-parts -->



								<!-- #MAIN -->
								<div id="main">

									<!-- top-maincolumn_1 -->
									<div class="top-maincolumn">

										<div class="top_maincolumn1-ttl">
											<img src="https://www.a-zrecycle.com/images/idx/maincolumn_title1_1.gif" width="124" height="40" alt="What is 「a door」？" />
											<img src="https://www.a-zrecycle.com/images/idx/maincolumn_title1_2.gif" width="280" height="40" alt="「a door」ってどんなお店？" />
										</div>

										<div class="column_contents clearfix">
											<h3>「アドアは家具、家電、楽器買取の専門ショップです。」</h3>
											<div id="topbox-left">
												<img src="https://www.a-zrecycle.com/images/idx/maincolumn_staff.jpg" width="150" height="120" alt="アドア東京スタッフ" />
											</div>
											<div id="topbox-right" class="a-img">
												<span class="fb">店頭買取</span><br class="nonpc-small">〒158-0098<br>東京都世田谷区上用賀<br class="nonpc-small">6-26-7<br class="nonpc-small">
												<a href="tel:0120531017" class="nonpc float-r"><img src="https://www.a-zrecycle.com/images/cmn/main_topbox_tel.gif" width="110" height="52" alt="フリーダイヤル0120-531-017 受付時間：9:30～19:00" class="ml10"></a>
											</div>
											<p id="topbox-btm-txt">「専門スタッフによる【真心のある査定】がポイント！」<br />家具、家電、楽器をそれぞれ1点からでも査定しております、お気軽にご相談くださいませ。</p>
										</div>

									</div>
									<!-- /top-maincolumn_1 -->
