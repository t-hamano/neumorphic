/**
 * Scripts for the customizer controls.
 */

( function( $ ) {
	wp.customize.bind( 'ready', function() {

		// Set default color for each color based on current color skin.
		var skinName = _wpCustomizeSettings.settings.color_skin.value;

		for ( var controlName in neumorphicSkinList[ skinName ]) {
			var control = wp.customize.control.instance( 'color_' + controlName );
			picker = control.container.find( '.color-picker-hex' );
			control.setting.set( neumorphicSkinList[ skinName ][ controlName ]);

			picker.val( control.setting() );
			picker.wpColorPicker( 'defaultColor', control.setting() );
			picker.attr({
				'placeholder': control.setting(),
				'data-default-color': control.setting()
			});
		}

		// Set each color based on the selected color skin.
		wp.customize( 'color_skin', function( value ) {

			value.bind( function( skinName ) {
				for ( var controlName in neumorphicSkinList[ skinName ]) {
					var control = wp.customize.control.instance( 'color_' + controlName );
					picker = control.container.find( '.color-picker-hex' );
					control.setting.set( neumorphicSkinList[ skinName ][ controlName ]);

					picker.val( control.setting() );
					picker.wpColorPicker( 'defaultColor', control.setting() );
				}
			});
		});
	});
}( jQuery ) );
