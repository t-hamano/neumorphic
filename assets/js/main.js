( function( $ ) {
$( function() {

	// Drawer menu
	var drawer = $( '#drawer' );

	// Drawer menu open/close button
	var mobileHmBtn = $( '#mobile_hm_btn' );

	// Drawer menu close button
	var mobileCloseBtn = $( '#mobile_close_btn' );

	// Open / Close drawer menu
	mobileHmBtn.on( 'click', function() {
		if ( mobileHmBtn.is( '[aria-expanded="false"]' ) ) {

			// Open drawer menu
			mobileHmBtn.attr( 'aria-expanded', true );
			drawer.attr( 'aria-hidden', false );
		} else {

			// Close drawer menu
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

			// Open sub menu
			targetToggle.attr( 'aria-expanded', true );
			targetSubmenu.attr( 'aria-hidden', false );
		} else {

			// Close sub menu
			targetToggle.attr( 'aria-expanded', false );
			targetSubmenu.attr( 'aria-hidden', true );
		}
	});

	// Open / Close global sub menu
	$( '.gnav__list > .menu-item' ).mouseover( function() {
		$( this ).find( '> .gnav__submenu' ).attr( 'aria-hidden', false );
	}).mouseout( function() {
		$( this ).find( '> .gnav__submenu' ).attr( 'aria-hidden', true );
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
}( jQuery ) );
