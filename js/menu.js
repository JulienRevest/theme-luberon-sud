( function( $ ) {
	'use strict';
	var lastScrollTop = 0;
	$( document ).ready( function() {

		/* Menu sticky */
		stickyMenu();
		lastScrollTop = $( window ).scrollTop();
		$( window ).scroll( function () {
			stickyMenu();
		} );

		
		/* Ouverture du menu */
		$( ".menu-burger" ).click( function(e) {
			$( "#header" ).toggleClass( "menu-open" );
			$( 'body' ).toggleClass( 'mobile-overflow' );
			$( ".submenu-back" ).removeClass( "visible" );

			if($( '#header' ).hasClass( "search-open" )){
				$( '#header' ).removeClass( 'search-open' );
				$( 'body' ).addClass( 'mobile-overflow' );
			}
		} );

		/* accessible menu/submenu */
		if ( document.getElementById( 'menu-header-main' ) && window.innerWidth > 768 ) {
			var menubar = new Menubar( document.getElementById( 'menu-header-main' ) );
			menubar.init();
		}

		/* Fermer le menu */
		$( '#main' ).click( function() {
			if($( '#header' ).hasClass( "menu-open" )){
				$( '#header' ).removeClass( 'menu-open' );
				$( 'body' ).removeClass( 'mobile-overflow' );
			}
		} );

		/*  Search mobile modal */
		$( ".search-modal-button" ).click( function() {
			$( "#header" ).addClass( "search-open" );
			$( 'body' ).addClass( 'mobile-overflow' );

			if($( '#header' ).hasClass( "menu-open" )){
				$( '#header' ).removeClass( 'menu-open' );
				$( 'body' ).addClass( 'mobile-overflow' );
			}
		} );
		$( ".search-modal-close" ).click( function() {
			$( "#header" ).removeClass( "search-open" );
			$( 'body' ).removeClass( 'mobile-overflow' );
		} );

		/* Ouverture des sous menu */
		if ( window.innerWidth <= 768 ) {
			$( '.menu-item-has-children > a' ).click( function() {
				$( this ).parents( 'li' ).addClass( 'open' );
				$( '.submenu-back' ).addClass( 'visible' );
				return false;
			});
			$( '.submenu-back' ).click( function() {
				$( this ).removeClass( 'visible' );
				$( '#header li' ).removeClass( 'open' );
			} );
		}
		
		/* Fix hauteur menu mobile */
		if(window.innerWidth <= 768) {
			var viewportHeight = $(window).height();
			$( ".navigation-open" ).height( viewportHeight - 150 );

			$(window).resize( function() {
				var viewportHeight = $(window).height();
				$( ".navigation-open" ).height( viewportHeight );
			});
		}
    
	} );

	/* Header sticky */
	function stickyMenu() {
		if( window.innerWidth >= 1024 ) {
			if( $( window ).scrollTop() > 1 ) {
				$( "#header" ).addClass( "sticky" );
			} else {
				$( "#header" ).removeClass( "sticky" );
			}
		} else {
			var currentScroll = $( window ).scrollTop();
			if( currentScroll > 1 && currentScroll < lastScrollTop ) {
				$( "#header" ).addClass( "sticky" );
			} else {
				$( "#header" ).removeClass( "sticky" );
			}
			lastScrollTop = currentScroll;
		}
	}

} ) ( jQuery );
