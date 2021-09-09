/**
 * Scripts for the customizer preview.
 */

( function ( $ ) {
	const root = $( ':root' );
	const blogName = document.querySelector( '.header__brand-title a' );
	const blogDescription = document.querySelector( '.header__brand-description' );

	// Site title
	wp.customize( 'blogname', function ( value ) {
		value.bind( function ( to ) {
			blogName.innerText = to;
		} );
	} );

	// Site description
	wp.customize( 'blogdescription', function ( value ) {
		value.bind( function ( to ) {
			blogDescription.innerText = to;
		} );
	} );

	// Background color
	wp.customize( 'color_bg', function ( value ) {
		value.bind( function ( color ) {
			// Get a new color based on the neumorphic design and append CSS.
			const lightColor = generateNewColor( color, 0.1 );
			const darkColor = generateNewColor( color, -0.15 );

			mergeStyle( {
				'--color-bg': color,
				'--color-nm-light': lightColor,
				'--color-nm-dark': darkColor,
			} );
		} );
	} );

	// Main text color
	wp.customize( 'color_text_main', function ( value ) {
		value.bind( function ( color ) {
			mergeStyle( { '--color-text-main': color } );
		} );
	} );

	// Accent color
	wp.customize( 'color_accent', function ( value ) {
		value.bind( function ( color ) {
			mergeStyle( { '--color-accent': color } );
		} );
	} );

	// Link text color
	wp.customize( 'color_text_link', function ( value ) {
		value.bind( function ( color ) {
			mergeStyle( { '--color-text-link': color } );
		} );
	} );

	// Enable border text
	wp.customize( 'color_text_border_display', function ( value ) {
		value.bind( function ( display ) {
			let color = wp.customize.instance( 'color_text_border_color' ).get();

			if ( ! display ) {
				color = 'none';
			}

			mergeStyle( { '--color-text-border-color': color } );
		} );
	} );

	// Text border color
	wp.customize( 'color_text_border_color', function ( value ) {
		value.bind( function ( color ) {
			const display = wp.customize.instance( 'color_text_border_display' ).get();

			if ( ! display ) {
				color = 'none';
			}

			mergeStyle( { '--color-text-border-color': color } );
		} );
	} );

	/**
	 * Merge new styles with existing styles and set to :root.
	 *
	 * @param {Object} newStylesObj CSS property and value set.
	 * @return {void}
	 */
	function mergeStyle( newStylesObj ) {
		const mergeStylesObj = {};

		// Get existing styles and store in object
		const currentStyles = root.attr( 'style' );
		const currentStylesArr = currentStyles ? currentStyles.split( ';' ) : [];

		for ( let i = 0; i < currentStylesArr.length; i++ ) {
			if ( currentStylesArr[ i ] ) {
				const style = currentStylesArr[ i ].split( ':' );
				const property = style[ 0 ].replace( /\s+/g, '' );
				const value = style[ 1 ].replace( /\s+/g, '' );
				mergeStylesObj[ property ] = value;
			}
		}

		// Add new styles to object
		Object.keys( newStylesObj ).forEach( function ( key ) {
			const property = key.replace( /\s+/g, '' );
			const value = newStylesObj[ key ].replace( /\s+/g, '' );
			mergeStylesObj[ property ] = value;
		} );

		// Convert merged style object to string
		let mergeStylesStr = '';

		Object.keys( mergeStylesObj ).forEach( function ( key ) {
			const style = key + ':' + mergeStylesObj[ key ] + ';';
			mergeStylesStr += style;
		} );

		root.attr( 'style', mergeStylesStr );
	}

	/**
	 * Generate a new HEX color with changed intensity based on the param HEX color.
	 *
	 * @param {string} hex       HEX value.
	 * @param {number} luminance Percentage of luminance to change
	 * @return {string} new_color HEX value.
	 */
	function generateNewColor( hex, luminance ) {
		// Trim #
		hex = hex.slice( 1 );

		// Convert 3 digits to 6 digits
		if ( 3 === hex.length ) {
			hex =
				hex.substr( 0, 1 ) +
				hex.substr( 0, 1 ) +
				hex.substr( 1, 1 ) +
				hex.substr( 1, 1 ) +
				hex.substr( 2, 1 ) +
				hex.substr( 2, 1 );
		}

		let newHex = '#';

		// Cut out the value of hex by two digits and change luminance
		for ( let i = 0; 3 > i; i++ ) {
			let colorPair = parseInt( hex.substr( i * 2, 2 ), 16 );
			colorPair += colorPair * luminance;
			colorPair = Math.round( Math.min( 245, Math.max( 10, colorPair ) ) ).toString( 16 );
			colorPair = ( '00' + colorPair ).substr( colorPair.length );
			newHex += colorPair;
		}

		return newHex;
	}
} )( jQuery );
