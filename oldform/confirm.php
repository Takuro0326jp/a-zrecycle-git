<?php

//create a session
 session_start();

 error_reporting(E_ERROR | E_WARNING | E_PARSE );

//~ echo '<pre>' . print_r($_POST, true) . '</pre>';
//~ echo '<pre>' . print_r($_SESSION, true) . '</pre>';

//if there is a name and an email
if(!empty($_POST['UserName']) AND !empty($_POST['userMailAddress']) ){
	//datas from the form
	$_SESSION['user']['UserName'] 		= $_POST['UserName'] ;
	$_SESSION['user']['userMailAddress'] 	= $_POST['userMailAddress'] ;
	$_SESSION['user']['userZip21'] 		= $_POST['zip21'] ;
	$_SESSION['user']['userZip22'] 		= $_POST['zip22'] ;
	$_SESSION['user']['userPref21'] 		= $_POST['pref21'] ;
	$_SESSION['user']['userAddr21'] 		= $_POST['addr21'] ;
	$_SESSION['user']['elevator'] 			= $_POST['elevator'] ;
	$_SESSION['user']['UserTelNumber'] 	= $_POST['UserTelNumber'] ;
	$_SESSION['user']['deliveryHour'] 		= $_POST['deliveryHour'] ;
	$_SESSION['user']['comment'] 		= $_POST['comment'] ;
}

//to display items
$items  = $_SESSION['items'] ;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WCGNPRD');</script>
	<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>お買取のお申し込み確認｜家具・家電・楽器の買取専門ショップ「a door アドア」</title>
<meta name="description" content="「アドア東京」では家具買取をはじめ、家電・楽器等広いジャンルを扱う買取専門ショップです。
世田谷区をはじめ目黒区・港区・渋谷区・江東区など23区を中心に出張買取キャンペーン実施中です。即日対応可！迅速に対応いたします。" />
<meta name="keywords" content="家具、家電、楽器、買取専門、家具買取、アドア東京" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="../css/additional.css" rel="stylesheet" type="text/css" />
<link rel="contents" href="/" title="ホーム" />
<link rel="index" href="/sitemap/" title="サイトマップ" />
<!-- Javascript  -->

