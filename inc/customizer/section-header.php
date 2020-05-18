<?php
/**
 * Neumorphic customizer (Header section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_header( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_header',
		array(
			'title'    => __( 'Header Setting', 'neumorphic' ),
			'priority' => 120,
		)
	);

	// Display search bar
	$wp_customize->add_setting(
		'header_search_display',
		array(
			'default'           => NEUMORPHIC_HEADER_SEARCH_DISPLAY,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'header_search_display',
		array(
			'section'  => 'section_header',
			'settings' => 'header_search_display',
			'label'    => __( 'Display search bar on header ( Desktop view )', 'neumorphic' ),
			'type'     => 'checkbox',
		)
	);

	// Display SNS icon
	$wp_customize->add_setting(
		'header_sns_display',
		array(
			'default'           => NEUMORPHIC_HEADER_SNS_DISPLAY,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'header_sns_display',
		array(
			'section'  => 'section_header',
			'settings' => 'header_sns_display',
			'label'    => __( 'Display SNS icon on header', 'neumorphic' ),
			'type'     => 'checkbox',
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_header' );
