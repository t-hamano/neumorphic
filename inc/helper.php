<?php
/**
 * Helper Functions
 *
 * @package neumorphic
 */

/**
 * Add conditional contents classes (Sidebar display position).
 *
 * @return string $class Class name added to the div.contents tag.
 */
function neumorphic_contents_class() {
	// Get cutomizer settings.
	$display_position = get_theme_mod( 'sidebar_position', NEUMORPHIC_SIDEBAR_POSITION );
	$display_front    = get_theme_mod( 'sidebar_display_front', NEUMORPHIC_SIDEBAR_DISPLAY_FRONT );
	$display_post     = get_theme_mod( 'sidebar_display_post', NEUMORPHIC_SIDEBAR_DISPLAY_POST );
	$display_page     = get_theme_mod( 'sidebar_display_page', NEUMORPHIC_SIDEBAR_DISPLAY_PAGE );
	$display_archive  = get_theme_mod( 'sidebar_display_archive', NEUMORPHIC_SIDEBAR_DISPLAY_ARCHIVE );

	// Give priority to the template display settings If a specific page template is used.
	if ( is_page_template( 'template/sidebar-left.php' ) ) {
		$class = ' contents--sidebar-left';
	} elseif ( is_page_template( 'template/sidebar-right.php' ) ) {
		$class = ' contents--sidebar-right';
	} elseif ( is_page_template( 'template/sidebar-none.php' ) || is_attachment() ) {
		$class = ' contents--sidebar-none';
	} else {
		// Use customizer settings if the page template is not used.
		if (
			( is_front_page() && $display_front ) ||
			( is_single() && $display_post ) ||
			( ( is_archive() || is_home() ) && $display_archive ) ||
			( is_page() && ! is_front_page() && $display_page )
		) {
			$class = 'contents--sidebar-' . $display_position;
		} else {
			$class = 'contents--sidebar-none';
		}
	}

	return $class;
}

/**
 * Generate CSS styles from customizer options.
 */

function neumorphic_generate_css() {
	// Get customizer variables.
	$color_bg                  = esc_html( get_theme_mod( 'color_bg', NEUMORPHIC_COLOR_SKIN['default']['bg'] ) );
	$color_text_main           = esc_html( get_theme_mod( 'color_text_main', NEUMORPHIC_COLOR_SKIN['default']['text_main'] ) );
	$color_accent              = esc_html( get_theme_mod( 'color_accent', NEUMORPHIC_COLOR_SKIN['default']['accent'] ) );
	$color_text_link           = esc_html( get_theme_mod( 'color_text_link', NEUMORPHIC_COLOR_SKIN['default']['text_link'] ) );
	$color_text_border_display = get_theme_mod( 'color_text_border_display', NEUMORPHIC_COLOR_SKIN['default']['text_border_display'] );
	$color_text_border_color   = esc_html( get_theme_mod( 'color_text_border_color', NEUMORPHIC_COLOR_SKIN['default']['text_border_color'] ) );

	if ( ! $color_text_border_display ) {
		$color_text_border_color = 'none';
	}

	// Get a new color based on the neumorphic design and append CSS.
	$light_color = neumorphic_generate_new_color( $color_bg, 0.1 );
	$dark_color  = neumorphic_generate_new_color( $color_bg, -0.15 );

	// Generate CSS variables.
	$styles = array(
		array(
			'selector' => ':root',
			'style'    => array(
				"--color-bg               : {$color_bg}",
				"--color-nm-light         : {$light_color}",
				"--color-nm-dark          : {$dark_color}",
				"--color-text-main        : {$color_text_main}",
				"--color-accent           : {$color_accent}",
				"--color-text-link        : {$color_text_link}",
				"--color-text-border-color: {$color_text_border_color}",
			),
		),
	);

	$output = '';

	foreach ( $styles as $style ) {
		$style['style'] = implode( ';', $style['style'] );

		$output .= sprintf(
			'%s { %s; }',
			$style['selector'],
			$style['style']
		);
	}

	return preg_replace( '/ /', '', $output );
}

/**
 * Generate a new HEX color with changed intensity based on the param HEX color.
 *
 * @param string $hex HEX value.
 * @param double $luminance Percentage of luminance to change
 *
 * @return string $new_color HEX value.
 */
function neumorphic_generate_new_color( $hex, $luminance ) {
	// Value expression check.
	if ( ! preg_match( '/^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/', $hex ) ) {
		return $hex;
	}

	// Trim "#".
	$hex = substr( $hex, 1 );

	// Convert 3 digits to 6 digits.
	if ( strlen( $hex ) === 3 ) {
		$hex = substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) . substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) . substr( $hex, 2, 1 ) . substr( $hex, 2, 1 );
	}

	$new_hex = '#';

	// Cut out the value of hex by two digits and change luminance.
	for ( $i = 0; $i < 3; $i++ ) {
		$color_pair  = hexdec( substr( $hex, $i * 2, 2 ) );
		$color_pair += $color_pair * $luminance;
		$color_pair  = dechex( round( min( 245, max( 10, $color_pair ) ) ) );
		$color_pair  = str_pad( $color_pair, 2, '0', STR_PAD_LEFT );
		$new_hex    .= $color_pair;
	}

	return $new_hex;
}
