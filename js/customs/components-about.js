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

	/* OWL CAROUSEL
	============================*/
	$("#owl-carousel-latest-projects").owlCarousel({		 
		autoPlay: 2500,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		stopOnHover : true		 
	});
	
	/* MAGNIFIC POPUP 
	=============================*/				
	$('.test-popup-link').magnificPopup({
		type: 'image'		  
	});	
	
	/* TOTOP
	=============================*/
	$('body').toTop();	
	
});		