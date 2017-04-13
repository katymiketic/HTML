$(function() {
	
	"use strict";

	new WOW().init();
			
	/* MENUZORD 
	=============================*/		
	jQuery("#menuzord").menuzord();
	
	/*FIXED MENU ON SCROLL
	=============================*/	
	var nav = $('.minti-navbar');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 120) {
			nav.addClass("minti-fixed-nav");
			nav.removeClass("navbar-pd");					
		} else {
			nav.removeClass("minti-fixed-nav");
			nav.addClass("navbar-pd");
		}
	});

	/* TOTOP
	=============================*/
	$('body').toTop();	

	/* EFFECT CONTROL
	=============================*/
	$(".effect-button").click(function(){
		
		var effect_name = $(this).attr("data-effect");	
	
		$(this).parent().toggleClass(effect_name);
		
	})
			
});		