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
	$("#owl-carousel-hmt4").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items :4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		stopOnHover : true		 
	  });
	  
	$("#owl-carousel-crc").owlCarousel({		 
		autoPlay: 3000, //Set AutoPlay to 3 seconds		 
		items :1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768,1],
		itemsMobile: [479,1],
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
	
	/* REVOLUTION SLIDER
	=============================*/
	jQuery("#slider1").revolution({
		sliderType:"standard",
		sliderLayout:"auto",
		delay:9000,
		navigation: {
			arrows:{enable:true}				
		},			
		gridwidth:1230,
		gridheight:720		
	});		
	
});		