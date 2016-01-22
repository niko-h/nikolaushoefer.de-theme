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
// Lang cookie

$( document ).ready(function() {
	
	$('.lang-link.selected').removeClass('selected');
	$('.lang-link[data-lang="'+$.cookie('LANGUAGE')+'"]').addClass('selected');

	$('.lang-link').click(function(e) {
		e.preventDefault();

		var newLang = $(this).data('lang');
		$.removeCookie('LANGUAGE');
		$.cookie('LANGUAGE', newLang);

		location.reload();

	});

});