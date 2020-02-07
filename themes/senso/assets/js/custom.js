$(document).ready(function() {
	$('.burger').click(function(event) {
	  event.preventDefault();
	  $(this).toggleClass('opened');
	  $('nav').slideToggle('fast');
	});
/*
	$.each($('[data-img]'), function() {
		var $that = $(this);
		$that.css('background', 'url("' + $that.attr('data-img') + '") no-repeat center center').removeAttr('data-img');
	});*/
});

$(function(){
	
	// nav shrink
	if ($('.subnav').length) {
		var subTop = $('.subnav').position();
		$(window).scroll(function(){
			var aTop = 50;
			if($(this).scrollTop()>=aTop){
				$('header').addClass('shrink');
				var shrinkH = $('.shrink').height();
				if($(this).scrollTop()>=(subTop.top-shrinkH)){
					$('.sub').addClass('fixed-top subtop');
					$('.sub').css('margin-top',shrinkH+'px');
		
				} else {
					$('.sub').removeClass('fixed-top subtop');
					$('.sub').css('margin-top','0');
				};
			} else {
				$('header').removeClass('shrink');
			};
		});
	} else {
		$(window).scroll(function(){
			var aTop = 50;
			if($(this).scrollTop()>=aTop){
				$('header').addClass('shrink');
			} else {
				$('header').removeClass('shrink');
			};
		});
	}

});