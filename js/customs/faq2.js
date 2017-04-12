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
	
	/* FAQ FILTER 
	=============================*/			
	$("ul.tab li").children(":first").addClass('faq2-active');
	tab= $("ul.tab li a");

	tab.on('click',function(e){
		tab.removeClass('faq2-active').filter(this).addClass('faq2-active');				
		e.preventDefault();		
	});
	
	var faqs = $('.faq-item');				
	faqs.slideDown(300);
	
	$('#faq-category li a').click(function() { 
		
		var customType = $( this ).data('filter');

		if(customType=="all"){
			faqs.slideDown(300);
		}else{				
		faqs
			.slideUp(300)
			.filter(function () {				
				return $(this).data('cat') === customType;				
			})				
			.slideDown(300);	
			}
	});
			
	
	/* TOTOP
	=============================*/
	$('body').toTop();			
	
});		