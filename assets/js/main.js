

( function( $ ) {
	$( function() {

	// CSS custom properties support for legacy and modern browsers
	cssVars();

	// Admin bar
	var adminBar = $( '#wpadminbar' );

	// Fixed global menu
	var fixedGnav = $( '#fixed_gnav' );

	// Drawer menu
	var drawer = $( '#drawer' );

	// Drawer menu open/close button
	var mobileHmBtn = $( '#mobile_hm_btn' );

	// Drawer menu close button
	var mobileCloseBtn = $( '#mobile_close_btn' );

	// Show/Hide fixed global menu
	if ( adminBar.length ) {
		fixedGnav.css( 'margin-top', 32 );
	}
	$( window ).scroll( function() {
		if ( 200 < $( this ).scrollTop() ) {

			// Show
			fixedGnav.attr( 'aria-hidden', false );
		} else {

			// Hide
			fixedGnav.attr( 'aria-hidden', true );
		}
	});

	// Open / Close drawer menu
	mobileHmBtn.on( 'click', function() {
		if ( mobileHmBtn.is( '[aria-expanded="false"]' ) ) {

			// Open
			mobileHmBtn.attr( 'aria-expanded', true );
			drawer.attr( 'aria-hidden', false );
		} else {

			// Close
			mobileHmBtn.attr( 'aria-expanded', false );
			drawer.attr( 'aria-hidden', true );
		}
	});

	// Close drawer menu
	mobileCloseBtn.on( 'click', function() {
		mobileHmBtn.attr( 'aria-expanded', false );
		drawer.attr( 'aria-hidden', true );
	});

	// Open / Close Drawer sub menu
	$( '.drawer__toggle' ).on( 'click', function() {
		var targetToggle = $( this );
		var targetSubmenu = $( this ).next( '.drawer__submenu' );
		targetSubmenu.attr( 'aria-hidden', true );

		$( '.drawer__toggle' ).not( targetToggle ).attr( 'aria-expanded', false );
		$( '.drawer__submenu--depth-0' ).not( targetSubmenu ).attr( 'aria-hidden', true );

		if ( targetToggle.is( '[aria-expanded="false"]' ) ) {

			// Open
			targetToggle.attr( 'aria-expanded', true );
			targetSubmenu.attr( 'aria-hidden', false );
		} else {

			// Close
			targetToggle.attr( 'aria-expanded', false );
			targetSubmenu.attr( 'aria-hidden', true );
		}
	});

	// Open / Close global sub menu
	$( '.c-gnav__list > .menu-item' ).mouseover( function() {

		// Open
		$( this ).find( '> .c-gnav__submenu' ).attr( 'aria-hidden', false );
	}).mouseout( function() {

		// Close
		$( this ).find( '> .c-gnav__submenu' ).attr( 'aria-hidden', true );
	});

	// Smooth scroll
	$( 'a[href*=#]' ).click( function() {
		var href = $( this ).attr( 'href' );
		var target = $( '#' == href || '' == href ? 'html' : href );

		if ( target.length ) {
			var position = target.offset().top;
			$( 'html, body' ).animate(
				{ scrollTop: position },
				500,
				'swing'
			);
		}

		return false;
	});
});
} ( jQuery ) );
