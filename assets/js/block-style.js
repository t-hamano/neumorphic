/**
 * Scripts for block editor.
 */

/* eslint-disable prettier/prettier */
wp.domReady( function () {
	const styles = [
		// Text
		{ block: 'core/heading',      name: 'nm-none',    label: 'No Neumorphic',  isDefault: false },
		{ block: 'core/quote',        name: 'nm-none',    label: 'No Neumorphic',  isDefault: false },
		{ block: 'core/verse',        name: 'nm-none',    label: 'No Neumorphic',  isDefault: false },
		{ block: 'core/table',        name: 'nm-none',    label: 'No Neumorphic',  isDefault: false },
		// Media
		{ block: 'core/image',        name: 'nm-none',    label: 'No Neumorphic',  isDefault: false },
		{ block: 'core/cover',        name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/cover',        name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/media-text',   name: 'nm',         label: 'Neumorphic',     isDefault: false },
		// Design
		{ block: 'core/columns',      name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/columns',      name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/column',       name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/column',       name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/group',        name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/group',        name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/site-logo',    name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/site-title',   name: 'nm-none',    label: 'No Neumorphic',  isDefault: false },
		{ block: 'core/post-terms',   name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/post-terms',   name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		// Widget
		{ block: 'core/archives',     name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/archives',     name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/categories',   name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/categories',   name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/page-list',    name: 'nm',         label: 'Neumorphic',     isDefault: false },
		{ block: 'core/page-list',    name: 'nm-reverse', label: 'Neumorphic Rev', isDefault: false },
		{ block: 'core/social-links', name: 'nm',         label: 'Neumorphic',     isDefault: false },
	];

	styles.forEach(function( style ){
		wp.blocks.registerBlockStyle( style.block, {
			name: style.name,
			label: style.label,
			isDefault: style.isDefault,
		} );
	});
} );

