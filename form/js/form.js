var dom = {};
dom.query = jQuery.noConflict(true);


dom.query(document).ready(function(){
  // rollover
  dom.query('.imgover').each(function() {
    var osrc = dom.query(this).attr('src');
    var hsrc = osrc.replace(/(\.gif|\.jpg|\.png)/, '_o$1');
    dom.query.data(this, 'osrc', osrc);
    dom.query.data(this, 'hsrc', hsrc);
    dom.query('<img>').attr('src', hsrc);
  }).hover(function() {
    dom.query(this).attr('src', dom.query.data(this, 'hsrc'));
  },function() {
    dom.query(this).attr('src', dom.query.data(this, 'osrc'));
  });

});

dom.query(document).ready(function(){
  // rollover
  dom.query(window).scroll(function() {
    var scrollHeight = dom.query(document).height();
    var scrollPosition = dom.query(window).height() + dom.query(window).scrollTop();
    if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
      // dom.query('.form_tel').addClass('bottom_fix');
      dom.query('.sp_form_tel').addClass('bottom_fix');
      dom.query('.form_tel').addClass('bottom_fix');
    }
    else{
      // dom.query('.form_tel').removeClass('bottom_fix');
      dom.query('.sp_form_tel').removeClass('bottom_fix');
      dom.query('.form_tel').removeClass('bottom_fix');
    }
  });

});

