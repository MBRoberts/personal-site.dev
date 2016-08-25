'use strict';

$(document).ready(function(){

	$(window).scroll(function() {
		$('#boston-pic').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow + 600) {
					$(this).addClass("slideLeft");
				}
		});
	});

	$(window).scroll(function() {
		$('.bio').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow + 600) {
					$(this).addClass("slideRight");
				}
		});
	});

	$(window).scroll(function() {
		$('.codeup').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow + 600) {
				$(this).addClass("slideUp");
			}
		});
	});

	$(window).scroll(function() {
		$('.geekdom').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow + 600) {
					$(this).addClass("fadeIn");
				}
		});
	});

	
});