( function( $ ) {
	'use strict';

	/*  Hauteur 100% bloc page-header sur mobile*/
	if(window.innerWidth <= 1024) {
		var viewportHeight = $(window).height();
		$( ".page-header" ).height( viewportHeight );
	}

	$(window).resize( function() {
		if(window.innerWidth <= 1024) {
			var viewportHeight = $(window).height();
			$( ".page-header" ).height( viewportHeight );
		}
	});
	
	$( document ).ready( function() {
		
		/* direct menu */
		$( '.direct-menu a' ).focus( function() {
			$( '.direct-menu' ).addClass( 'focus' );
		} );
		$( '.direct-menu a' ).blur( function() {
			$( '.direct-menu' ).removeClass( 'focus' );
		} );
		


		/* Colored summary */
		jQuery(".summary-items a").on("click", function (e) {
			jQuery(".summary-items a").removeClass("current");
			e.currentTarget.classList.add("current");
		});

		/* Smooth scroll */
		jQuery('.summary-items a[href*="#"]').click( function() { // Au clic sur un élément
			var page = jQuery(this).attr('href'); // Page cible
			var ancre = page.replace('#','');
			var scrollOffset = window.innerWidth < 960 ? 20 : 150;
			var coordonnees = jQuery('h2[id="' + ancre + '"]').offset().top - scrollOffset;
			var speed = 750; // Durée de l'animation (en ms)
			jQuery('html, body').animate( { scrollTop: coordonnees }, speed ); // Go
			return false;
		});

		/* Summary open */
		$(".summary-open-button").on('click', function() {
			$(".summary-items").toggleClass("opened");
			$(".summary-open-button .icon-arrow-right").toggleClass("opened");
		});

		/* Summary close on click outside */
		$(document).on('click', function(e) {
			var isClickInsideElement = $('.page-summary').has(e.target).length;
			if(!isClickInsideElement && $(".summary-items").hasClass("opened"))
			{
				$(".summary-items").toggleClass("opened");
				$(".summary-open-button .icon-arrow-right").toggleClass("opened");
			}
		});

		/* Summary anchor highlight */
		// Cache selectors
		var lastId;
		// All list items
		var menuItems = $(".summary-items a"),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});
		// Bind to scroll
		$(window).scroll(function(){
		  // Get container scroll position
		  var fromTop = $(this).scrollTop() + 150;
		  // Get id of current scroll item
		  var cur = scrollItems.map(function(){
			if ($(this).offset().top < fromTop)
			  return this;
		});
		// Get the id of the current element
		cur = cur[cur.length-1];
		var id = cur && cur.length ? cur[0].id : "";

		if (lastId !== id) {
		  	lastId = id;
		  	// Set/remove active class
		  	menuItems.removeClass("current");
			menuItems.filter("[href='#"+id+"']").addClass("current");
		  }
		});

		/* Animation bloc crédits photos */
		if (window.innerWidth < 960) {
			$( ".block-copyright" ).click( function() {
				$( this ).toggleClass( "open" );
			} );
		} else {
			$( ".block-copyright" ).hover( function() {
				$( this ).toggleClass( "open" );
			} );
		}

		/* Block contact fixed mobile */
		$( ".dae-single-contact-open-button" ).click(function() {
			$( ".dae-single-col-aside" ).toggleClass( "open" );
			$( 'body' ).toggleClass( 'mobile-overflow' );
		});

		/* Affichage bouton fiche apidae responsive */
		if (window.innerWidth < 960) {
			$( window ).scroll( function () {
				if( $( window ).scrollTop() > 90 && $( window ).scrollTop() < ( $( '#footer' ).position().top - $(window).height() ) ) {
					$( ".dae-single-col-aside" ).addClass( "visible" );
				} else {
					$( ".dae-single-col-aside" ).removeClass( "visible" );
				}
			} );
		}

		/* Bouton retour haut de page */
		$('.return-top').click( function () {
			jQuery('html, body').animate( { scrollTop: 0 }, 1000 );
			return false;
		} );

		/* Complianz montrer bannière cookies */
		/* https://complianz.io/add-a-link-to-show-the-cookie-banner/ */
		$(document).on('click', '.cmplz-show-banner', function(){
			$('.cc-revoke').click();
			$('.cc-revoke').fadeOut();
			return false;
		});

	} );
} ) ( jQuery );


/* card link */
const cards_link = document.querySelectorAll(".card-default,.dae-card");
cards_link.forEach( card => {
	let link = card.querySelector( '.main-link,.dae-block-title a' );

	card.addEventListener( 'click', () => {
		const isTextSelected = window.getSelection().toString();

		if (!isTextSelected) {
			link.click();
		}
	} );
} );

/* cover link */
const block_cover_link = document.querySelectorAll(".wp-block-cover");
block_cover_link.forEach( cover => {
	let link = cover.querySelector( '.wp-block-button__link' );

	cover.addEventListener( 'click', () => {
		const isTextSelected = window.getSelection().toString();

		if (!isTextSelected) {
			link.click();
		}
	} );
} );




/* block summary */
if ( jQuery(".page-aside .page-summary").length > 0 && jQuery(".page-aside .page-summary").height() < jQuery(".col-page").height() ) {
	jQuery(window).scroll(function(){
		var offset = window.innerHeight;
		var bottom = jQuery(".col-page").offset().top + jQuery(".col-page").height();
		if(window.innerWidth >= 1200) {
			offset = 150;
		}
		if ( jQuery(window).scrollTop() > jQuery(".page-aside").offset().top - offset ) {
			//jQuery(".page-summary").addClass("fixed");
			jQuery(".summary-open-button").removeClass("hidden");
			if ( jQuery(window).scrollTop() > bottom - (offset - 100) - jQuery(".page-summary").height() ) {
				//jQuery(".page-summary").removeClass("fixed");
				jQuery(".summary-items").removeClass("opened");
				jQuery(".summary-open-button .icon-arrow-right").removeClass("opened");
				jQuery(".summary-open-button").addClass("hidden");
			}
		}
		else {
			//jQuery(".page-summary").removeClass("fixed");
			jQuery(".summary-items").removeClass("opened");
			jQuery(".summary-open-button .icon-arrow-right").removeClass("opened");
			jQuery(".summary-open-button").addClass("hidden");
		}
	});
}

