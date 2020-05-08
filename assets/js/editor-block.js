/**
 * Scripts for block editor custom style.
 */

wp.domReady( function() {

	// Add custom style (Media & Text)
	wp.blocks.registerBlockStyle(
		'core/media-text',
		{
			name: 'nm',
			label: 'Neomorphic',
			isDefault: false,
		}
	);

		// Add custom style (Columns)
		wp.blocks.registerBlockStyle(
			'core/columns',
			{
				name: 'nm',
				label: 'Neomorphic',
				isDefault: false,
			}
		);

		// Add custom style (Group)
	wp.blocks.registerBlockStyle(
		'core/group',
		{
			name: 'nm',
			label: 'Neomorphic',
			isDefault: false,
		}
	);


	// Add custom style (Social links)
	wp.blocks.registerBlockStyle(
		'core/social-links',
		{
			name: 'nm',
			label: 'Neomorphic',
			isDefault: false,
		}
	);
});
