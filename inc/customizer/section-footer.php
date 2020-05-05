<?php
/**
 * Neomorphic customizer (Footer section)
 *
 * @package neomorphic
 */

function neomorphic_customizer_footer( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_footer',
		array(
			'title'    => __( 'Footer Setting', 'neomorphic' ),
			'priority' => 130,
		)
	);

	// Display SNS icon
	$wp_customize->add_setting(
		'footer_sns_display',
		array(
			'default'           => NEOMORPHIC_FOOTER_SNS_DISPLAY,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'footer_sns_display',
		array(
			'section'  => 'section_footer',
			'settings' => 'footer_sns_display',
			'label'    => __( 'Display SNS icon on footer', 'neomorphic' ),
			'type'     => 'checkbox',
		)
	);

	// Credit
	$wp_customize->add_setting(
		'footer_credit',
		array(
			'default'           => NEOMORPHIC_FOOTER_CREDIT,
			'sanitize_callback' => 'neomorphic_sanitize_footer_credit',
		)
	);

	$wp_customize->add_control(
		'footer_copyright',
		array(
			'section'     => 'section_footer',
			'settings'    => 'footer_credit',
			'label'       => __( 'Credit', 'neomorphic' ),
			'type'        => 'textarea',
			'description' => __( 'HTML tags can use &lt;a&gt;, &lt;br&gt;, &lt;strong&gt;, &lt;b&gt;.', 'neomorphic' ),
		)
	);
}

add_action( 'customize_register', 'neomorphic_customizer_footer' );
