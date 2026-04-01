$(function() {
  $(window).on('load',function(){

  });

  /* Resize event
   * ------------------------------------------------------- */
  var widthFlag = '';
  var windowWidth = parseInt($(window).width());
  if(windowWidth < 768 && widthFlag != 'sp') {
    widthFlag = 'sp';
  } else if(windowWidth >= 768 && widthFlag != 'pc') {
    widthFlag = 'pc';
  }
  var resizeTimer;
  $(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      var windowWidth = parseInt($(window).width());
      if(windowWidth < 768 && widthFlag != 'sp') {
        widthFlag = 'sp';
        if ($('body').hasClass('nav-open') == false) {
          $('.site-navigation').hide();
        }
      } else if(windowWidth > 768 && widthFlag != 'pc') {
        widthFlag = 'pc';
        if ($('body').hasClass('nav-open') == false) {
          $('.site-navigation').show();
        }
      }
    }, 100);
  });

  /* toggle navigation button
   * ------------------------------------------------------- */
   $(document).on('click touchend', '#nav-toggle-btn' ,function(e){
     if ($('body').hasClass('nav-open')) {
       $('body').removeClass('nav-open');
       $('.site-navigation').slideUp(200);
     } else {
       $('body').addClass('nav-open');
       $('.site-navigation').slideDown(200);
     }
     return false;
   });
   $(document).on('click touchend',function(e){
     if ($('body').hasClass('nav-open')) {
       if (!$(e.target).closest('#nav-toggle-btn, .site-navigation').length) {
         $('body').removeClass('nav-open');
         $('.site-navigation').slideUp(200);
       }
     }
   });

 /* category list show
  * ------------------------------------------------------- */
  if (widthFlag == 'sp') {
    var moreNum = 5;
  } else {
    var moreNum = 20;
  }
  $('.category-brand-links').each(function(){
    var list = $(this).find('.category-brand-list');
    $(list).children('li:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
    $(this).find('.show-more').on('click', function() {
      if (widthFlag == 'sp') {
        var moreNum = 5;
      } else {
        var moreNum = 20;
      }
      $(list).children('li.is-hidden').slice(0, moreNum).removeClass('is-hidden');
      if ($(list).children('li.is-hidden').length == 0) {
        $(this).hide();
      }
    });
  });



});
