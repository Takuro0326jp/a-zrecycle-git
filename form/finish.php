<?php

//create a session
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//~ echo '<pre>' . print_r($_SERVER, true) . '</pre>';
//url for the pictures
$urlArrayExplode = explode("/", $_SERVER['PHP_SELF']);
$basePictureUrl = "http://" . $_SERVER['HTTP_HOST'] . "/";

//number of items
$item_seq = count($_SESSION["items"]);

//get items from the session
$items = $_SESSION['items'];

//variables for email
$customer_recipient = $_SESSION['user']['userMailAddress'];
// $company_recipient = 'test@ace-union.net';
// $email_sender = 'test@ace-union.net';
// $email_reply = 'test@ace-union.net';
$company_recipient = 'info@adoor.jp';
$email_sender = 'info@adoor.jp';
$email_reply = 'info@adoor.jp';
$report = "";

//mail's headers
$headers = 'From: "Adoor" <' . $email_sender . '>' . "\n";
$headers .= 'Return-Path: <' . $email_reply . '>' . "\n";
$headers .='Content-Type: text/plain; charset="UTF-8"' . "\n";
$headers .='Content-Transfer-Encoding: 8bit';

$customer_message = $_SESSION['user']['UserName'] . "様" . "\n" .
"\n" .
"この度はお申込みいただき誠にありがとうございました。" . "\n" .
"内容を確認のうえ、担当者より改めてご連絡させていただきます。" . "\n" .
"ご不明な点がありましたらお気軽にお問い合わせください。" . "\n" .
"\n" .
"お問い合わせは、下記に記載のお電話またはメールにてお願いします。" . "\n".
"\n" .
"-----------------------------------------------" . "\n" .
"買取専門ショップ「アドア東京」" . "\n" .
"〒158-0098 東京都世田谷区上用賀6-26-7永井ビル1F" . "\n" .
"TEL  : 03-3706-3380" . "\n" .
"MAIL : info@adoor.jp" . "\n" .
"-----------------------------------------------" . "\n" .
"\n\n";


