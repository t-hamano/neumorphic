<?php
/**
 * Neumorphic customizer (Mobile section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_mobile( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_mobile',
		array(
			'title'    => __( 'Mobile Setting', 'neumorphic' ),
			'priority' => 170,
		)
	);

	// Display search button on mobile drawer menu
	$wp_customize->add_setting(
		'mobile_search_display',
		array(
			'default'           => NEUMORPHIC_MOBILE_SEARCH_DISPLAY,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'mobile_search_display',
		array(
			'section'  => 'section_mobile',
			'settings' => 'mobile_search_display',
			'label'    => __( 'Display search button on mobile menu', 'neumorphic' ),
			'type'     => 'checkbox',
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_mobile' );
