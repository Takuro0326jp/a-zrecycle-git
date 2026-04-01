/*! Java script */
  $(function () {  
    var topBtn = $('#scrollTop');
    topBtn.hide();
    $(window).scroll(function(){
      if ($(this).scrollTop() > 200) {
        topBtn.fadeIn();
      }
      else{
        topBtn.fadeOut();
      }
    });
    topBtn.click(function (event) {
      event.preventDefault();
      $('body,html').animate({
        scrollTop: 0
      },500);
    });
  })
