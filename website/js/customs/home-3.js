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

	/* COUNTERUP
	=============================*/		
	$('.counter').counterUp({
		delay: 10,
		time: 2000
	});

	/* OWL CAROUSEL
	============================*/				  
	$("#owl-carousel-clients").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items : 5,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		stopOnHover : true		 
	});		 
			  
	$("#owl-carousel-project").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items :3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768,2],
		itemsMobile: [479,1],
		stopOnHover : true		 
	});
	  
	$("#owl-carousel-hmt3").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items :3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		stopOnHover : true		 
	});
					
	/*BOOTSTRAP TOOLTIP 
	=============================*/
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

	/* MAGNIFIC POPUP 
	=============================*/
	$('.test-popup-link').magnificPopup({
		type: 'image'		  
	});	
	
	$('.gallery-item').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});

	/* TOTOP
	=============================*/
	$('body').toTop();
	
});		