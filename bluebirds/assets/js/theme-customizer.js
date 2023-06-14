jQuery(function( $ ) {

	// Colors

	wp.customize( 'tagline-color', function( value ) {
		value.bind( function( newVal ) {
			$( '.site-ident h1' ).css( 'color', newVal );
		} );
	});
    	wp.customize( 'header-bg', function( value ) {
		value.bind( function( newVal ) {
			$( '.header' ).css( 'background', newVal );
		} );
	});
    	wp.customize( 'nav-menu', function( value ) {
		value.bind( function( newVal ) {
			$( '.navbar .navbar-nav a.nav-link' ).css( 'color', newVal );
		} );
	});
	wp.customize( 'nav-menu-active', function( value ) {
		value.bind( function( newVal ) {
			$( '.navbar .navbar-nav li.current-menu-item a.nav-link' ).css( 'color', newVal );
		} );
	});
	wp.customize( 'child-nav-menu', function( value ) {
		value.bind( function( newVal ) {
			$( '.navbar .navbar-nav ul.sub-menu a.nav-link' ).css( 'color', newVal );
		} );
	});
	wp.customize( 'child-nav-menu-active', function( value ) {
		value.bind( function( newVal ) {
			$( '.navbar .navbar-nav ul.sub-menu li.current-menu-item a.nav-link' ).css( 'color', newVal );
		} );
	});
	wp.customize( 'hamburger-menu-icon', function( value ) {
		value.bind( function( newVal ) {
			$( '.navbar .navbar-toggler' ).css( 'background', newVal );
		} );
	});
	wp.customize( 'menu-bg', function( value ) {
		value.bind( function( newVal ) {
			$( '#navbarResponsive' ).css( 'background', newVal );
		} );
	});
        wp.customize( 'slider-bg', function( value ) {
		value.bind( function( newVal ) {
			$( '.container-fluid' ).css( 'background', newVal );
		} );
	});
        wp.customize( 'blog-post-bg', function( value ) {
		value.bind( function( newVal ) {
			$( '.blog-posts .blog-post' ).css( 'background', newVal );
		} );
	});
        wp.customize( 'footer-bg', function( value ) {
		value.bind( function( newVal ) {
			$( '.footer' ).css( 'background', newVal );
		} );
	});
	wp.customize( 'footer-menu', function( value ) {
		value.bind( function( newVal ) {
			$( '.footer .footer-widget-area li a' ).css( 'color', newVal );
		} );
	});
	wp.customize( 'footer-menu-active', function( value ) {
		value.bind( function( newVal ) {
			$( '.footer .footer-widget-area li.current-menu-item a' ).css( 'color', newVal );
		} );
	});

});