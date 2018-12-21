$(document).ready(function(){

	$(window).scroll(function(){
		var scrollTopN = $(this).scrollTop();
		var heightSc = $('.scrollNav').outerHeight()-40;

		if (scrollTopN >= heightSc) {
			$('#header .navbar').addClass('shrink-fixed-navbar');
			$('#navbar .name-logo').addClass('shrink-logo');
			$('#header .navbar-collapse ul').addClass('shrink-collapes');
		}else {
			$('#header .navbar').removeClass('shrink-fixed-navbar');
			$('#navbar .name-logo').removeClass('shrink-logo');
			$('#header .navbar-collapse ul').removeClass('shrink-collapes');
		}
		
	});
});