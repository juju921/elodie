//MENU STAY-TOP
(function($){
	$('#logo').hide();
	var logoWidth = $('#logo').width;
	var sticky_navigation_offset_top = $('#site-navigation').offset().top;
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop();
		if (scroll_top > sticky_navigation_offset_top) {
			$('#site-navigation').css({ 'position': 'fixed', 'top':'20px', 'left':0.5 });
			$('.logo').animate({width: 'show'});
		} else {
			$('#site-navigation').css({ 'position': 'relative' });
			$('.logo').animate({width: 'hide'});
		}
	};

	sticky_navigation();
	$(window).scroll(function() {
		sticky_navigation();
	});
})(jQuery);
