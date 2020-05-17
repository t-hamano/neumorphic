/**
 * Scripts for block editor.
 */

wp.domReady( function() {

	// Add custom style
	wp.blocks.registerBlockStyle( 'core/image',           { name: 'nm-none',    label: 'No Neumorphic',  isDefault: false });

	wp.blocks.registerBlockStyle( 'core/cover',           { name: 'nm',         label: 'Neumorphic',     isDefault: false });
	wp.blocks.registerBlockStyle( 'core/cover',           { name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false });

	wp.blocks.registerBlockStyle( 'core/media-text',      { name: 'nm',         label: 'Neumorphic',     isDefault: false });

	wp.blocks.registerBlockStyle( 'core/columns',         { name: 'nm',         label: 'Neumorphic',     isDefault: false });
	wp.blocks.registerBlockStyle( 'core/columns',         { name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false });

	wp.blocks.registerBlockStyle( 'core/group',           { name: 'nm',         label: 'Neumorphic',     isDefault: false });
	wp.blocks.registerBlockStyle( 'core/group',           { name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false });

	wp.blocks.registerBlockStyle( 'core/social-links',    { name: 'nm',         label: 'Neumorphic',     isDefault: false });
});
