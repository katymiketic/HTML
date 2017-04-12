$(function() {
	
	"use strict";

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
					
	/* FILTERIZR ===================== */
			
	$('.filtr-container').imagesLoaded().always( function( instance ) {
				  
		var content = $(".photogallery ul"),
		tab= $("ul.tab li a");

		tab.on('click',function(e){
			tab.removeClass('pg-active').filter(this).addClass('pg-active');				
			e.preventDefault();		
		});
		
		var options = {
			animationDuration: 0.5, //in seconds
			filter: 'all', //Initial filter
			callbacks: { 
				onFilteringStart: function() { },
				onFilteringEnd: function() { }
			},
			delay: 0, //Transition delay in ms
			delayMode: 'progressive', //'progressive' or 'alternate'
			easing: 'ease-out',
			
			filterOutCss: { //Filtering out animation
				opacity: 0,
				transform: 'scale(0)'
			},
			
			filterInCss: { //Filtering in animation
				opacity: 1,
				transform: 'scale(1)'
			},
			
			layout: 'sameSize', //See layouts
			selector: '.filtr-container',
			setupControls: true 
		} 
		//You can override any of these options and then call...
		var filterizd = $('.filtr-container').filterizr(options);
		//If you have already instantiated your Filterizr then call...
		filterizd.filterizr('setOptions', options);		
				
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