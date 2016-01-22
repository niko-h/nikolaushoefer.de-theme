// Main

$( document ).ready(function() {
	$(window).bind('scroll', function() {
		var navHeight = $( '.headlogo' ).height();
		if ($(window).scrollTop() > navHeight-50) {
			$('.head, .main .content').addClass('fixed');
		}
		else {
			$('.head, .main .content').removeClass('fixed');
		}
	});
});