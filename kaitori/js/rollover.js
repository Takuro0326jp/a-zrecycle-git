(function($){

	$(function(){
		$("img.btn").imgOvAnime({speed: 100});
		$("input.btn").imgOvAnime({speed: 100});
		$("img.btn2").imgOvAnime({type: "slideTop"});
		$("img.btn3").imgOvAnime({type: "slideLeft"});
		$("img.btn4").imgOvAnime({speed: 500,type: "fadeSlideTop"});
		$("img.btn5").imgOvAnime({type: "slideTop2"});
		$("img.btn6").imgOvAnime({speed: 200,type: "fadeSizing"});
	});

	$.fn.imgOvAnime = function(option){

		var o = $.extend({
			ovStr: "_o",
			speed: 500,
			type: "fade"
		},option);
		var overElements = $(this);

		function fade(){
			var ovElm = overElements;
			var ovStr = o.ovStr;
			var speed = o.speed;
			ovElm.css({position:"relative"}).each(function(){
				var self = $(this);
				var url = self.attr("src").replace(/^(.+)(\.[a-z]+)$/,"$1"+ovStr+"$2");
				var ovImg = $("<img>").attr("src",url).css({position: "absolute"});
				function anime(a_alp){
					self.stop().animate({opacity:a_alp},speed);
				}
				self.before(ovImg).hover(
				function(){
					anime("0");
				},
				function(){
					anime("1");
				});
			});
		}

		function slideTop(){
			var ovElm = overElements;
			var ovStr = o.ovStr;
			var speed = o.speed;
			ovElm.css({position:"relative",opacity:"0"}).each(function(){
				var self = $(this);
				var urlDef = self.attr("src");
				var urlChange = urlDef.replace(/^(.+)(\.[a-z]+)$/,"$1"+ovStr+"$2");
				var imgBack = $("<img>").attr("src",urlDef).css({position:"absolute"});
				$(window).bind("load",function(){
					var w = self.width()+"px";
					var h = self.height()+"px";
					var ovImg = $("<span>").css({
						width: w,
						height: "0",
						backgroundImage: "url("+urlChange+")",
						position: "absolute",
						fontSize: "0"
					});
					function anime(a_h){
						self.prev().stop().animate({height:a_h},speed);
					}
					self.before(imgBack).before(ovImg).hover(
					function(){
						anime(h);
					},
					function(){
						anime("0");
					});
				});
			});
		}

		function slideLeft(){
			var ovElm = overElements;
			var ovStr = o.ovStr;
			var speed = o.speed;
			ovElm.css({position:"relative",opacity:"0"}).each(function(){
				var self = $(this);
				var urlDef = self.attr("src");
				var urlChange = urlDef.replace(/^(.+)(\.[a-z]+)$/,"$1"+ovStr+"$2");
				var imgBack = $("<img>").attr("src",urlDef).css({position:"absolute"});
				$(window).bind("load",function(){
					var w = self.width()+"px";
					var h = self.height()+"px";
					var ovImg = $("<span>").css({
						width: "0",
						height: h,
						backgroundImage: "url("+urlChange+")",
						position: "absolute"
					});
					function anime(a_w){
						self.prev().stop().animate({width:a_w},speed);
					}
					self.before(imgBack).before(ovImg).hover(
					function(){
						anime(w);
					},
					function(){
						anime("0");
					});
				});
			});
		}

		function fadeSlideTop(){
			var ovElm = overElements;
			var ovStr = o.ovStr;
			var speed = o.speed;
			ovElm.css({position:"relative",opacity:"0"}).each(function(){
				var self = $(this);
				var urlDef = self.attr("src");
				var urlChange = urlDef.replace(/^(.+)(\.[a-z]+)$/,"$1"+ovStr+"$2");
				var imgBack = $("<img>").attr("src",urlDef).css({position:"absolute"});
				$(window).bind("load",function(){
					var w = self.width()+"px";
					var h = self.height()+"px";
					var ovImg = $("<span>").css({
						width: w,
						height: "0",
						backgroundImage: "url("+urlChange+")",
						position: "absolute",
						opacity: "0",
						fontSize: "0"
					});
					function anime(a_h,a_alp){
						self.prev().stop().animate({height:a_h,opacity:a_alp},speed);
					}
					self.before(imgBack).before(ovImg).hover(
					function(){
						anime(h,"1");
					},
					function(){
						anime("0","0");
					});
				});
			});
		}

		function slideTop2(){
			var ovElm = overElements;
			var ovStr = o.ovStr;
			var speed = o.speed;
			ovElm.css({position:"relative",opacity:"0"}).each(function(){
				var self = $(this);
				var urlDef = self.attr("src");
				var urlChange = urlDef.replace(/^(.+)(\.[a-z]+)$/,"$1"+ovStr+"$2");
				$(window).bind("load",function(){
					var w = self.width()+"px";
					var h = self.height()+"px";
					var imgBack = $("<span>").css({
						width: w,
						height: h,
						backgroundImage: "url("+urlDef+")",
						position: "absolute",
						fontSize: "0"
					});
					var ovImg = $("<span>").css({
						width: w,
						height: "0",
						backgroundImage: "url("+urlChange+")",
						position: "absolute",
						fontSize: "0"
					});
					function anime(a_h1,a_h2){
						var selfOvImg = self.prev();
						selfOvImg.animate({height: a_h1},speed);
						selfOvImg.prev().stop().animate({height: a_h2},speed);
					}
					self.before(imgBack).before(ovImg).hover(
					function(){
						anime(h,"0");
					},
					function(){
						anime("0",h);
					});
				});
			});
		}

		function fadeSizing(){
			var ovElm = overElements;
			var ovStr = o.ovStr;
			var speed = o.speed;
			ovElm.css({position:"relative",opacity:"0"}).each(function(){
				var self = $(this);
				var urlDef = self.attr("src");
				var urlChange = urlDef.replace(/^(.+)(\.[a-z]+)$/,"$1"+ovStr+"$2");
				$(window).bind("load",function(){
					var w = self.width()+"px";
					var h = self.height()+"px";
					var imgBack = $("<span>").css({
						width: w,
						height: h,
						backgroundImage: "url("+urlDef+")",
						position: "absolute",
						fontSize: "0"
					});
					var ovImg = $("<span>").css({
						width: "0",
						height: "0",
						backgroundImage: "url("+urlChange+")",
						position: "absolute",
						opacity: "0",
						fontSize: "0"
					});
					function anime(a_w1,a_w2,a_h1,a_h2,a_alp1,a_alp2){
						var selfOvImg = self.prev();
						selfOvImg.stop().animate({width: a_w1,height: a_h1,opacity: a_alp1},speed);
						selfOvImg.prev().stop().animate({width: a_w2,height: a_h2,opacity: a_alp2},speed);
					}
					self.before(imgBack).before(ovImg).hover(
					function(){
						anime(w,"0",h,"0","1","0");
					},
					function(){
						anime("0",w,"0",h,"0","1");
					});
				});
			});
		}

		switch(o.type){
		case "fade":
			fade();
			break;
		case "slideTop":
			slideTop();
			break;
		case "slideLeft":
			slideLeft();
			break;
		case "fadeSlideTop":
			fadeSlideTop();
			break;
		case "slideTop2":
			slideTop2();
			break;
		case "fadeSizing":
			fadeSizing();
			break;
		}

	}

})(jQuery);