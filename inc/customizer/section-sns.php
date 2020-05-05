<?php
/**
 * Neomorphic customizer (SNS section)
 *
 * @package neomorphic
 */

function neomorphic_customizer_sns( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_sns',
		array(
			'title'       => __( 'SNS Setting', 'neomorphic' ),
			'priority'    => 160,
			'description' => __( 'You can register up to five.<br>The icon will be displayed If you enter both icon and URL.<br>If you don\'t see any icons, make sure that "Display SNS icon" is checked in the header or footer settings.', 'neomorphic' ),
		)
	);

	// SNS icon name list
	$sns_icons = array_merge(
		array(
			'none' => __( 'None', 'neomorphic' ),
		),
		NEOMORPHIC_SNS_CHOICE
	);

	// SNS icon and url
	for ( $i = 1; $i <= 5; $i++ ) {
		$wp_customize->add_setting(
			'sns_icon_' . $i,
			array(
				'default'           => 'none',
				'sanitize_callback' => 'neomorphic_sanitize_choices_sns',
			)
		);

		$wp_customize->add_control(
			'sns_icon_' . $i,
			array(
				'section'  => 'section_sns',
				'settings' => 'sns_icon_' . $i,
				'label'    => sprintf(
					/* translators: 1: sns label index */
					__( '%s - Icon', 'neomorphic' ),
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
					__( '%s - URL', 'neomorphic' ),
					$i
				),
				'type'     => 'url',
			)
		);
	}
}

add_action( 'customize_register', 'neomorphic_customizer_sns' );
