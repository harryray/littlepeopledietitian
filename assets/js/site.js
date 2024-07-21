// Contents
	// Smoothscroll anchors
	// Header nav
	// ScrollMagic
	// Charts and Tables
	// Hero interactivity
	// Preloader
	// Timeline Countup
	// Items Under Image Countup
	// "Bouncer" (Investor Type + Location) popup
	// Text / Image image sizing & animation
	// Page Links block
	// Share Class Information Block
	// Sliding items
	// American Fund Download & Print
	// Newsletter Archive page link handling

	(function ($, root, undefined) {
	
	$(function () {

		'use strict';

		var interactionListener = ( window.ontouchstart !== undefined ) ? 'touchstart' : 'click';

// Smoothscroll anchors
		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: (target.offset().top + 1)
		        }, 1000);
		      }
		    }
		  });

// Header nav
		// Show menu
		 $('.header__nav-toggle').click(function(){
		 	$('.header__nav-toggle').toggleClass('active')
		 	$('body').toggleClass('submenu-showing')
		 	$('.header').toggleClass('active')
		 	$('header nav').fadeToggle(300)
		 })
		// Header appear on scrollup
		var lastScrollTop = window.pageYOffset || $(window).scrollTop;
		$(window).scroll(function(e) {  
		    var scroll = window.pageYOffset || $(window).scrollTop();
		    if(!($('.header').hasClass('active'))) {

			    if(scroll > 100) {
						$('.header').addClass('background-visible-individual-investor');
					} else {
						$('.header').removeClass('background-visible-individual-investor');
					}

			    if(scroll > 300) {
						$('.header').removeClass('not-sticky');
							$('.header').addClass('scroll--invisible');
							if (scroll > lastScrollTop) {
								$('.header').removeClass('scroll--visible');
							} else {
								$('.header').addClass('scroll--visible');
							}
					} else {
						$('.header').addClass('not-sticky');
					}
			}
		    lastScrollTop = scroll <= 0 ? 0 : scroll;
		});

		/* Testimonials slider */
		jQuery('.testimonials__wrap--slider').slick();

// ************************************************************************************************************ //
	});
})(jQuery, this);