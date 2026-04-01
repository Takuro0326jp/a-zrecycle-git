<?php
//create a session
session_start();

header('Content-Type: text/html; charset: UTF-8');

error_reporting(E_ERROR | E_WARNING | E_PARSE );


// echo '<div class="form_more"><img src="images/img_middleForm.gif" alt="yajirusi" />   </div>   ' ;
echo '<div class="form_more"><span>　より詳しく入力すると回答率・査定額UP!　</span></div>' ;

echo '<div id="displayErrorItemsForm"> </div>' ;

//if we click to edit item
if(isset($_GET['itemNbr'])){
	$items  = $_SESSION['items'] ;
	$itemNbr = $_GET['itemNbr'] ;
	echo '<input type="hidden" name="itemNbr" value="'.$itemNbr.'" /> ' ;
}

//~ echo '<pre>' . print_r($_GET, true) . '</pre>';

if($_GET['categ'] == "electronicDevice"){

	?>
	<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
		<tr>
			<td colspan="2" class="form_td01">詳細情報の入力</td>
		</tr>
		<tr>
			<td class="form_td02">アイテム名<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemName" value="<?php  echo $items[$itemNbr]['itemName'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<tr>
			<td class="form_td02">購入年月</td>
			<td class="form_td03"><input type="text" name="itemYear" value="<?php  echo $items[$itemNbr]['itemYear'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<tr>
			<td class="form_td02">メーカー</td>
			<td class="form_td03"><input type="text" name="itemBrand" value="<?php  echo $items[$itemNbr]['itemBrand'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<tr>
			<td class="form_td02">型番（不明な場合は「不明」と記載下さい）<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemModelNbr" value="<?php  echo $items[$itemNbr]['itemModelNbr'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<tr>
			<td class="form_td02">コンディション（キズやヨゴレの有無など・・）</td>
			<td class="form_td03"><input type="text" name="itemCondition" value="<?php  echo $items[$itemNbr]['itemCondition'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<tr>
			<td class="form_td02">付属品</td>
			<td class="form_td03"><input type="text" name="itemAccessory" value="<?php  echo $items[$itemNbr]['itemAccessory'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<?php /*
		<tr>
		<td class="form_td02">買い取れない場合は？</td>
		<td class="form_td03">
		<div class="pseudo">
		<select name="itemThrowAway">
		<option
		<?php
		if($items[$itemNbr]['itemThrowAway'] == "no"){
		echo 'selected="selected" '  ;
	}
	?>
	value="no">処分は考えない</option>

	<option
	<?php
	if($items[$itemNbr]['itemThrowAway'] == "yes"){
	echo 'selected="selected" '  ;
}
?>
value="yes">処分費用を教えて欲しい</option>
</select>
</div>
</td>
</tr>
*/ ?>
<tr>
	<td class="form_td02">アイテムのアピール</td>
	<td class="form_td03"><input type="text" name="itemAppeal" value="<?php  echo $items[$itemNbr]['itemAppeal'] ;  ?>" class="form_waku02" /></td>
</tr>
<tr>
	<td class="form_td02">当店へのメッセージ</td>
	<td class="form_td03"><textarea  name="itemComment" cols="50" rows="8" class="form_waku04"/><?php  echo $items[$itemNbr]['itemComment'] ;  ?></textarea></td>
</tr>
<!--upload photo-->
<!--Max size-->
<input type="hidden" name="MAX_FILE_SIZE" value="20720000">
<tr>
	<td class="form_td02">合計20MBまで ※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。<br><br>アイテム画像1 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem1" />  <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem1'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem1'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで）※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。 -->
	</td>
</tr>
<tr>
	<td class="form_td02">アイテム画像2 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem2" /> <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem2'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem2'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで）※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。 -->
	</td>
</tr>
<tr>
	<td class="form_td02">アイテム画像3 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem3" />  <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem3'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem3'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで）※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。 -->
	</td>
</tr>
</table>

<?php
}

if($_GET['categ'] == "furniture"){


	?>
	<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
		<tr>
			<td colspan="2" class="form_td01">詳細情報の入力</td>
		</tr>

		<tr>
			<td class="form_td02">アイテム名<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemName" value="<?php  echo $items[$itemNbr]['itemName'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">購入年月</td>
			<td class="form_td03"><input type="text" name="itemYear" value="<?php  echo $items[$itemNbr]['itemYear'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">メーカー（不明な場合は「不明」と記載下さい）<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemBrand" value="<?php  echo $items[$itemNbr]['itemBrand'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">品名（正確な名称が分かれば）</td>
			<td class="form_td03"><input type="text" name="itemModelNbr" value="<?php  echo $items[$itemNbr]['itemModelNbr'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">コンディション（キズやヨゴレの有無など・・）</td>
			<td class="form_td03"><input type="text" name="itemCondition" value="<?php  echo $items[$itemNbr]['itemCondition'] ;  ?>" class="form_waku02" /></td>
		</tr>
		<?php /*
		<tr>
		<td class="form_td02">サイズ</td>
		<td class="form_td03"><input type="text" name="itemSize" value="<?php  echo $items[$itemNbr]['itemSize'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
		<td class="form_td02">材質</td>
		<td class="form_td03"><input type="text" name="itemMaterial" value="<?php  echo $items[$itemNbr]['itemMaterial'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
		<td class="form_td02">買い取れない場合は？</td>
		<td class="form_td03">
		<div class="pseudo">
		<select name="itemThrowAway">
		<option
		<?php
		if($items[$itemNbr]['itemThrowAway'] == "no"){
		echo 'selected="selected" '  ;
	}
	?>
	value="no">処分は考えない</option>

	<option
	<?php
	if($items[$itemNbr]['itemThrowAway'] == "yes"){
	echo 'selected="selected" '  ;
}
?>
value="yes">処分費用を教えて欲しい</option>
</select>
</div>
</td>
</tr>
*/ ?>

<tr>
	<td class="form_td02">アイテムのアピール</td>
	<td class="form_td03"><input type="text" name="itemAppeal" value="<?php  echo $items[$itemNbr]['itemAppeal'] ;  ?>" class="form_waku02" /></td>
</tr>

<tr>
	<td class="form_td02">当店へのメッセージ</td>
	<td class="form_td03"><textarea  name="itemComment" cols="50" rows="8" class="form_waku04" /><?php  echo $items[$itemNbr]['itemComment'] ;  ?></textarea></td>
</tr>

<!--upload photo-->
<!--Max size-->
<input type="hidden" name="MAX_FILE_SIZE" value="20720000">

<tr>
	<td class="form_td02">合計20MBまで ※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。<br><br>アイテム画像1 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem1" />  <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem1'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem1'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで） -->
	</td>
</tr>

<tr>
	<td class="form_td02">アイテム画像2 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem2" /> <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem2'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem2'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで） -->
	</td>
</tr>

<tr>
	<td class="form_td02">アイテム画像3 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem3" />  <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem3'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem3'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで） -->
	</td>
</tr>

</table>

<?php

}

if($_GET['categ'] == "bicycle"){


	?>
	<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
		<tr>
			<td colspan="2" class="form_td01">詳細情報の入力</td>
		</tr>

		<tr>
			<td class="form_td02">アイテム名<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemName" value="<?php  echo $items[$itemNbr]['itemName'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">購入年月</td>
			<td class="form_td03"><input type="text" name="itemYear" value="<?php  echo $items[$itemNbr]['itemYear'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">メーカー（不明な場合は「不明」と記載下さい）<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemBrand" value="<?php  echo $items[$itemNbr]['itemBrand'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">自転車種類<span class="txt_red">必須</span></td>
			<td class="form_td03">
				<div class="pseudo">
					<select name="kindOfBike">
						<option value=""></option>
						<option
						<?php
						if($items[$itemNbr]['kindOfBike'] == "cityBike"){
							echo 'selected="selected" '  ;
						}
						?>
						value="cityBike">シティバイク</option>
						<option
						<?php
						if($items[$itemNbr]['kindOfBike'] == "roadRacerBike"){
							echo 'selected="selected" '  ;
						}
						?>
						value="roadRacerBike">ロードレーサー</option>
						<option
						<?php
						if($items[$itemNbr]['kindOfBike'] == "bendableBike"){
							echo 'selected="selected" '  ;
						}
						?>
						value="bendableBike">折りたたみ</option>
						<option
						<?php
						if($items[$itemNbr]['kindOfBike'] == "montainBike"){
							echo 'selected="selected" '  ;
						}
						?>
						value="montainBike">MTB</option>
						<option
						<?php
						if($items[$itemNbr]['kindOfBike'] == "other"){
							echo 'selected="selected" '  ;
						}
						?>
						value="other">その他</option>
					</select>
				</div>
			</td>
		</tr>

		<tr>
			<td class="form_td02">コンディション（キズやヨゴレの有無など・・）</td>
			<td class="form_td03"><input type="text" name="itemCondition" value="<?php  echo $items[$itemNbr]['itemCondition'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">インチ</td>
			<td class="form_td03"><input type="text" name="itemInch" value="<?php  echo $items[$itemNbr]['itemInch'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">付属品</td>
			<td class="form_td03"><input type="text" name="itemAccessory" value="<?php  echo $items[$itemNbr]['itemAccessory'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<?php /*
		<tr>
		<td class="form_td02">買い取れない場合は？</td>
		<td class="form_td03">
		<div class="pseudo">
		<select name="itemThrowAway">
		<option
		<?php
		if($items[$itemNbr]['itemThrowAway'] == "no"){
		echo 'selected="selected" '  ;
	}
	?>
	value="no">処分は考えない</option>

	<option
	<?php
	if($items[$itemNbr]['itemThrowAway'] == "yes"){
	echo 'selected="selected" '  ;
}
?>
value="yes">処分費用を教えて欲しい</option>
</select>
</div>
</td>
</tr>
*/ ?>

<tr>
	<td class="form_td02">アイテムのアピール</td>
	<td class="form_td03"><input type="text" name="itemAppeal" value="<?php  echo $items[$itemNbr]['itemAppeal'] ;  ?>" class="form_waku02" /></td>
</tr>

<tr>
	<td class="form_td02">当店へのメッセージ</td>
	<td class="form_td03"><textarea  name="itemComment" cols="50" rows="8" class="form_waku04" /><?php  echo $items[$itemNbr]['itemComment'] ;  ?> </textarea></td>
</tr>

<!--upload photo-->
<!--Max size-->
<input type="hidden" name="MAX_FILE_SIZE" value="20720000">

<tr>
	<td class="form_td02">合計20MBまで ※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。<br><br>アイテム画像1 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem1" />  <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem1'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem1'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで） -->
	</td>
</tr>

<tr>
	<td class="form_td02">アイテム画像2 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem2" /> <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem2'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem2'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで） -->
	</td>
</tr>

<tr>
	<td class="form_td02">アイテム画像3 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
	<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem3" />  <br />
		<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem3'])){ ?>
			<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem3'] ?>"alt="" />
		<?php }?>
		<!-- （20MBまで） -->
	</td>
</tr>

</table>

<?php

}


if($_GET['categ'] == "musicInstrument"){


	?>
	<table border="0" cellpadding="0" cellspacing="0" class="form_tbl">
		<tr>
			<td colspan="2" class="form_td01">詳細情報の入力</td>
		</tr>

		<tr>
			<td class="form_td02">アイテム名<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemName" value="<?php  echo $items[$itemNbr]['itemName'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">購入年月</td>
			<td class="form_td03"><input type="text" name="itemYear" value="<?php  echo $items[$itemNbr]['itemYear'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">購入時の価格</td>
			<td class="form_td03"><input type="text" name="itemInitialCost" value="<?php  echo $items[$itemNbr]['itemInitialCost'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">メーカー<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemBrand" value="<?php  echo $items[$itemNbr]['itemBrand'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">モデル名、型番(不明の場合は「不明」と記載下さい<span class="txt_red">必須</span></td>
			<td class="form_td03"><input type="text" name="itemModelName" value="<?php  echo $items[$itemNbr]['itemModelName'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">コンディション（キズやヨゴレの有無など・・）</td>
			<td class="form_td03"><input type="text" name="itemCondition" value="<?php  echo $items[$itemNbr]['itemCondition'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">使用頻度（例：約1年程度）</td>
			<td class="form_td03"><input type="text" name="itemUseRate" value="<?php  echo $items[$itemNbr]['itemUseRate'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">付属品</td>
			<td class="form_td03"><input type="text" name="itemAccessory" value="<?php  echo $items[$itemNbr]['itemAccessory'] ;  ?>" class="form_waku02" /></td>
		</tr>


		<tr>
			<td class="form_td02">アイテムのアピール</td>
			<td class="form_td03"><input type="text" name="itemAppeal" value="<?php  echo $items[$itemNbr]['itemAppeal'] ;  ?>" class="form_waku02" /></td>
		</tr>

		<tr>
			<td class="form_td02">当店へのメッセージ</td>
			<td class="form_td03"><textarea  name="itemComment" cols="50" rows="8" class="form_waku04" /><?php  echo $items[$itemNbr]['itemComment'] ;  ?></textarea></td>
		</tr>

		<!--upload photo-->
		<!--Max size-->
		<input type="hidden" name="MAX_FILE_SIZE" value="20720000">

		<tr>
			<td class="form_td02">合計20MBまで ※ファイル名は必ず半角英数字にて指定の上、アップロードして下さい。<br><br>アイテム画像1 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
				<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem1" />  <br />
					<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem1'])){ ?>
						<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem1'] ?>"alt="" />
					<?php }?>
					<!-- （20MBまで） -->
				</td>
			</tr>

			<tr>
				<td class="form_td02">アイテム画像2 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
				<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem2" /> <br />
					<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem2'])){ ?>
						<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem2'] ?>"alt="" />
					<?php }?>
					<!-- （20MBまで） -->
				</td>
			</tr>

			<tr>
				<td class="form_td02">アイテム画像3 <br /><span class="redSubtitle">より正確な見積のためにできるだけ画像を添付してください</span></td>
				<td class="form_td03"> <input type="file" class="form_waku02"  name="photoItem3" />  <br />
					<?php  if(!empty($_SESSION['items'][$itemNbr]['photoItem3'])){ ?>
						<img src="<?php echo $_SESSION['items'][$itemNbr]['photoItem3'] ?>"alt="" />
					<?php }?>
					（20MBまで）
				</td>
			</tr>

		</table>

		<?php

	}



	?>
