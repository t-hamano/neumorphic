( function( $ ) {
	$( function() {

	// CSS custom properties support for legacy and modern browsers
	cssVars();

	// Apply mediaelement style to audio block
	$( '.wp-block-audio audio' ).addClass( 'mejs__player' );

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

	// Show / Hide fixed global menu
	if ( adminBar.length ) {
		fixedGnav.css( 'margin-top', adminBar.outerHeight() );
	}

	$( window ).scroll( function() {
		if ( 200 < $( this ).scrollTop() ) {
			fixedGnav.attr( 'aria-hidden', false );
		} else {
			fixedGnav.attr( 'aria-hidden', true );
		}
	});

	// Open / Close drawer menu
	if ( adminBar.length ) {
		drawer.css( 'padding-top', adminBar.outerHeight() );
	}

	mobileHmBtn.on( 'click', function() {
		var toggled = ( 'true' == $( this ).attr( 'aria-expanded' ) );
		mobileHmBtn.attr( 'aria-expanded', ! toggled );
		drawer.attr( 'aria-hidden', toggled );
	});

	// Close drawer menu
	mobileCloseBtn.on( 'click', function() {
		mobileHmBtn.attr( 'aria-expanded', false );
		drawer.attr( 'aria-hidden', true );
	});

	// Open / Close Drawer sub menu
	$( '.drawer__toggle' ).on( 'click', function() {
		var toggled = ( 'true' == $( this ).attr( 'aria-expanded' ) );
		$( '.drawer__toggle' ).attr( 'aria-expanded', false );
		$( '.drawer__submenu' ).attr( 'aria-hidden', true );
		$( this ).attr( 'aria-expanded', ! toggled );
		$( this ).next( '.drawer__submenu' ).attr( 'aria-hidden', toggled );
	});

	$( '.drawer__subitem a' ).on( 'focus', function() {
		var drawerItem = $( this ).parents( '.drawer__item' );
		$( '.drawer__toggle' ).attr( 'aria-expanded', false );
		$( '.drawer__submenu' ).attr( 'aria-hidden', true );
		drawerItem.find( '.drawer__toggle' ).attr( 'aria-expanded', true );
		drawerItem.find( '.drawer__submenu' ).attr( 'aria-hidden', false );
	});

	// Open / Close global sub menu
	$( '.c-gnav__list > .menu-item' ).on( 'mouseover', function() {
		$( '.c-gnav__submenu' ).attr( 'aria-hidden', true );
		$( this ).find( '.c-gnav__submenu' ).attr( 'aria-hidden', false );
	}).on( 'mouseout', function() {
		$( '.c-gnav__submenu' ).attr( 'aria-hidden', true );
	});

	$( '.c-gnav__item > a' ).on( 'focus', function() {
		$( '.c-gnav__submenu' ).attr( 'aria-hidden', true );
		$( this ).next( '.c-gnav__submenu' ).attr( 'aria-hidden', false );
	});

	// Smooth scroll
	$( 'a[href*=#]' ).on( 'click', function() {
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
