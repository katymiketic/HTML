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
	$('.image-link').magnificPopup({type:'image'});
	
	$('.test-popup-link').magnificPopup({
		type: 'image'		  
	});	
	
	$('.gallery-item').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});

	/* COUNTERUP
	=============================*/		
	$('.counter').counterUp({
		delay: 10,
		time: 2000
	});

	/* OWL CAROUSEL
	============================*/
	$("#owl-carousel-team").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768,2],
		itemsMobile: [479,1],
		stopOnHover : true		 
	  });
					  
	$("#owl-carousel-latest-projects").owlCarousel({		 
		autoPlay: 2500,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
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