<?php

//create a session
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE );

//~ echo '<pre>' . print_r($_POST, true) . '</pre>';
//~ reset($_SESSION) ;


//if we delete an item
if(isset($_POST['itemNbrDelete'])){

	//delete item
	unset($_SESSION['items'][$_POST['itemNbrDelete']]);

	//indexes numerically the array
	$_SESSION['items'] = array_values($_SESSION['items']);

	$items  = $_SESSION['items'] ;

	//~ echo '<pre>' . print_r($_SESSION, true) . '</pre>';


	//if we edit an item
}else if(isset($_GET['edit'])){

	//index of the item
	$itemNbr = $_POST['itemNbr'] ;

	//category of the item
	$itemCategory = $_SESSION['items'][$itemNbr]['cat'] ;


	//item from the form
	//****************************____________家電____________************************************************
	if($itemCategory == "electronicDevice" ){

		//include upload_photo.php for the sended pictures
		include "upload_photo.php" ;

		//update item
		$item = array(
			"cat" => $itemCategory ,
			"itemName" => $_POST['itemName'] ,
			"itemYear" =>  $_POST['itemYear'] ,
			"itemBrand" => $_POST['itemBrand'] ,
			"itemModelNbr" => $_POST['itemModelNbr'] ,
			"itemCondition" => $_POST['itemCondition'] ,
			"itemAccessory" => $_POST['itemAccessory'] ,
			// // "itemThrowAway" => $_POST['itemThrowAway'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'] ,
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;
	}

	//****************************____________ブランド家具・デザイナーズ家具____________************************************************
	if($itemCategory == "furniture" ){

		//include upload_photo.php for the sended pictures
		include "upload_photo.php" ;

		$item = array(
			"cat" => $itemCategory ,
			"itemName" => $_POST['itemName'] ,
			"itemYear" =>  $_POST['itemYear'] ,
			"itemBrand" => $_POST['itemBrand'] ,
			// "itemModelNbr" => $_POST['itemModelNbr'] ,
			"itemCondition" => $_POST['itemCondition'] ,
			// "itemSize" => $_POST['itemSize'] ,
			// "itemMaterial" => $_POST['itemMaterial'] ,
			// "itemThrowAway" => $_POST['itemThrowAway'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'] ,
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;
	}

	//****************************____________自転車____________************************************************
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
			// "itemThrowAway" => $_POST['itemThrowAway'] ,
			"itemAppeal" => $_POST['itemAppeal'] ,
			"itemComment" => $_POST['itemComment'] ,
			"photoItem1" =>  $picturePath1,
			"photoItem2" =>  $picturePath2,
			"photoItem3" =>  $picturePath3
		) ;
	}

	//****************************____________楽器・オーディオ____________************************************************
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

	//update the $_SESSION['items']
	if(!empty($item)){
		$_SESSION['items'][$itemNbr] = $item  ;
	}

	//to display information in the list of items
	$items  = $_SESSION['items'] ;



}else{

	//values from the form

	//type of sending
	if( isset($_POST['typeOfSending'])){
		$_SESSION['typeOfSending'] = $_POST['typeOfSending'] ;
	}

	//item Category
	$itemCategory = $_POST['itemCategory'] ;

	//create or update the address of the shop
	if(!empty($_POST['zip21']) OR !empty($_POST['zip22'])){
		$_SESSION['zip21'] = $_POST['zip21'] ;
		$_SESSION['zip22'] = $_POST['zip22'] ;
		$_SESSION['pref21'] = $_POST['pref21'] ;
		$_SESSION['addr21'] = $_POST['addr21'] ;
	}

	if(!empty($itemCategory )){


		//item from the form
		//****************************____________家電____________************************************************
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
				// "itemThrowAway" => $_POST['itemThrowAway'] ,
				"itemAppeal" => $_POST['itemAppeal'] ,
				"itemComment" => $_POST['itemComment'] ,
				"photoItem1" =>  $picturePath1,
				"photoItem2" =>  $picturePath2,
				"photoItem3" =>  $picturePath3
			) ;
		}

		//****************************____________ブランド家具・デザイナーズ家____________************************************************
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
				// "itemThrowAway" => $_POST['itemThrowAway'] ,
				"itemAppeal" => $_POST['itemAppeal'] ,
				"itemComment" => $_POST['itemComment'] ,
				"photoItem1" =>  $picturePath1,
				"photoItem2" =>  $picturePath2,
				"photoItem3" =>  $picturePath3
			) ;
		}

		//****************************____________自転車____________************************************************
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
				// "itemThrowAway" => $_POST['itemThrowAway'] ,
				"itemAppeal" => $_POST['itemAppeal'] ,
				"itemComment" => $_POST['itemComment'] ,
				"photoItem1" =>  $picturePath1,
				"photoItem2" =>  $picturePath2,
				"photoItem3" =>  $picturePath3
			) ;
		}

		//****************************____________楽器・オーディオ____________************************************************
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


		//create or update $_SESSION['items']
		if(isset($_SESSION['items'])) {
			$_SESSION['items'][] = $item  ;
			$items  = $_SESSION['items'] ;
			$_SESSION['items'] = $items ;
		}else{
			//~ $item_seq = count($_SESSION[items]);
			$items = array(0 => $item);
			$_SESSION['items'] = $items ;
		}
	}else{

		$items  = $_SESSION['items'] ;
	}
}