//put the picture in the secure folder
//for ($i = 0; $i <= $item_seq - 1; $i++) {
//
//}
//for mail content : items
$items_content = "【商品リスト】" . "\n";
$pictures_content = "";
for ($i = 0; $i <= $item_seq - 1; $i++) {

	if ($items[$i]['cat'] == "electronicDevice") {

		//initialization
		$UrlFinalpicture1 = "";
		$UrlFinalpicture2 = "";
		$UrlFinalpicture3 = "";

		if (!empty($items[$i]['photoItem1'])) {
			//format URL picture 1
			$urlExplodePicture1 = explode("/", $items[$i]['photoItem1']);
			$UrlFinalpicture1 = $basePictureUrl . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/" . $urlExplodePicture1[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem1'], $createFolder . $urlExplodePicture1[4]);
		}

		if (!empty($items[$i]['photoItem2'])) {
			//format URL picture 2
			$urlExplodePicture2 = explode("/", $items[$i]['photoItem2']);
			$UrlFinalpicture2 = $basePictureUrl . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/" . $urlExplodePicture2[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem2'], $createFolder . $urlExplodePicture2[4]);
		}

		if (!empty($items[$i]['photoItem3'])) {
			//format URL picture 3
			$urlExplodePicture3 = explode("/", $items[$i]['photoItem3']);
			$UrlFinalpicture3 = $basePictureUrl . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/" . $urlExplodePicture3[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem3'], $createFolder . $urlExplodePicture3[4]);
		}

		// if ($items[$i]['itemThrowAway'] == "yes") {
		// 	$itemThrowAway = '処分費用を教えて欲しい';
		// } else if ($items[$i]['itemThrowAway'] == "no") {
		// 	$itemThrowAway = '処分は考えない';
		// }
		if($UrlFinalpicture1 || $UrlFinalpicture2 || $UrlFinalpicture3 ){
			$items_content .= "\n家電" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"型番: " . $items[$i]['itemModelNbr'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"付属品: " . $items[$i]['itemAccessory'] . "\n" .
			// "買い取れない場合は: " . $itemThrowAway . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n".
			"アイテム画像1: " . $UrlFinalpicture1 . "\n" .
			"アイテム画像2: " . $UrlFinalpicture2 . "\n" .
			"アイテム画像3: " . $UrlFinalpicture3 . "\n";
		}else{
			$items_content .= "\n家電" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"型番: " . $items[$i]['itemModelNbr'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"付属品: " . $items[$i]['itemAccessory'] . "\n" .
			// "買い取れない場合は: " . $itemThrowAway . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n";
		}
		// $items_content .= "\n家電" . "\n" .
		// "アイテム名: " . $items[$i]['itemName'] . "\n" .
		// "購入年月: " . $items[$i]['itemYear'] . "\n" .
		// "メーカー: " . $items[$i]['itemBrand'] . "\n" .
		// "型番: " . $items[$i]['itemModelNbr'] . "\n" .
		// "コンディション: " . $items[$i]['itemCondition'] . "\n" .
		// "付属品: " . $items[$i]['itemAccessory'] . "\n" .
		// // "買い取れない場合は: " . $itemThrowAway . "\n" .
		// "アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
		// "当店へのメッセージ: " . $items[$i]['itemComment'] . "\n";
		// $pictures_content .= "アイテム画像1: " . $UrlFinalpicture1 . "\n" .
		// "アイテム画像2: " . $UrlFinalpicture2 . "\n" .
		// "アイテム画像3: " . $UrlFinalpicture3 . "\n";
	}

	if ($items[$i]['cat'] == "furniture") {

		//initialization
		$UrlFinalpicture1 = "";
		$UrlFinalpicture2 = "";
		$UrlFinalpicture3 = "";

		if (!empty($items[$i]['photoItem1'])) {
			//format URL picture 1
			$urlExplodePicture1 = explode("/", $items[$i]['photoItem1']);
			$UrlFinalpicture1 = $basePictureUrl . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/" . $urlExplodePicture1[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem1'], $createFolder . $urlExplodePicture1[4]);
		}

		if (!empty($items[$i]['photoItem2'])) {
			//format URL picture 2
			$urlExplodePicture2 = explode("/", $items[$i]['photoItem2']);
			$UrlFinalpicture2 = $basePictureUrl . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/" . $urlExplodePicture2[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem2'], $createFolder . $urlExplodePicture2[4]);
		}

		if (!empty($items[$i]['photoItem3'])) {
			//format URL picture 3
			$urlExplodePicture3 = explode("/", $items[$i]['photoItem3']);
			$UrlFinalpicture3 = $basePictureUrl . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/" . $urlExplodePicture3[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem3'], $createFolder . $urlExplodePicture3[4]);
		}

		// if ($items[$i]['itemThrowAway'] == "yes") {
		// 	$itemThrowAway = '処分費用を教えて欲しい';
		// } else if ($items[$i]['itemThrowAway'] == "no") {
		// 	$itemThrowAway = '処分は考えない';
		// }
		if($UrlFinalpicture1 || $UrlFinalpicture2 || $UrlFinalpicture3 ){
			$items_content .= "\nブランド家具・デザイナーズ家具" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"品名: " . $items[$i]['itemModelNbr'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n".
			"アイテム画像1: " . $UrlFinalpicture1 . "\n" .
			"アイテム画像2: " . $UrlFinalpicture2 . "\n" .
			"アイテム画像3: " . $UrlFinalpicture3 . "\n";
		}else{
			$items_content .= "\nブランド家具・デザイナーズ家具" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"品名: " . $items[$i]['itemModelNbr'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n";
		}
	}

	if ($items[$i]['cat'] == "bicycle") {

		//initialization
		$UrlFinalpicture1 = "";
		$UrlFinalpicture2 = "";
		$UrlFinalpicture3 = "";

		if (!empty($items[$i]['photoItem1'])) {
			//format URL picture 1
			$urlExplodePicture1 = explode("/", $items[$i]['photoItem1']);
			$UrlFinalpicture1 = $basePictureUrl . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/" . $urlExplodePicture1[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem1'], $createFolder . $urlExplodePicture1[4]);
		}

		if (!empty($items[$i]['photoItem2'])) {
			//format URL picture 2
			$urlExplodePicture2 = explode("/", $items[$i]['photoItem2']);
			$UrlFinalpicture2 = $basePictureUrl . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/" . $urlExplodePicture2[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem2'], $createFolder . $urlExplodePicture2[4]);
		}

		if (!empty($items[$i]['photoItem3'])) {
			//format URL picture 3
			$urlExplodePicture3 = explode("/", $items[$i]['photoItem3']);
			$UrlFinalpicture3 = $basePictureUrl . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/" . $urlExplodePicture3[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem3'], $createFolder . $urlExplodePicture3[4]);
		}

		// if ($items[$i]['itemThrowAway'] == "yes") {
		// 	$itemThrowAway = '処分費用を教えて欲しい';
		// } else if ($items[$i]['itemThrowAway'] == "no") {
		// 	$itemThrowAway = '処分は考えない';
		// }
		if($UrlFinalpicture1 || $UrlFinalpicture2 || $UrlFinalpicture3 ){
			$items_content .= "\n自転車" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"自転車種類: " . $items[$i]['kindOfBike'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"インチ: " . $items[$i]['itemInch'] . "\n" .
			"付属品: " . $items[$i]['itemAccessory'] . "\n" .
			// "買い取れない場合は: " . $itemThrowAway . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n".
			"アイテム画像1: " . $UrlFinalpicture1 . "\n" .
			"アイテム画像2: " . $UrlFinalpicture2 . "\n" .
			"アイテム画像3: " . $UrlFinalpicture3 . "\n";
		}else{
			$items_content .= "\n自転車" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"自転車種類: " . $items[$i]['kindOfBike'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"インチ: " . $items[$i]['itemInch'] . "\n" .
			"付属品: " . $items[$i]['itemAccessory'] . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n";

		}
	}

	if ($items[$i]['cat'] == "musicInstrument") {

		//initialization
		$UrlFinalpicture1 = "";
		$UrlFinalpicture2 = "";
		$UrlFinalpicture3 = "";

		if (!empty($items[$i]['photoItem1'])) {
			//format URL picture 1
			$urlExplodePicture1 = explode("/", $items[$i]['photoItem1']);
			$UrlFinalpicture1 = $basePictureUrl . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/" . $urlExplodePicture1[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture1[1] . "/secure/" . $urlExplodePicture1[2] . "/" . $urlExplodePicture1[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem1'], $createFolder . $urlExplodePicture1[4]);
		}

		if (!empty($items[$i]['photoItem2'])) {
			//format URL picture 2
			$urlExplodePicture2 = explode("/", $items[$i]['photoItem2']);
			$UrlFinalpicture2 = $basePictureUrl . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/" . $urlExplodePicture2[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture2[1] . "/secure/" . $urlExplodePicture2[2] . "/" . $urlExplodePicture2[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem2'], $createFolder . $urlExplodePicture2[4]);
		}

		if (!empty($items[$i]['photoItem3'])) {
			//format URL picture 3
			$urlExplodePicture3 = explode("/", $items[$i]['photoItem3']);
			$UrlFinalpicture3 = $basePictureUrl . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/" . $urlExplodePicture3[4];
			//creation of the new folder
			$createFolder = "../" . $urlExplodePicture3[1] . "/secure/" . $urlExplodePicture3[2] . "/" . $urlExplodePicture3[3] . "/";
			if (!is_dir($createFolder)) {
				mkdir($createFolder, 0777, true);
			}
			//move the picture
			rename($items[$i]['photoItem3'], $createFolder . $urlExplodePicture3[4]);
		}

		if($UrlFinalpicture1 || $UrlFinalpicture2 || $UrlFinalpicture3 ){
			$items_content .= "\n楽器・オーディオ" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"購入時の価格: " . $items[$i]['itemInitialCost'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"モデル名、型番: " . $items[$i]['itemModelName'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"使用頻度: " . $items[$i]['itemUseRate'] . "\n" .
			"付属品: " . $items[$i]['itemAccessory'] . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n".
			"アイテム画像1: " . $UrlFinalpicture1 . "\n" .
			"アイテム画像2: " . $UrlFinalpicture2 . "\n" .
			"アイテム画像3: " . $UrlFinalpicture3 . "\n";
		}else{
			$items_content .= "\n楽器・オーディオ" . "\n" .
			"アイテム名: " . $items[$i]['itemName'] . "\n" .
			"購入年月: " . $items[$i]['itemYear'] . "\n" .
			"購入時の価格: " . $items[$i]['itemInitialCost'] . "\n" .
			"メーカー: " . $items[$i]['itemBrand'] . "\n" .
			"モデル名、型番: " . $items[$i]['itemModelName'] . "\n" .
			"コンディション: " . $items[$i]['itemCondition'] . "\n" .
			"使用頻度: " . $items[$i]['itemUseRate'] . "\n" .
			"付属品: " . $items[$i]['itemAccessory'] . "\n" .
			"アイテムのアピール: " . $items[$i]['itemAppeal'] . "\n" .
			"当店へのメッセージ: " . $items[$i]['itemComment'] . "\n";
		}
	}
} //end for

$items_content .= "\n\n\n";

//encoding in UTF_8
//~ $items_content = utf8_encode($items_content) ;
//for mail content : user information
$user_content = "【お客様情報】" . "\n\n";
if ($_SESSION['user']['elevator'] == "yes") {
	$elevator = 'あり';
} else if ($_SESSION['user']['elevator'] == "no") {
	$elevator = 'なし';
}

$user_content .= "氏名: " . $_SESSION['user']['UserName'] . "様\n" .
"メールアドレス: " . $_SESSION['user']['userMailAddress'] . "\n" .
"住所: " . "〒" . $_SESSION['user']['userZip21'] . "-" . $_SESSION['user']['userZip22'] . " " . $_SESSION['user']['userPref21'] . " " . $_SESSION['user']['userAddr21'] . "\n" .
"エレベーター: " . $elevator . "\n" .
"電話番号: " . $_SESSION['user']['UserTelNumber'] . "\n" .
"電話を受けてもよい時間帯: " . $_SESSION['user']['deliveryHour'] . "\n" .
"ショップへのコメント: " . $_SESSION['user']['comment'] . "\n";

$user_content .= "\n\n\n";

//encoding in UTF_8
//~ $user_content = utf8_encode ($user_content) ;
//for mail content : other information

if ($_SESSION['typeOfSending'] == "typeGoShop") {
	$typeOfSending = '店頭買取';
} else if ($_SESSION['typeOfSending'] == "typeSendItem") {
	$typeOfSending = '郵送買取';
} else if ($_SESSION['typeOfSending'] == "typeShopComing") {
	$typeOfSending = '出張買取';
}


$other_information = "買取方法: " . $typeOfSending . "\n" .
"買取希望のエリア: " . "〒" . $_SESSION['zip21'] . "-" . $_SESSION['zip22'] . " " . $_SESSION['pref21'] . " " . $_SESSION['addr21'] . "\n";
$other_information .= "\n\n\n";

//final message for customer
$customer_title = "【adoor】買取のお申し込みありがとうございました";
$customer_message .= $items_content . $user_content . $other_information;
// $customer_message .= $items_content . $user_content . $other_information . $pictures_content;

//final message for staff
$staff_title = "【adoor】お申し込みがありました";
$staff_message = "以下の内容でお申し込みがありました。" . "\n\n" .
$user_content . $other_information . $items_content;
// $user_content . $other_information . $items_content . $pictures_content;

//~ echo  nl2br($staff_message) ;
//mail for customer
if (mail($customer_recipient, $customer_title, $customer_message, $headers)) {
	$report .= "お申し込みありがとうございます。<br />
	お送りいただいた内容を確認の上、<br />
	担当者より改めてご連絡させていただきます。";

	//mail for staff
	mail($company_recipient, $staff_title, $staff_message, $headers);
} else {
	$report .= "メールを送信できませんでした。<br />
	再度お申し込みフォームにお送りいただくか、<br />下記までお問い合わせください。<br />
	TEL：03-3706-3380";
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
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N2H9XLN');</script>
<!-- End Google Tag Manager -->
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>お買取のお申し込み完了｜家具・家電・楽器の買取専門ショップ「a door アドア」</title>
<meta name="description" content="「アドア東京」では家具買取をはじめ、家電・楽器等広いジャンルを扱う買取専門ショップです。
世田谷区をはじめ目黒区・港区・渋谷区・江東区など23区を中心に出張買取キャンペーン実施中です。即日対応可！迅速に対応いたします。" />
<meta name="keywords" content="家具、家電、楽器、買取専門、家具買取、アドア東京" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="../css/additional.css" rel="stylesheet" type="text/css" />
<link rel="contents" href="/" title="ホーム" />
<link rel="index" href="/sitemap/" title="サイトマップ" />
<meta name="robots" content="noindex" />
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon/favicon-192x192.png">
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
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2H9XLN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
			<div id="pankuzu"><div class="wrap"><a href="https://www.a-zrecycle.com/">家具、家電、楽器買取Home</a>　>　<span class=""><a href="./index.php">お買取のお申し込み</a></span>　>　<span class="bold">お申し込み完了</span></div></div>
			<!--pankuzu end-->

			<section class="ttl">
				<h2>Contact<span>お問い合わせ</span></h2>
			</section>

			<div class="form_bg ">
				<div class="thanks_page">

					<div class="contact__step">
						<div class="aside">
							<ol class="step">
								<li><span class="txt">1.商品情報の入力</span></li>
								<li><span class="txt">2.お客さま情報の入力</span></li>
								<li><span class="txt">3.入力内容の確認</span></li>
								<li class="is-current"><span class="txt">4.お申し込み完了</span></li>
							</ol>
						</div>
					</div>

					<p class="thanks">


						<?php echo $report."<br/>" ;

						//destroy the session
						session_destroy();
						?>
					</p>

					<!-- <div><a href="../index.html"><img src="images/btn_back_to_top.gif" class="imghover" /></a></div> -->
					<div class="thanks_back"><a href="../index.html" class="button blk">トップページに戻る</a></div>
				</div>
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
			<!--footer end-->


		</div>
		<!-- Yahoo Code for &#36092;&#20837;&#65288;HTTP) Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var yahoo_conversion_id = 1000046165;
		var yahoo_conversion_label = "sypSCMvH1gQQjeCL2wM";
		var yahoo_conversion_value = 0;
		/* ]]> */
		</script>
		<script type="text/javascript"
		src="http://i.yimg.jp/images/listing/tool/cv/conversion.js">
		</script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt=""
				src="http://b91.yahoo.co.jp/pagead/conversion/1000046165/?value=0&amp;label=sypSCMvH1gQQjeCL2wM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
			</div>
		</noscript>

		<!-- Google Code for &#36092;&#20837;&#65288;HTTP) Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 999240695;
		var google_conversion_language = "en";
		var google_conversion_format = "2";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "6malCOGe9gMQ9-e83AM";
		var google_conversion_value = 0;
		/* ]]> */
		</script>
		<script type="text/javascript"
		src="http://www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt=""
				src="http://www.googleadservices.com/pagead/conversion/999240695/?value=0&amp;label=6malCOGe9gMQ9-e83AM&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>

		<script type="text/javascript" language="javascript">
		/* <![CDATA[ */
		var yahoo_ydn_conv_io = "VDeWq1UOLDVglZollOAP";
		var yahoo_ydn_conv_label = "";
		var yahoo_ydn_conv_transaction_id = "";
		var yahoo_ydn_conv_amount = "0";
		/* ]]> */
		</script>
		<script type="text/javascript" language="javascript" charset="UTF-8" src="//b90.yahoo.co.jp/conv.js"></script>

	</body>
	</html>
