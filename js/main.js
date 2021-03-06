$(document).ready(function(){

	// Scroll Animations
	// SmoothScroll
	var smoothScroll = function() {
		$('.smoothscroll').click(function(event){
			event.preventDefault();
			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 700, 'easeInOutExpo');
		});
	};

	var sPageURL = decodeURIComponent(window.location.search.substring(1));
	if(sPageURL){
		$('html, body').animate({
				scrollTop: $( "#"+sPageURL ).offset().top
		}, 700, 'easeInOutExpo');
		console.log("sPageURL");
	}
	
	// Animate Feature
	var general = function() {
		$('.animate-box').waypoint( function( direction ) {
			if( direction === 'down' && !$(this).hasClass('animated') ) {
				$(this.element).addClass('fadeInUp animated');
			}
		} , { offset: '70%' } );
	};
	
	var header = function() {
		if ( $('#header').length > 0 ) {
			$('#header').waypoint( function( direction ) {				
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					setTimeout(function(){
						$('.hero-animate-1').addClass('fadeInUp animated');
					}, 400);
					setTimeout(function(){
						$('.hero-animate-2').addClass('fadeInUp animated');
					}, 700);
					setTimeout(function(){
						$('.hero-animate-3').addClass('fadeInUp animated');
					}, 900);
					$(this).addClass('animated');
						
				}
			} , { offset: '70%' } );
		}
	};
	
	var items = function() {
		if ( $('#dos').length > 0 ) {
			$('#dos').waypoint( function( direction ) {				
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					setTimeout(function(){
						$('.item-animate-1').addClass('fadeInUp animated');
					}, 100);
					setTimeout(function(){
						$('.item-animate-2').addClass('fadeInUp animated');
					}, 300);
					setTimeout(function(){
						$('.item-animate-3').addClass('fadeInUp animated');
					}, 500);
					
					$(this).addClass('animated');
				}
			} , { offset: '70%' } );
		}
	};
	
	$(function(){
		general();
		header();
		items();
		smoothScroll();
	});
});