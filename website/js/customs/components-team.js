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
	
	/* MAGNIFIC POPUP 
	=============================*/		
	$('.test-popup-link').magnificPopup({
		type: 'image'		  
	});	
	
	/* OWL CAROUSEL
	============================*/
	$("#owl-carousel-team").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		stopOnHover : true		 
	});
	
	$("#owl-carousel-hmt3").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items :4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		stopOnHover : true		 
	});

	/*BOOTSTRAP TOOLTIP 
	=============================*/
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	
	/* TOTOP
	=============================*/
	$('body').toTop();				
			
});		