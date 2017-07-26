jQuery(document).ready(function($) {
	
	// Dropdown Menu Start
	$(".nav_trigger").click(function(){
		$(".main_navigation").stop(true).slideToggle();
		$(this).toggleClass("active");
	});
	
	if ($(window).width() > 1024) {
		
		$("nav.main_navigation ul li").hover(function(){
			$(this).children("ul").stop(true).slideToggle("fast");
		});
	
	}
	
	// Mobile menu
	var mobMenuBtn = $('.main_navigation li a'),
		mobMenu = $('.main_navigation');
	mobMenu.find('a').click(function(event) {
		var $this = $(this),
			subMenu = $this.next('.sub-menu');
			
		if ( subMenu.length && subMenu.is(':hidden') ) {
			event.preventDefault();
			$('.sub-menu').slideUp();
			subMenu.slideDown();
		}
	});
	
	// Menu
	$('.nolink > a').click(function(e){
		e.preventDefault();
	});
	
	// Contact form
	$(".wpcf7").on( "submit", function( event ) {
		setTimeout(function(){ $(".wpcf7-mail-sent-ok").hide(); }, 9000);
	});
	// Contact Form Helps
	$(".file_button").click(function(){
		$('input[name="file-659"]').click();
	});
	
	// Gallery
	$(".fancybox").fancybox();
	
	/*var columnWidth = 265;
	if ($(window).width() <= 1024) {
		columnWidth = '.grid-sizer';
	}
	var $container = $('.grid');
	$container.imagesLoaded(function(){
		$container.masonry({
			itemSelector: '.grid-item',
			percentPosition: true,
			gutter: 6,
			columnWidth: columnWidth
		}).css({'visibility':'visible'});
	});*/
	
	/*$('.grid ').wookmark({
		offset: 6,
		verticalOffset: 6,
		itemWidth: columnWidth
	});*/
	
	$(".nav_arrow").click(function(e){
		$('html, body').animate({ scrollTop: $(this).parent().parent().parent().parent().next().offset().top}, 1000);
	});
	
	// Popup
	$(".popup_show_1").click(function(e){
		e.preventDefault();
		var options = {};
		//$("#pp_1").show(400);
		$("html").addClass("fancybox-lock").addClass("fancybox-margin").height($(window).height());
		$("#pp_1").show('blind', options, 400);
	});
	$(".popup_show_2").click(function(e){
		e.preventDefault();
		var options = {};
		//$("#pp_2").show(400);
		$("html").addClass("fancybox-lock").addClass("fancybox-margin").height($(window).height());
		$("#pp_2").show('blind', options, 400);
	});
	$(".popup_body .close").click(function(e){
		$("html").removeClass("fancybox-lock").removeClass("fancybox-margin").height('auto');
		$(this).parent().parent().fadeOut(300);
	});	
});