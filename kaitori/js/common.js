$(function(){

	// マウスオーバー
	var elem = $('.menuButtons ul li img');
	elem.hover(function() {
		$(this).stop().animate({ opacity: 0.6 }, 200);
	},
	function() {
		$(this).stop().animate({ opacity: 1.0 }, 200);
	});

	// スムーススクロール
	$('a[href^=#]').click(function(){
		var speed = 800;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "easeOutQuad");
		return false;
	});

	// ボタンマージン調整
	$('.menuButtons ul li:nth-child(3n)').each(function(){
		$(this).css({marginRight: '0'});
	});

	// パネル表示非表示
	var fixedBox = $('#fixedBox');
	fixedBox.hide();
	$(window).scroll(function(){
		if ($(this).scrollTop() < 900 || $(this).scrollTop() > 8200) {
			fixedBox.fadeOut();
		} else {
			fixedBox.fadeIn();
		}
	});

	// ページトップボタン
	var totop = $('.toTop');
	totop.hide();
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			totop.fadeIn();
		} else {
			totop.fadeOut();
		}
	});
	$('.toTop').hover(function() {
		$(this).stop().animate({ opacity: 1.0 }, 200);
	}, function() {
		$(this).stop().animate({ opacity: 0.7 }, 200);
	});

});