//when you select  a category
function checkSelected(selectedObject)
{

  if (selectedObject == '' || selectedObject == 0) {
    document.getElementById("resultForm").innerHTML = "";
    return;
  }

  var q_txt = "categ=" + String(selectedObject);

  var url = 'itemsForm.php';
  var myAjax = new Ajax.Request(
    url,
    {
      method: 'get',
      parameters: q_txt,
      onComplete: manageResponse
    });
  }


  //when you select  a category  to the additems page only
  function checkSelectedItemPage(selectedObject)
  {

    if (selectedObject == '' || selectedObject == 0) {
      document.getElementById("resultForm").innerHTML = "";
      document.getElementById("btnSubmit").innerHTML = ' <img class="imgover" onclick="doSubmit(3)" src="images/btn_next.gif" alt="お客様情報の入力へ" />';
      return;
    }else{
      // document.getElementById("btnSubmit").innerHTML = "";
      document.getElementById("btnSubmit");
    }

    var q_txt = "categ=" + String(selectedObject);

    var url = 'itemsForm.php';
    var myAjax = new Ajax.Request(
      url,
      {
        method: 'get',
        parameters: q_txt,
        onComplete: manageResponse
      });
    }

    //when you edit an object
    function editSelected(itemNbr, selectedObject)
    {

      if (itemNbr == '' || selectedObject == 0 || selectedObject == '' ) {
        document.getElementById("resultForm").innerHTML = "";
        return;
      }

      var q_txt = "itemNbr=" + itemNbr + "&categ=" + String(selectedObject) ;

      var url = 'itemsForm.php';
      var myAjax = new Ajax.Request(
        url,
        {
          method: 'get',
          parameters: q_txt,
          onComplete: manageResponse
        });
      }

      //function to check if XmlHttpRequest is good or not
      function manageResponse(xhr)
      {
        if (xhr.status == 200)
        {
          $('resultForm').innerHTML = xhr.responseText;
        }
        else
        {
          $('resultForm').innerHTML = "error";
        }
      }

      //when you click to the next button or the back button
      function doSubmit(val)
      {
        var element = document.getElementById('shopForm');
        var bool ;


        if (val == 0) //in addItems.php
        {
          bool = check_form(element, val) ;
          element.action="addItems.php";

        } else if (val == 10) //in form.php
        {
          bool = check_form(element, val) ;
          element.action="addItems.php";

        } else if (val == 1) //in form.php
        {
          bool = check_form(element, val) ;
          element.action="userInfoForm.php";

        }else if(val == 2)//in userInfoForm.php
        {
          bool = check_form(element, val) ;
          element.action="confirm.php";

        }else if(val == 3) //in addItems.php
        {
          bool = true ;
          element.action="userInfoForm.php";

        }else if(val == "edit") //in addItems.php
        {
          bool = check_form(element, val) ;
          element.action="addItems.php?edit=true";
        }else {
        }

        if(bool == true){
          document.getElementById('shopForm').submit();
        }
      }


      function check_form(thisForm, val){


        if(val == 2){

          if(thisForm.UserName.value == '' || /^\s+$/.test(thisForm.UserName.value))
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">氏名が入力されていません。</div>' ;
            thisForm.UserName.focus();
            return false;
          }

          if(thisForm.userMailAddress.value == '' || /^\s+$/.test(thisForm.userMailAddress.value))
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">メールアドレスが入力されていません。</div>' ;
            thisForm.userMailAddress.focus();
            return false;
          }

        }

        if(val == 1 || val == 10){

          var found_it;
          for (var i=0; i<thisForm.typeOfSending.length; i++)
          {
            if (thisForm.typeOfSending[i].checked)
            {
              found_it = thisForm.typeOfSending[i].value ;
            }
          }

          if(!found_it)
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">買取方法が入力されていません。</div>' ;
            return false;
          }


          if(thisForm.zip21.value == '' || /^\s+$/.test(thisForm.zip21.value))
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">郵便番号が入力されていません。</div>' ;
            thisForm.zip21.focus();
            return false;
          }

          if(thisForm.zip22.value == ''  || /^\s+$/.test(thisForm.zip22.value))
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">郵便番号が入力されていません。</div>' ;
            thisForm.zip22.focus();
            return false;
          }


          if(thisForm.pref21.value == ''  || /^\s+$/.test(thisForm.pref21.value))
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">都道府県が入力されていません。</div>' ;
            thisForm.pref21.focus();
            return false;
          }


          if(thisForm.addr21.value == ''  || /^\s+$/.test(thisForm.addr21.value))
          {
            document.getElementById("displayError").innerHTML ='<div class="uploadError">住所が入力されていません。</div>' ;
            thisForm.addr21.focus();
            return false;
          }

        }

        if(val != 2){

          if(thisForm.itemCategory.options[0].value == ''){
            if(thisForm.itemCategory.selectedIndex == 0){
              document.getElementById("displayError").innerHTML ='<div class="uploadError">商品カテゴリが選択されていません。</div>' ;
              thisForm.itemCategory.focus();
              return false;
            }
          }


          //********************_______ブランド家具・デザイナーズ家具______********************
          if(thisForm.itemCategory.selectedIndex == 1 || thisForm.itemCategory.options[0].value == 'furniture'){

            if(thisForm.itemName.value == '' || /^\s+$/.test(thisForm.itemName.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">アイテム名が入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemName.focus();
              return false;
            }

            if(thisForm.itemBrand.value == '' || /^\s+$/.test(thisForm.itemBrand.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">メーカーが入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemBrand.focus();
              return false;
            }

          }


          //********************_______家電______********************
          if(thisForm.itemCategory.selectedIndex == 2 || thisForm.itemCategory.options[0].value == 'electronicDevice' ){

            if(thisForm.itemName.value == '' || /^\s+$/.test(thisForm.itemName.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">アイテム名が入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemName.focus();
              return false;
            }

            if(thisForm.itemModelNbr.value == '' || /^\s+$/.test(thisForm.itemModelNbr.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">型番が入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemModelNbr.focus();
              return false;
            }

          }

          //********************_______自転車______********************
          if(thisForm.itemCategory.selectedIndex == 3 || thisForm.itemCategory.options[0].value == 'bicycle'){

            if(thisForm.itemName.value == '' || /^\s+$/.test(thisForm.itemName.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">アイテム名が入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemName.focus();
              return false;
            }

            if(thisForm.itemBrand.value == '' || /^\s+$/.test(thisForm.itemBrand.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">メーカーが入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemBrand.focus();
              return false;
            }

            if(thisForm.kindOfBike.selectedIndex == 0 ){
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">自転車種類 が選択されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.kindOfBike.focus();
              return false;
            }

          }

          //********************_______楽器・オーディオ______********************
          if(thisForm.itemCategory.selectedIndex == 4  || thisForm.itemCategory.options[0].value == 'musicInstrument'){

            if(thisForm.itemName.value == '' || /^\s+$/.test(thisForm.itemName.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">アイテム名が入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemName.focus();
              return false;
            }

            if(thisForm.itemBrand.value == '' || /^\s+$/.test(thisForm.itemBrand.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">メーカーが入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemBrand.focus();
              return false;
            }

            if(thisForm.itemModelName.value == '' || /^\s+$/.test(thisForm.itemModelName.value))
            {
              document.getElementById("displayErrorItemsForm").innerHTML ='<div class="uploadError">モデル名、型番が入力されていません。</div>' ;
              document.getElementById("displayError").innerHTML ='' ;
              thisForm.itemModelName.focus();
              return false;
            }

          }

        }


        return true;
      }