//~ echo '<pre>' . print_r($_SESSION, true) . '</pre>';
//~ reset($_SESSION) ;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, user-scalable=no">
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
<title>お買取のお申し込み｜家具・家電・楽器の買取専門ショップ「a door アドア」 </title>
<meta name="description" content="「アドア東京」では家具買取をはじめ、家電・楽器等広いジャンルを扱う買取専門ショップです。
世田谷区をはじめ目黒区・港区・渋谷区・江東区など23区を中心に出張買取キャンペーン実施中です。即日対応可！迅速に対応いたします。" />
<meta name="keywords" content="家具、家電、楽器、買取専門、家具買取、アドア東京" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="../css/additional.css" rel="stylesheet" type="text/css" />
<link rel="contents" href="/" title="ホーム" />
<link rel="index" href="/sitemap/" title="サイトマップ" />
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon/favicon-192x192.png">
<!-- Javascript  -->

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js'></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</head>

<body
<?php
//if we edit item, we show the right form
if(isset($_POST['itemNbrEdit'])){
	$itemNbrEdit = $_POST['itemNbrEdit'];
	?>
	onload="editSelected('<?php echo $itemNbrEdit; ?>','<?php echo $items[$_POST['itemNbrEdit']]['cat']?>')"
	<?php
}
?>
>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
	src="https://www.googletagmanager.com/ns.html?id=GTM-WCGNPRD"
	height="0" width="0"
	style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="renew">

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
		<div id="pankuzu"><div class="wrap"><a href="https://www.a-zrecycle.com/">家具、家電、楽器買取Home</a>　>　<span class=""><a href="./index.php">お買取のお申し込み</a></span>　>　<span class="bold">商品情報の入力</span></div></div>
		<!--pankuzu end-->

		<section class="ttl">
			<h2>Contact<span>お問い合わせ</span></h2>
		</section>

		<?php
		//if there is error, it displays something
		if (!empty($uploadError)){
			echo '<div class="uploadError">' . $uploadError . '</div>';
		}
		?>
		<div class="form_bg_wrap">
			<div class="form_bg">
				<div class="contact__step">
					<div class="aside">
						<ol class="step">
							<li class="is-current"><span class="txt">1.商品情報の入力</span></li>
							<li><span class="txt">2.お客さま情報の入力</span></li>
							<li><span class="txt">3.入力内容の確認</span></li>
							<li><span class="txt">4.お申し込み完了</span></li>
						</ol>
					</div>
				</div>
				<div id="displayError"> </div>
				<form enctype="multipart/form-data" method="post" action="" id="shopForm" >
					<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
						<tr>
							<td colspan="2" class="form_td01">追加の商品情報を入力してください</td>
						</tr>
						<tr>
							<td  class="form_td02">商品カテゴリ<span class="txt_red">必 須</span></td>
							<td  class="form_td04">
								<div class="pseudo">
									<select name="itemCategory" onchange="checkSelectedItemPage(this.options[this.options.selectedIndex].value);">

										<?php
										if($items[$itemNbrEdit]['cat'] == "furniture"){
											?>
											<option value="furniture">ブランド家具・デザイナーズ家具 </option>
											<?php
										}else if($items[$itemNbrEdit]['cat'] == "electronicDevice"){
											?>
											<option value="electronicDevice">家電</option>
											<?php
										} else if($items[$itemNbrEdit]['cat'] == "bicycle"){
											?>
											<option value="bicycle">自転車</option>
											<?php
										}else if($items[$itemNbrEdit]['cat'] == "musicInstrument"){
											?>
											<option value="musicInstrument">楽器・オーディオ </option>
											<?php
										}else {
											?>
											<option value="">商品カテゴリを選択してください</option>

											<option value="furniture">ブランド家具・デザイナーズ家具 </option>
											<option value="electronicDevice">家電</option>
											<option value="bicycle">自転車</option>
											<option value="musicInstrument">楽器・オーディオ </option>

											<?php
										}
										?>

									</select>
								</div>
							</td>
						</tr>
					</table>
					<div id="resultForm"></div>
				</form>
				<br />
				<div class="inner_wrap">
					<div class="form_bt">
						<?php
						//if this is the edit page
						if(isset($_POST['itemNbrEdit'])){
							?>
							<!-- <img class="imgover" onclick="" src="images/btn_decide.gif" alt="続けて商品を追加する" /> -->
							<button type="button" class="button blk" onclick="doSubmit('edit')">この内容で登録する</button>
							<?php
							//if it's not the edit page
						}else{
							?>
							<button type="button" class="button blk" onclick="doSubmit(0)"><strong>+</strong>続けて商品を追加する</button>
							<!-- <img class="imgover" onclick="" src="images/btn_decide.gif" alt="続けて商品を追加する" /> -->
							<?php
						}
						?>
					</div>
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
									echo  "<div class='productName'>" . $items[$i]['itemName'] . "</div>";
									?>
								</td>
								<td class="form_td06">
									<div class="flt_l">
										<!-- form to edit  item -->
										<form enctype="multipart/form-data" method="post" action="" >
											<div><input type="hidden" name="itemNbrEdit" value="<?php  echo $i;   ?>" /> </div>
											<!-- <div class="editButton"> <input type="image" alt="編集" src="images/btn_edit.gif" /> </div> -->
											<button class="button gry">編集</button>
										</form>
									</div>
									<div class="flt_l">
										<!-- form to delete item -->
										<form enctype="multipart/form-data" method="post" action="" >
											<div><input type="hidden" name="itemNbrDelete" value="<?php  echo $i;   ?>" /> </div>
											<button class="button blk">削除</button>
											<!-- <div class="deleteButton"> <input type="image" alt="削除" src="images/btn_delete.gif" /> </div> -->
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


					<div class="form_bt">
						<?php
						//if this is the edit page, the bottom  button are deleted
						if(isset($_POST['itemNbrEdit'])){

						}else{
							?>
							<!-- <a href="index.php"><img alt="戻る" src="images/btn_back.gif" class="imgover" /></a>&nbsp;&nbsp;
							<img class="imgover" id="btnSubmit" onclick="doSubmit(3)" src="images/btn_next.gif" alt="お客様情報の入力へ" /> -->
							<a href="./index.php" class="button gry"  >≪　戻る</a>
							<button type="button" class="button org" onclick="doSubmit(3)" id="btnSubmit">»  お客様情報の入力へ</button>
							<?php
						}
						?>
					</div>
				</div>

			</div>
		</div>
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
