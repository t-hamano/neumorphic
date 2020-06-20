<?php
/**
 * Neumorphic customizer CSS generator.
 *
 * @package neumorphic
 */

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
