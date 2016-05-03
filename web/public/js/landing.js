$(document).ready(function(){
	var altura = $('.linerpos').offset().top;
	var footalto = $('.fotlanding').offset().top;
	 

	$(window).on('scroll', function(){

		
		if ($(window).scrollTop() >altura-68) {
			$('.menu').removeClass('glassblack');
			$('.linerpos').addClass('lnfixd');
			$('.menu').removeClass('fixed');
			$('.menu').addClass('fixedscroll');
			$('.new').addClass('links');
			$('.new').removeClass('linkfx');
			$('.dimen').attr('src','img/nombre2.png');
			$('.cowith').addClass('contwith');

		} else{
			$('.cowith').removeClass('contwith');
			$('.linerpos').removeClass('lnfixd');
			$('.menu').addClass('fixed');
			$('.menu').removeClass('fixedscroll');
			$('.new').removeClass('links');
			$('.new').addClass('linkfx');
			$('.dimen').attr('src','img/nombre.png');
			$('.menu').addClass('glassblack');

	}
	if ($(window).scrollTop() >altura-555) {

		$('.infohome').addClass('infohfixd');
		$('.efect1').addClass('glassblack');
		$('.menu').addClass('glassblack');

	} 
	else{
		$('.infohome').removeClass('infohfixd');
		$('.menu').removeClass('glassblack');
		$('.efect1').removeClass('glassblack');
	} 

	if ($(window).scrollTop() > footalto-400) {

		$('.redsocial').hide();
	} else{
		$('.redsocial').show();
	}
	});
});

