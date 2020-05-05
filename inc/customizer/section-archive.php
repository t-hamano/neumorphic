<?php
/**
 * Neomorphic customizer (Archive page section)
 *
 * @package neomorphic
 */

function neomorphic_customizer_archive( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_archive',
		array(
			'title'    => __( 'Archive Page Setting', 'neomorphic' ),
			'priority' => 150,
		)
	);

	// Default Thumbnail Image
	$wp_customize->add_setting(
		'archive_default_image',
		array(
			'default'           => '',
			'sanitize_callback' => 'neomorphic_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'archive_default_image',
			array(
				'section'     => 'section_archive',
				'settings'    => 'archive_default_image',
				'label'       => __( 'Default thumbnail image', 'neomorphic' ),
				'description' => __( 'Display when no thumbnail image is set.', 'neomorphic' ),
			)
		)
	);
}

add_action( 'customize_register', 'neomorphic_customizer_archive' );
