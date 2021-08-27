<?php
/**
 * Neumorphic customizer (Post page section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_post( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_post',
		array(
			'title'    => __( 'Post Page Setting', 'neumorphic' ),
			'priority' => 160,
		)
	);

	// Display modified date
	$wp_customize->add_setting(
		'post_modified_date_display',
		array(
			'default'           => NEUMORPHIC_POST_MODIFIED_DATE_DISPLAY,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'post_modified_date_display',
		array(
			'section'  => 'section_post',
			'settings' => 'post_modified_date_display',
			'label'    => __( 'Display modified date', 'neumorphic' ),
			'type'     => 'checkbox',
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_post' );
