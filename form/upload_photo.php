<?php

//~ echo '<pre>' . print_r($_FILES, true) . '</pre>';

error_reporting(E_ERROR | E_WARNING | E_PARSE );

$uploadError = "" ;
$checkError = boolean ;
//variables of pictures (path)

/////////////////picture 1

//if the field photoItem1 is empty
if($_FILES['photoItem1']['error'] == 4 ) {
  $picturePath1 = $_SESSION['items'][$itemNbr]['photoItem1'] ;
  $checkError = false ;
}

//if there is no error from the form
if ($_FILES['photoItem1']['error'] == UPLOAD_ERR_OK){
  $checkError = true ;
}

// if the file is too big
if($_FILES['photoItem1']['error'] == 2 ) {
  $uploadError .= "アイテム画像1がアップロードできませんでした。アップロードできる画像は30MBまでとなります。a" ."<br />" ;
  $checkError = false ;
  echo $_FILES['photoItem1']['error'];
}
if(filesize($_FILES['photoItem1']['tmp_name']) > 20720000){
  $uploadError .= "アイテム画像1がアップロードできませんでした。アップロードできる画像は 30MBまでとなります。b" ."<br />" ;
  $checkError = false ;
}

if($checkError == true){

  //delete the old picture
  if (is_file($_SESSION['items'][$itemNbr]['photoItem1'])){
    unlink($_SESSION['items'][$itemNbr]['photoItem1']);
  }

  //destination folder of the pictures
  $destination_folder = '../dl_img/'.date("Y").date("m")."/".date("d")."/";

  //creation of the new folder
  if(!is_dir($destination_folder)){
    mkdir($destination_folder,0777 , true) ;
  }

  //move the picture  from cache to the destination folder
  $picturePath1 = $destination_folder.rand().$_FILES['photoItem1']['name'] ;
  if(move_uploaded_file($_FILES['photoItem1']['tmp_name'], $picturePath1))
  {
    //~ $uploadError .= '';
  }else
  {
    $uploadError .= 'Error during the upload !';
  }

}

/////////////////picture 2

//check error( file too big )
if($_FILES['photoItem2']['error'] == 2 OR $_FILES['photoItem2']['error'] == 3 ){
  $uploadError .= "アイテム画像2がアップロードできませんでした。アップロードできる画像は300KBまでとなります。";
}

//if the field photoItem2is empty
if($_FILES['photoItem2']['error'] == 4 ) {
  $picturePath2 = $_SESSION['items'][$itemNbr]['photoItem2'] ;
}else if ($_FILES['photoItem2']['error'] == UPLOAD_ERR_OK){

  //delete the old picture
  if (is_file($_SESSION['items'][$itemNbr]['photoItem2'])){
    unlink($_SESSION['items'][$itemNbr]['photoItem2']);
  }

  //destination folder of the pictures
  $destination_folder = '../dl_img/'.date("Y").date("m")."/".date("d")."/";

  //creation of the new folder
  if(!is_dir($destination_folder)){
    mkdir($destination_folder,0777 , true) ;
  }

  //move the picture  from cache to the destination folder
  $picturePath2 = $destination_folder.rand().$_FILES['photoItem2']['name'] ;
  if(move_uploaded_file($_FILES['photoItem2']['tmp_name'], $picturePath2))
  {
    //~ $uploadError .= '';
  }else
  {
    $uploadError .= 'Error during the upload !';
  }

}


/////////////////picture 3

//check error( file too big )
if($_FILES['photoItem3']['error'] == 2 OR $_FILES['photoItem3']['error'] == 3 ){
  $uploadError .= "アイテム画像3がアップロードできませんでした。アップロードできる画像は300KBまでとなります。";
}

//if the field photoItem3 is empty
if($_FILES['photoItem3']['error'] == 4 ) {
  $picturePath3 = $_SESSION['items'][$itemNbr]['photoItem3'] ;
}else if ($_FILES['photoItem3']['error'] == UPLOAD_ERR_OK){

  //delete the old picture
  if (is_file($_SESSION['items'][$itemNbr]['photoItem3'])){
    unlink($_SESSION['items'][$itemNbr]['photoItem3']);
  }

  //destination folder of the pictures
  $destination_folder = '../dl_img/'.date("Y").date("m")."/".date("d")."/";

  //creation of the new folder
  if(!is_dir($destination_folder)){
    mkdir($destination_folder,0777 , true) ;
  }

  //move the picture  from cache to the destination folder
  $picturePath3 = $destination_folder.rand().$_FILES['photoItem3']['name'] ;
  if(move_uploaded_file($_FILES['photoItem3']['tmp_name'], $picturePath3))
  {
    //~ $uploadError .= '';
  }else
  {
    $uploadError .= '画像アップロード中にエラーが発生しました。';
  }

}

//if there is error, it displays something
/*if (!empty($uploadError)){
echo '<div class="uploadError">' . $uploadError . '</div>';
}
*/

?>
