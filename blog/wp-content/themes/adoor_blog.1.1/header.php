<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="keywords" content="家具,家電,楽器,買取専門,adoor" />

	<link href="/common/css/import.css" rel="stylesheet" type="text/css" media="screen,print" />
	<link href="<?php echo get_site_url(); ?>/css/blog.css" rel="stylesheet" type="text/css" media="screen,print" />
	<link href="/common/css/print.css" rel="stylesheet" type="text/css" media="print" />
	<link rel="index" href="/" title="ホーム" />

	<script type="text/javascript" src="/common/js/script.js"></script>

	<?php wp_head(); ?>
</head>

<body>
<div id="layout">

	<!--header start-->
	<div class="h1_area">

	<?php if ( is_home() && !is_paged() ) { ?>

		<h1>ブランド、デザイナーズ家具、楽器、オーディオなど高価お買取いたします。</h1>

	<?php } else { ?>

		<h1><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></h1>

	<?php } ?>

		<div class="favorite">

<script type="text/javascript">
<!--
	if(navigator.userAgent.indexOf("MSIE") > -1){ //Internet Explorer
	document.write('<!-'+'-[if IE]>');
	document.write('<a href="javascript: window.external.AddFavorite(location.href, document.title);"><img alt="このHPをお気に入りに登録" src="../images/bt_favorite.gif" /><' + '/a>');
	document.write('<![endif]-'+'->');
	}

	else if(navigator.userAgent.indexOf("Firefox") > -1){ //Firefox
	document.write('<a href="javascript:addBookmarkFF(location.href, document.title);"><img alt="このHPをお気に入りに登録" src="../images/bt_favorite.gif" /><' + '/a>');
	}

	else if(navigator.userAgent.indexOf("Opera") > -1){ //Opera
	document.write('<a href="http://www.adoor.co.jp" rel="sidebar" title="アドア"><img alt="このHPをお気に入りに登録" src="../images/bt_favorite.gif" /><' + '/a>');
	}

	else { //該当なし
	void(0); //何もしない
	}
//-->
</script>

		</div>
		<br clear="all" />
	</div>

	<div class="headerarea">
		<div class="logo_area">家具・家電・楽器の買取専門ショップ「a door アドア　東京」<br />
			<a href="/index.html"><img src="/images/logo.gif" alt="アドア東京 ロゴ" /></a>
		</div>
		<div class="header_phone">
			<h4><img src="/images/additional/header_title_phone.jpg" width="153" height="14" alt="お電話でのお問い合わせ" /></h4>
			<p><a href="tel:0120531017"><img src="/images/additional/header_phone.jpg" width="208" height="40" alt="フリーダイヤル0120-531-017 受付時間：9:00～21:00" /></a></p>
		</div>
		<div class="header_mail">
			<h4><img src="/images/additional/header_title_mail.jpg" width="153" height="14" alt="メールでのお問い合わせ" /></h4>
			<div class="header_mailbtnarea">
				<img src="/images/additional/header_mail.jpg" width="272" height="43" alt="24時間受付OK、営業時間外はコチラから！メールアドレス： def1011@gamma.ocn.ne.jp" />
				<div class="header_btn"><a href="/form/index.php"><img src="/images/additional/btn_contact01.jpg" width="140" height="28" alt="お問い合わせ" onmouseover="this.src='/images/additional/btn_contact01_o.jpg'" onmouseout="this.src='/images/additional/btn_contact01.jpg'" /></a></div>
			</div>
		</div>
		<br clear="all" />
	</div>
	<!--header end-->

<ul id="navi">
	<li><a href="/index.html"><img src="/images/gnavi_home.gif" alt="ホーム" width="146" height="35" class="navi_bt" onmouseover="this.src='/images/gnavi_home_o.gif'" onmouseout="this.src='/images/gnavi_home.gif'" /></a></li>
	<li><a href="/purchase/delivery.html"><img src="/images/gnavi_purchase.gif" alt="お買取りまでの流れ" width="147" height="35" class="navi_bt" onmouseover="this.src='/images/gnavi_purchase_o.gif'" onmouseout="this.src='/images/gnavi_purchase.gif'" /></a></li>
	<li><a href="/faq/index.html"><img src="/images/gnavi_qna.gif" alt="よくあるご質問" width="147" height="35" class="navi_bt" onmouseover="this.src='/images/gnavi_qna_o.gif'" onmouseout="this.src='/images/gnavi_qna.gif'" /></a></li>
	<li><a href="/blog/archives/18761"><img src="/images/gnavi_voice.gif" alt="お客様の声" width="147" height="35" class="navi_bt" onmouseover="this.src='/images/gnavi_voice_o.gif'" onmouseout="this.src='/images/gnavi_voice.gif'" /></a></li>
	<li><a href="/about/index.html"><img src="/images/gnavi_about.gif" alt="店舗のご案内" width="145" height="35" onmouseover="this.src='/images/gnavi_about_o.gif'" onmouseout="this.src='/images/gnavi_about.gif'" /></a></li>
</ul>

	<!-- #EndLibraryItem -->
	<?php get_template_part( 'module_topicpath' ); ?>

	<div id="pageBody">
	<?php get_sidebar(); ?>
