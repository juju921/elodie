//MENU STAY-TOP
/*(function($){
 var sticky_navigation_offset_top = $('#site-navigation').offset().top;
 var sticky_navigation = function(){
 var scroll_top = $(window).scrollTop();
 if (scroll_top > sticky_navigation_offset_top) {
 $('#site-navigation').css({ 'position': 'fixed', 'top':0, 'left':0.5 });

 } else {
 $('#site-navigation').css({ 'position': 'relative' });

 }
 };

 sticky_navigation();
 $(window).scroll(function() {
 sticky_navigation();
 });
 })(jQuery);*/


(function ($) {

	$ (window).scroll (function () {
		if ($ (this).scrollTop () >= 290) {

			$ ('#site-navigation').addClass ('stickytop');
		}
		else {
			$ ('#site-navigation').removeClass ('stickytop');
		}
	});

	$ ('.nav-toggle').click (function () {

		if ($ (this).hasClass ('active')) {
			$ (this).removeClass ('active');
			$('.nav-menu').css("display", 'none');
			$('#overlay').remove();

		} else {
			$ (this).addClass ('active');
			$('.nav-menu').css("display", 'block');
			$('<div id="overlay"> </div>').appendTo(document.body);
		}
	});

}) (jQuery);
