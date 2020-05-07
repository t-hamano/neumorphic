/**
 * Scripts for block editor custom style.
 */

wp.domReady( function() {
	// Social links
	wp.blocks.registerBlockStyle( 'core/social-links', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false,
	} );
});