<script type="text/javascript" src="http://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js" charset="UTF-8" ></script>
<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js'></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe
	src="https://www.googletagmanager.com/ns.html?id=GTM-WCGNPRD"
	height="0" width="0"
	style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<div id="all">
	<!--header start-->
	<div class="h1_area">
	  <h1>お申し込みページ確認｜アドア東京</h1>
		<div class="favorite"><script type="text/javascript">
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
			<a href="https://www.a-zrecycle.com/"><img src="../images/logo.gif" alt="アドア東京 ロゴ" /></a>
		</div>
		<div class="header_phone">
			<h4><img src="../images/additional/header_title_phone.jpg" width="153" height="14" alt="お電話でのお問い合わせ" /></h4>
			<p><a href="tel:0120531017"><img src="../images/additional/header_phone.jpg" width="208" height="40" alt="フリーダイヤル0120-531-017 受付時間：9:30～19:00" /></a></p>
		</div>
		<div class="header_mail">
			<h4><img src="../images/additional/header_title_mail.jpg" width="153" height="14" alt="メールでのお問い合わせ" /></h4>
			<div class="header_mailbtnarea">
				<img src="../images/additional/header_mail.jpg" width="272" height="43" alt="24時間受付OK、営業時間外はコチラから！メールアドレス： info@adoor.jp" />
				<div class="header_btn"><a href="../form/index.php"><img src="../images/additional/btn_contact01.jpg" width="140" height="28" alt="お問い合わせ" onmouseover="this.src='../images/additional/btn_contact01_o.jpg'" onmouseout="this.src='../images/additional/btn_contact01.jpg'" /></a></div>
			</div>
		</div>
		<br clear="all" />
	</div>
	<!--header end-->

	<!--navi start-->
	<ul id="navi">
		<li><a href="https://www.a-zrecycle.com/"><img src="../images/gnavi_home.gif" alt="ホーム" width="146" height="35" class="navi_bt" onmouseover="this.src='../images/gnavi_home_o.gif'" onmouseout="this.src='../images/gnavi_home.gif'" /></a></li>
		<li><a href="../purchase/delivery.html"><img src="../images/gnavi_purchase.gif" alt="お買取りまでの流れ" width="147" height="35" class="navi_bt" onmouseover="this.src='../images/gnavi_purchase_o.gif'" onmouseout="this.src='../images/gnavi_purchase.gif'" /></a></li>
		<li><a href="../faq/index.html"><img src="../images/gnavi_qna.gif" alt="よくあるご質問" width="147" height="35" class="navi_bt" onmouseover="this.src='../images/gnavi_qna_o.gif'" onmouseout="this.src='../images/gnavi_qna.gif'" /></a></li>
		<li><a href="https://www.a-zrecycle.com/blog/archives/18761"><img src="../images/gnavi_voice.gif" alt="お客様の声" width="147" height="35" class="navi_bt" onmouseover="this.src='../images/gnavi_voice_o.gif'" onmouseout="this.src='../images/gnavi_voice.gif'" /></a></li>
		<li><a href="../about/index.html"><img src="../images/gnavi_about.gif" alt="店舗のご案内" width="145" height="35" onmouseover="this.src='../images/gnavi_about_o.gif'" onmouseout="this.src='../images/gnavi_about.gif'" /></a></li>
	</ul>
	<!--navi end-->

	<!--pankuzu start-->
	<div id="pankuzu"><a href="https://www.a-zrecycle.com/">家具、家電、楽器買取Home</a>　　　<span class="bold">お買取のお申し込み</span></div>
	<!--pankuzu end-->

	<!--form start-->
	<div><img src="images/img_step1.gif" /><img src="images/img_step2.gif" /><img src="images/img_step3_o.gif" /><img src="images/img_step4.gif" /></div><br />

	<div class="form_bg">
		<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
			<tr>
				<td colspan="2" class="form_td01">必須項目</td>
			</tr>
			<tr>
				<td class="form_td02">氏名</td>
				<td class="form_td04"><?php  echo $_SESSION['user']['UserName']  ;  ?></td>
			</tr>
			<tr>
				<td class="form_td02">メールアドレス</td>
				<td class="form_td04"><?php  echo $_SESSION['user']['userMailAddress']  ;  ?></td>
			</tr>
			<tr>
				<td class="form_td02">住所</td>
				<td class="form_td04"><?php echo "〒".$_SESSION['user']['userZip21'].  "-"  .$_SESSION['user']['userZip22']." ".$_SESSION['user']['userPref21']." ".$_SESSION['user']['userAddr21']; ?></td>
			</tr>
			<tr>
				<td class="form_td02">エレベーター</td>
				<td class="form_td04"><?php
				if($_SESSION['user']['elevator'] == "yes"){
				echo 'あり' ;
				}else if($_SESSION['user']['elevator'] == "no"){
				echo 'なし' ;
				} ?>
				</td>
			</tr>
			<tr>
				<td class="form_td02">電話番号</td>
				<td class="form_td04"><?php  echo $_SESSION['user']['UserTelNumber']  ;  ?> </td>
			</tr>
			<tr>
				<td class="form_td02">電話を受けてもよい時間帯</td>
				<td class="form_td04"><?php  echo $_SESSION['user']['deliveryHour']  ;  ?> </td>
			</tr>
			<tr>
				<td class="form_td02">ショップへのコメント</td>
				<td class="form_td04"><?php  echo $_SESSION['user']['comment']  ;  ?> </td>
			</tr>
		</table>
		<br />
		<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
			<tr>
				<td colspan="3" class="form_td01">登録済み商品情報</td>
			</tr>
			<?php
