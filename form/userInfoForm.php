<?php

session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE );

//~ echo '<pre>' . print_r($_SESSION, true) . '</pre>';
//~ echo '<pre>' . print_r($_POST, true) . '</pre>';


//values from form

//type of sending
if( isset($_POST['typeOfSending'])){
	$_SESSION['typeOfSending'] = $_POST['typeOfSending'] ;
}

//items
$itemCategory = $_POST['itemCategory'] ;


//create or update the adress of the shop
if(!empty($_POST['zip21']) OR !empty($_POST['zip22'])){
	$_SESSION['zip21'] = $_POST['zip21'] ;
	$_SESSION['zip22'] = $_POST['zip22'] ;
	$_SESSION['pref21'] = $_POST['pref21'] ;
	$_SESSION['addr21'] = $_POST['addr21'] ;
}

if(!empty($itemCategory )){
	//update or create $_SESSION['item_seq']
	if(!isset($_SESSION['item_seq'])){
		$_SESSION['item_seq'] = 0;
		$item_seq = 0;
	}else{
		$item_seq = $_SESSION['item_seq']  ;
		$item_seq++ ;
		$_SESSION['item_seq'] = $item_seq ;
	}

	//item from the form
	//家電
	if($itemCategory == "electronicDevice" ){

		//include upload_photo.php for the sended pictures
		include "upload_photo.php" ;


		$item = array(
			"cat" => $itemCategory ,
			"itemName" => $_POST['itemName'] ,
			"itemYear" =>  $_POST['itemYear'] ,
			"itemBrand" => $_POST['itemBrand'] ,
			"itemModelNbr" => $_POST['itemModelNbr'] ,
			"itemCondition" => $_POST['itemCondition'] ,
			"itemAccessory" => $_POST['itemAccessory'] ,
			"itemThrowAway" => $_POST['itemThrowAway'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'],
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;


		//~ echo '<pre>' . print_r($_FILES, true) . '</pre>';





	}

	//ブランド家具・デザイナーズ家具
	if($itemCategory == "furniture" ){

		//include upload_photo.php for the sended pictures
		include "upload_photo.php" ;

		$item = array(
			"cat" => $itemCategory ,
			"itemName" => $_POST['itemName'] ,
			"itemYear" =>  $_POST['itemYear'] ,
			"itemBrand" => $_POST['itemBrand'] ,
			"itemModelNbr" => $_POST['itemModelNbr'] ,
			"itemCondition" => $_POST['itemCondition'] ,
			"itemSize" => $_POST['itemSize'] ,
			"itemMaterial" => $_POST['itemMaterial'] ,
			"itemThrowAway" => $_POST['itemThrowAway'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'] ,
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;
	}

	//自転車
	if($itemCategory == "bicycle" ){

		//include upload_photo.php for the sended pictures
		include "upload_photo.php" ;

		$item = array(
			"cat" => $itemCategory ,
			"itemName" => $_POST['itemName'] ,
			"itemYear" =>  $_POST['itemYear'] ,
			"itemBrand" => $_POST['itemBrand'] ,
			"kindOfBike" => $_POST['kindOfBike'] ,
			"itemCondition" => $_POST['itemCondition'] ,
			"itemInch" => $_POST['itemInch'] ,
			"itemAccessory" => $_POST['itemAccessory'] ,
			"itemThrowAway" => $_POST['itemThrowAway'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'] ,
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;
	}

	//楽器・オーディオ
	if($itemCategory == "musicInstrument" ){

		//include upload_photo.php for the sended pictures
		include "upload_photo.php" ;

		$item = array(
			"cat" => $itemCategory ,
			"itemName" => $_POST['itemName'] ,
			"itemYear" =>  $_POST['itemYear'] ,
			"itemInitialCost" =>  $_POST['itemInitialCost'] ,
			"itemBrand" => $_POST['itemBrand'] ,
			"itemModelName" => $_POST['itemModelName'] ,
			"itemCondition" => $_POST['itemCondition'] ,
			"itemUseRate" => $_POST['itemUseRate'] ,
			"itemAccessory" => $_POST['itemAccessory'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'] ,
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;
	}

	//update or create $_SESSION['items']
	if(isset($_SESSION['items'])) {
		$_SESSION['items'][] = $item  ;
		$items  = $_SESSION['items'] ;
		$_SESSION['items'] = $items ;
	}else{

		$items = array($item_seq => $item);
		$_SESSION['items'] = $items ;
	}
}



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
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>お買取のお申し込み｜家具・家電・楽器の買取専門ショップ「a door アドア」 </title>
<meta name="description" content="「アドア東京」では家具買取をはじめ、家電・楽器等広いジャンルを扱う買取専門ショップです。
世田谷区をはじめ目黒区・港区・渋谷区・江東区など23区を中心に出張買取キャンペーン実施中です。即日対応可！迅速に対応いたします。" />
<meta name="keywords" content="家具、家電、楽器、買取専門、家具買取、アドア東京" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="../css/additional.css" rel="stylesheet" type="text/css" />
<link rel="contents" href="/" title="ホーム" />
<link rel="index" href="/sitemap/" title="サイトマップ" />
<!-- Javascript  -->

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src=' https://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js'></script>
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
		<!-- End Google Tag Manager (noscript) -->		<div id="renew">

			<!--header start-->
			<div class="h1_area">
				<!-- <h1>お申し込みページ｜家具・家電・楽器の買取専門ショップ「a door アドア　東京」</h1> -->
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
				<!-- <br clear="all" /> -->
			</div>

			<div class="headerarea">
				<!-- <br> -->
				<h1><a href="https://www.a-zrecycle.com/"><img src="../images/logo.gif" alt="アドア東京 ロゴ" /></a></h1>
			</div>

			<!--pankuzu start-->
			<div id="pankuzu"><div class="wrap"><a href="https://www.a-zrecycle.com/">家具、家電、楽器買取Home</a>　>　<span class=""><a href="./index.php">お買取のお申し込み</a></span>　>　<span class="bold">お客さま情報の入力</span></div></div>
			<!--pankuzu end-->

			<section class="ttl">
				<h2>Contact<span>お問い合わせ</span></h2>
			</section>

			<div class="form_bg">
				<?php
				//if there is error, it displays something
				if (!empty($uploadError)){
					echo '<div class="uploadError">' . $uploadError . '</div>';
				}
				?>
				<div id="displayError"> </div>
				<form enctype="multipart/form-data" method="post" action="" id="shopForm" >
					<div class="contact__step">
						<div class="aside">
							<ol class="step">
								<li><span class="txt">1.商品情報の入力</span></li>
								<li class="is-current"><span class="txt">2.お客さま情報の入力</span></li>
								<li><span class="txt">3.入力内容の確認</span></li>
								<li><span class="txt">4.お申し込み完了</span></li>
							</ol>
						</div>
					</div>
					<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
						<tr>
							<td colspan="2" class="form_td01">お客さま情報の入力</td>
						</tr>
						<tr>
							<td class="form_td02">氏名<span class="txt_red">必 須</span></td>
							<td class="form_td03">
								<input type="text" name="UserName" value="<?php  echo $_SESSION['user']['UserName'] ;  ?>" class="form_waku03" placeholder="例）山田太郎" />
							</td>
						</tr>
						<tr>
							<td class="form_td02">メールアドレス<span class="txt_red">必 須</span></td>
							<td class="form_td03">
								<input type="text" name="userMailAddress" value="<?php  echo $_SESSION['user']['userMailAddress'] ;  ?>" class="form_waku03" placeholder="例）info@example.com" />
								<p style="font-size:12px;color:#666;margin-top:5px;line-height:1.6;">※Gmailは弊社からの返信が迷惑メールフォルダに振り分けられる場合がありますので送信後は必ずご確認ください。<br>※48時間以内に返信が無い場合はinfo@adoor.jpへ直接メール、又はお電話でお問合せ下さい。<br>※hotmail、outlook、msn、ezweb、docomoなど一部のメールアドレスは、システムにブロックされる可能性が非常に高く、ご使用をお控え下さい。</p>
							</td>
						</tr>
					</table>
					<br />

					<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
						<!-- <tr>
						<td colspan="2" class="form_td01">詳細情報を入力してください</td>
					</tr> -->
					<tr>
						<td class="form_td02">住所</td>
						<td class="form_td04">
							〒<input type="text" name="zip21" class="form_waku01" maxlength="3" value="<?php  if(isset($_SESSION['user']['userZip21'])){ echo $_SESSION['user']['userZip21']; }else {echo $_SESSION['zip21'] ; }   ?>" />
							－ <input type="text" name="zip22" class="form_waku01" maxlength="4"  value="<?php  if(isset($_SESSION['user']['userZip22'])){ echo $_SESSION['user']['userZip22']; }else {echo $_SESSION['zip22'] ; }   ?>" onkeyup="AjaxZip3.zip2addr('zip21','zip22','pref21','addr21','strt21');" /> 　<a href="http://www.post.japanpost.jp/zipcode/index.html" target="_blank">郵便番号が分からない方</a><br />
								<input type="text" name="pref21" value="<?php  if(isset($_SESSION['user']['userPref21'])){ echo $_SESSION['user']['userPref21']; }else {echo $_SESSION['pref21'] ; }  ?>" class="form_waku02" placeholder="市区町村"/><br />

								<input type="text" name="addr21" value="<?php  if(isset($_SESSION['user']['userAddr21'])){ echo $_SESSION['user']['userAddr21']; }else {echo $_SESSION['addr21'] ; }   ?>" class="form_waku03" />  <br />
								エレベーター：
<!-- <input type="radio" <?php if($_SESSION['user']['elevator'] == "yes"){ echo 'checked="checked"' ;}?> name="elevator" value="yes" />あり
								<input type="radio"  <?php if($_SESSION['user']['elevator'] == "no") { echo 'checked="checked"' ; }?> name="elevator" value="no" />なし -->

								<div class="wrapper ib">
									<input type="radio" <?php if($_SESSION['user']['elevator'] == "yes"){ echo 'checked="checked"' ;}?> name="elevator" value="yes" id="yes"/>
									<label for="yes" class="radiowrap">
										<span class="form_bold">あり</span>
									</label>
								</div>
								<div class="wrapper ib">
									<input type="radio"  <?php if($_SESSION['user']['elevator'] == "no") { echo 'checked="checked"' ; }?> name="elevator" value="no" id="no"/>
									<label for="no" class="radiowrap">
										<span class="form_bold">なし</span>
									</label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="form_td02">電話番号</td>
							<td class="form_td03">
								<input type="text" name="UserTelNumber" value="<?php  echo $_SESSION['user']['UserTelNumber'] ;  ?>" class="form_waku03" placeholder="例）03-1234-5678" />
							</td>
						</tr>
						<tr>
							<td class="form_td02">電話を受けてもよい時間帯</td>
							<td class="form_td03">
								<input type="text" name="deliveryHour" value="<?php  echo $_SESSION['user']['deliveryHour'] ;  ?>" class="form_waku04" placeholder="例）平日は19:00以降、土日休日は10:00～17:00" />（50文字まで）<br />
							</td>
						</tr>
						<tr>
							<td class="form_td02">ショップへのコメント</td>
							<td class="form_td04">
								<textarea  name="comment" rows="8" cols="50" class="form_waku04" wrap="physical" placeholder="その他、搬出状況など（戸建の場合は2Fに設置、階段から搬出可能。高さ制限のない駐車場有などをお伝えいただくとスムーズです）" onKeyup="
								o=document.getElementById('slen');
								n=this.value.replace(/\s|　/gm,'').length;
								o.value=n;
								o.innerHTML=n;
								o.style.color=(n>50)?'red':'tan';
								document.getElementById('mes').innerHTML=(n>400)?'文字　文字制限を越えました':'文字';
								document.getElementById('mes2').innerHTML=(n>400)?'':'　あと'+(400-n)+'文字です。';
								"><?php  echo $_SESSION['user']['comment'] ;  ?></textarea><br />
								（400文字まで）
								<p class="charaNum">
									<span id="slen">
									</span>
									<span id="mes" style="font-size:12px">文字</span>
									<span id="mes2" style="font-size:12px"></span></p>
								</td>
							</tr>
						</table>
						<br />
						<div class="form_bt">
							<!-- <img class="imgover" onclick="location.href='addItems.php'" src="images/btn_back.gif" alt="戻る" />&nbsp;&nbsp;
							<img class="imgover" onclick="doSubmit(2)" src="images/btn_confirm.gif" alt="入力内容の確認" /> -->
							<button type="button" class="button gry" onclick="location.href='addItems.php'">≪　戻る</button>
							<button type="button" class="button org" onclick="doSubmit(2)">»　入力内容の確認</button>
						</div>
					</form>
				</div>
				<!--form end-->
				<br clear="all" />
				<!--footer start-->
				<footer class="form_footer">
					<div id="copy">
						<span>Copylight©2010 STU Corporation Group.All Reserved.</span>
						<!--footer end-->
					</div>
				</footer>
				<div class="sp_form_tel"><a href="tel:0120531017"><img src="./images/tel.svg" alt="">お電話でのお問い合わせはこちら</a></div>
				<div class="form_tel"><a href="tel:0120531017"><img src="../images/cmn/header_phone.gif" alt=""></a></div>
			</div>

		</body>
		</html>
