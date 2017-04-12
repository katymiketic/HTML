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
		if ($(this).scrollTop() > 20) {
			nav.addClass("minti-fixed-nav");
			$(".menuzord-menu li:first").removeClass("op-active-menu-item");
			nav.removeClass("navbar-pd");					
		} else {		
			nav.removeClass("minti-fixed-nav");
			$(".menuzord-menu li:first").addClass("op-active-menu-item");
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

	
	// Hilight MENU on SCROLL	
	
	$(window).scroll(function() {
					
		$(".page").each(function() {
							
			var bb = $(this).attr("id");
			var hei = $(this).outerHeight();				
			var grttop = $(this).offset().top - 70;
			if ($(window).scrollTop() > grttop - 1 && $(window).scrollTop() < grttop + hei - 1) {
				var uu = $(".menuzord-menu li a[href='#" + bb + "']").addClass("op-active-menu-item");
			} else {
				var uu = $(".menuzord-menu li a[href='#" + bb + "']").removeClass("op-active-menu-item");
			}
		});
	});
	
	/* SMOOTH SCROLL
	=============================*/
	smoothScroll.init();
	
});		