//number of items
$item_seq =  count($_SESSION[items]);
for($i = 0 ; $i <= $item_seq -1 ; $i++ ){
			?>

			<tr>

			<td class="form_td02">
			商品<?php  echo $i +1 ;  ?>
			</td>

			<td class="form_td05">
			<?php
			//~ echo '<pre>' . print_r($items[$i], true) . '</pre>';
			echo  $items[$i]['itemName'] ;
			?>
			</td>
			<td class="form_td06">
				<!-- form to edit  item -->
				<div class="flt_l">
					<form enctype="multipart/form-data" method="post" action="addItems.php" >
					<div><input type="hidden" name="itemNbrEdit" value="<?php  echo $i;   ?>" /> </div>
					<div  class="editButton"> <input type="image" alt="編集" src="images/btn_edit.gif" /> </div>
					</form>
				</div>
				<div class="flt_l">
					<form enctype="multipart/form-data" method="post" action="addItems.php" >
					<div><input type="hidden" name="itemNbrDelete" value="<?php  echo $i;   ?>" /> </div>
					<div  class="deleteButton"> <input type="image" alt="削除" src="images/btn_delete.gif" /> </div>
					</form>
				</div>
			</td>
			</tr>


			<?php
			//end of FOR
}
			?>
		</table>
		<br />
		<div class="kiyaku">
			<h3>【adoor】利用規約</h3>

			<div class="kiyaku-text">
				<h4>第1条&nbsp;&nbsp;サービスの提供</h4>
				<p>STU株式会社（以下「当社」といいます。）は、本規約を承認した方（以下「利用者」といいます。）に対して、本規約に基づき、当社所定の方式で、コンピューターシステム利用サービス（以下、「本サービス」といいます。）を提供します。</p>

				<h4>第2条&nbsp;&nbsp;利用規約の変更</h4>
				<p>当社は、本規約を変更することができるものとします。本規約を変更した場合、本サービスに関する一切の事項は変更後の規約によるものとします。
				</p>

				<h4>第3条&nbsp;&nbsp;コンピューターシステムの利用許諾</h4>
				<p>1.当社は、利用者が当社所定の基準に適合する場合、当社の所定の範囲及び条件のもと当社所定のコンピューターシステムの利用を許諾します。<br />2.利用者は、当社の所定の範囲及び条件以外でのコンピューターシステムの利用をしてはならないものとします。</p>

				<h4>第4条&nbsp;&nbsp;当社の役割</h4>
				<p>1.当社は、利用者の入力した情報に関し、売買契約等の締結、代理、媒介、仲介、保証等一切いたしません。
				<br />2.当社は、本サービスに関して、利用者、当社の開設するウェブサイトへの情報掲載者（以下、「情報掲載者」といいます。）その他の第三者との間で発生した一切のトラブルについて、関知しません。したがって、これらのトラブルについては、当事者間で話し合い、訴訟などにより解決するものとします。
				</p>

				<h4>第5条&nbsp;&nbsp;入力情報等について</h4>
				<p>1.利用者は以下の情報を入力することはできません。<br /></p>
				<ul>
				<li>a&nbsp;&nbsp;真実でないもの</li>
				<li>b&nbsp;&nbsp;他人の名誉または信用を傷つけるもの</li>
				<li>c&nbsp;&nbsp;わいせつな表現を含むもの</li>
				<li>d&nbsp;&nbsp;特許権、実用新案権、意匠権、商標権、著作権、肖像権その他の他人の権利を侵害するもの</li>
				<li>e&nbsp;&nbsp;コンピュータウィルスを含むもの</li>
				<li>f&nbsp;&nbsp;公序良俗に反するもの</li>
				<li>g&nbsp;&nbsp;法令に違反するもの</li>
				<li>h&nbsp;&nbsp;当社が不適当と判断するもの</li>
				</ul>

				<p>2.当社は、利用者の入力情報等が本規約に違反する場合、その他の当社が不適当と判断した場合には、入力情報等を削除することができるものとします。<br />3.当社は、利用者が古物営業法（昭和24年法律108号）に定める古物商であるときは、本サービスの提供をお断りします。

				</p>


				<h4>第6条&nbsp;&nbsp;利用規約の違反等について</h4>
				<p>1.利用者が規約に違反した場合、当社又は情報掲載者に不当に迷惑をかけたと当社が判断した場合、当社は、当社の定める期間、本サービスその他当社が提供するサービスの利用を認めないことができるものとします。<br />2.当社の措置により利用者に損害が生じても、当社は、一切損害を賠償しません。
				</p>

				<h4>第7条&nbsp;&nbsp;利用者の個人情報及び利用情報</h4>
				<p>1.当社は、必要に応じて、利用者の個人情報及び利用情報を情報掲載者に開示することができるものとします。<br />2.当社は、本サービスの運営及び本サービスに関するマーケティングのため、利用者の個人情報及び利用情報を、特定個人を識別することができない方法により統計データとして利用することができるものとします。<br />3.当社は、利用者に対し、当社、情報掲載者その他の第三者の広告又は宣伝等のために電子メールその他の広告宣伝物を送信することができるものとします。<br />4.当社は、以下に定める場合を除き、利用者の個人情報を第三者に提供しません。
				</p>
				<ul>
				<li>a&nbsp;&nbsp;本条1項に定める場合</li>
				<li>b&nbsp;&nbsp;利用者の同意がある場合</li>
				<li>c&nbsp;&nbsp;裁判所、検察庁、警察、税務署、弁護士会またはこれらに準じた権限を有する機関から利用者情報の開示を求められた場合</li>
				<li>d&nbsp;&nbsp;当社が行う業務の全部または一部を第三者に委託する場合</li>
				<li>e&nbsp;&nbsp;当社に対して秘密保持義務を負う者に対して開示する場合</li>
				<li>f&nbsp;&nbsp;当社の権利行使に必要な場合</li>
				<li>g&nbsp;&nbsp;法合併、営業譲渡その他の事由による事業の承継の際に、事業を承継する者に対して開示する場合</li>
				</ul>

				<h4>第8条&nbsp;&nbsp;サービスの提供条件</h4>
				<p>1.当社は、メンテナンス等のために、利用者に通知することなく、本サービスを停止し、または変更することがあります。<br />
				2.本サービスの提供を受けるために必要な機器、通信手段などは、利用者の費用と責任で備えるものとします。<br />
				3.当社は、本サービスに中断、中止その他の障害が出ないことを保証しません。
				</p>

				<h4>第9条&nbsp;&nbsp;当社の責任</h4>
				<p>本サービスの利用により利用者に損害が生じた場合でも当社は一切責任を負わないものとします。
				</p>

				<h4>第10条&nbsp;&nbsp;サービス廃止</h4>
				<p>当社は、当社の都合によりいつでも本サービスを廃止できるものとします。
				</p>

				<h4>第11条&nbsp;&nbsp;準拠法</h4>
				<p>本規約に関する準拠法は日本法とします。
				</p>

				<h4>第12条&nbsp;&nbsp;管轄裁判所</h4>
				<p>利用者と当社との間で訴訟が生じた場合、名古屋地方裁判所を専属的管轄裁判所とします。</p>

			</div><!--//kiyaku-text-->
		</div>

		<div class="form_bt">
			<img class="imgover" onclick="location.href='userInfoForm.php'" src="images/btn_back.gif" alt="戻る" />&nbsp;&nbsp;
			<img class="imgover" onclick="location.href='finish.php'" src="images/btn_accept.gif" alt="利用規約に同意して送信する" />
		</div>
	</div>
	<!--form end-->

	<!--footer start-->
	<div class="totop"><a href="#">▲ページトップに戻る</a></div>

	<div id="footer_navi">取扱商品：<a href="../products/index.html">家電買取</a>、<a href="../products/design_furniture.html">家具買取</a>[<a href="../products/bed.html">ベッド</a>、<a href="../products/antique.html">北欧ミッドセンチュリー</a>、<a href="../products/design_furniture.html">デザイナーズ家具</a>] <a href="../products/bicycle.html">自転車</a> <a href="../products/instrument.html">楽器買取</a>・<a href="../products/audio.html">オーディオ</a>・<a href="https://www.a-zrecycle.com/">家具買取のadoor HOME</a></div>

	<div id="copy">
<img src="../images/copyright.gif" class="copyright" /><div class="navi_company"><img src="../images/ico_bottom_arrow.gif" /> <a href="../about/index.html">会社概要</a><br>
<img src="../images/ico_bottom_arrow.gif" /> <a href="../sitemap.html">サイトマップ</a></div>
</div>
	<!--footer end-->
</div>

</body>

</html>
