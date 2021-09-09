<?php
/**
 * Neumorphic customizer (SNS section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_gutenberg( $wp_customize ) {
	if ( version_compare( $GLOBALS['wp_version'], '5.8', '<' ) ) {
		return;
	}

	// Section
	$wp_customize->add_section(
		'section_gutenberg',
		array(
			'title'    => __( 'Gutenberg Setting', 'neumorphic' ),
			'priority' => 110,
		)
	);

	// Enable block-based widgets editor
	$wp_customize->add_setting(
		'enable_widgets_block_editor',
		array(
			'default'           => NEUMORPHIC_ENABLE_WIDGETS_BLOCK_EDITOR,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'enable_widgets_block_editor',
		array(
			'section'  => 'section_gutenberg',
			'settings' => 'enable_widgets_block_editor',
			'label'    => __( 'Enable block-based widgets editor', 'neumorphic' ),
			'type'     => 'checkbox',
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_gutenberg' );
