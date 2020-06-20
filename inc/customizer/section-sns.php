<?php
/**
 * Neumorphic customizer (SNS section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_sns( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_sns',
		array(
			'title'       => __( 'SNS Setting', 'neumorphic' ),
			'priority'    => 160,
			'description' => __( 'You can register up to five.<br>The icon will be displayed If you enter both icon and URL.<br>If you don\'t see any icons, make sure that "Display SNS icon" is checked in the header or footer settings.', 'neumorphic' ),
		)
	);

	// SNS icon name list
	global $neumorphic_sns_choice;

	$sns_icons = array_merge(
		array(
			'none' => __( 'None', 'neumorphic' ),
		),
		$neumorphic_sns_choice
	);

	// SNS icon and url
	for ( $i = 1; $i <= 5; $i++ ) {
		$wp_customize->add_setting(
			'sns_icon_' . $i,
			array(
				'default'           => 'none',
				'sanitize_callback' => 'neumorphic_sanitize_choices_sns',
			)
		);

		$wp_customize->add_control(
			'sns_icon_' . $i,
			array(
				'section'  => 'section_sns',
				'settings' => 'sns_icon_' . $i,
				'label'    => sprintf(
					/* translators: 1: sns label index */
					__( '%s - Icon', 'neumorphic' ),
					$i
				),
				'type'     => 'select',
				'choices'  => $sns_icons,
			)
		);

		$wp_customize->add_setting(
			'sns_url_' . $i,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'sns_url_' . $i,
			array(
				'section'  => 'section_sns',
				'settings' => 'sns_url_' . $i,
				'label'    => sprintf(
					/* translators: 1: sns url index */
					__( '%s - URL', 'neumorphic' ),
					$i
				),
				'type'     => 'url',
			)
		);
	}
}

add_action( 'customize_register', 'neumorphic_customizer_sns' );
