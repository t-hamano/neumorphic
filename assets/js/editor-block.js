/**
 * Scripts for block editor.
 */

wp.domReady( function() {

	// Add custom style (Cover)
	wp.blocks.registerBlockStyle( 'core/cover', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core/cover', {
		name: 'nm-reverse',
		label: 'Neomorphic Rev',
		isDefault: false
	});

	// Add custom style (Gallery)
	wp.blocks.registerBlockStyle( 'core/gallery', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core/gallery', {
		name: 'nm-reverse',
		label: 'Neomorphic Rev',
		isDefault: false
	});

	// Add custom style (Media & Text)
	wp.blocks.registerBlockStyle( 'core/media-text', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core/media-text', {
		name: 'nm-reverse',
		label: 'Neomorphic Rev',
		isDefault: false
	});

	// Add custom style (Columns)
	wp.blocks.registerBlockStyle( 'core/columns', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core/columns', {
		name: 'nm-reverse',
		label: 'Neomorphic Rev',
		isDefault: false
	});

	// Add custom style (Group)
	wp.blocks.registerBlockStyle( 'core/group', {
			name: 'nm',
			label: 'Neomorphic',
			isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core/group', {
		name: 'nm-reverse',
		label: 'Neomorphic Rev',
		isDefault: false
	});

	// Add custom style (Social links)
	wp.blocks.registerBlockStyle( 'core/social-links', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});

	// Add custom style (Embed)
	wp.blocks.registerBlockStyle( 'core-embed/youtube', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core-embed/instagram', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core-embed/facebook', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
	wp.blocks.registerBlockStyle( 'core-embed/twitter', {
		name: 'nm',
		label: 'Neomorphic',
		isDefault: false
	});
});
