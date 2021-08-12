/**
 * Scripts for the customizer controls.
 */

wp.customize.bind( 'ready', function () {
	// Set each color based on the selected color skin.
	wp.customize( 'color_skin', function ( value ) {
		value.bind( function ( skinName ) {
			for ( const controlName in neumorphicSkinList[ skinName ] ) {
				const control = wp.customize.control.instance(
					'color_' + controlName
				);
				picker = control.container.find( '.color-picker-hex' );
				control.setting.set(
					neumorphicSkinList[ skinName ][ controlName ]
				);

				picker.val( control.setting() );
				picker.wpColorPicker( 'defaultColor', control.setting() );
			}
		} );
	} );
} );
