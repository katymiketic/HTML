$(function() {
	
	"use strict";

	new WOW().init();
			
	/* MENUZORD 
	=============================*/		
	jQuery("#menuzord").menuzord();
	
	/* OWL CAROUSEL
	============================*/	 
	$("#owl-carousel-project").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items :3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768,2],
		itemsMobile: [479,1],
		stopOnHover : true		 
	});
	
	/* MAGNIFIC POPUP 
	=============================*/		
				
	$('.gallery-item').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});
	
	$('.test-popup-link').magnificPopup({type:'image'});
	
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
			
});		