<?php
/**
 * Neomorphic customizer (Site title and description)
 *
 * @package neomorphic
 */

function neomorphic_customizer_title_tagline( $wp_customize ) {
	// Site title and description
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.header__brand-title a',
			'render_callback' => function() {
				bloginfo( 'name' );
			},
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.header__brand-description span',
			'render_callback' => function() {
				bloginfo( 'description' );
			},
		)
	);
}

add_action( 'customize_register', 'neomorphic_customizer_title_tagline' );
