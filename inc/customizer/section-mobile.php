<?php
/**
 * Neomorphic customizer (Mobile section)
 *
 * @package neomorphic
 */

function neomorphic_customizer_mobile( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_mobile',
		array(
			'title'    => __( 'Mobile Setting', 'neomorphic' ),
			'priority' => 170,
		)
	);

	// Display search button on mobile drawer menu
	$wp_customize->add_setting(
		'mobile_search_display',
		array(
			'default'           => NEOMORPHIC_MOBILE_SEARCH_DISPLAY,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'mobile_search_display',
		array(
			'section'  => 'section_mobile',
			'settings' => 'mobile_search_display',
			'label'    => __( 'Display search button on mobile menu', 'neomorphic' ),
			'type'     => 'checkbox',
		)
	);
}

add_action( 'customize_register', 'neomorphic_customizer_mobile' );
