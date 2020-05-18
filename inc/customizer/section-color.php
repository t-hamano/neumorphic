<?php
/**
 * Neumorphic customizer (Color section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_color( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_color',
		array(
			'title'    => __( 'Color', 'neumorphic' ),
			'priority' => 80,
		)
	);

	// Color skin
	$wp_customize->add_setting(
		'color_skin',
		array(
			'default'           => 'default',
			'sanitize_callback' => 'neumorphic_sanitize_choices_color_skin',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'color_skin',
		array(
			'section'     => 'section_color',
			'settings'    => 'color_skin',
			'label'       => __( 'Color skin', 'neumorphic' ),
			'type'        => 'select',
			'choices'     => array(
				'default'       => __( 'Default', 'neumorphic' ),
				'cold_sweat'    => __( 'Cold Sweat', 'neumorphic' ),
				'black_orpheus' => __( 'Black Orpheus', 'neumorphic' ),
				'green_dolphin' => __( 'Green Dolphin', 'neumorphic' ),
				'summertime'    => __( 'Summertime', 'neumorphic' ),
				'brown_jub'     => __( 'Brown Jug', 'neumorphic' ),
				'wine_roses'    => __( 'Wine & Roses', 'neumorphic' ),
				'midnight_blue' => __( 'Midnight Blue', 'neumorphic' ),
			),
			'description' => __( 'Changing the color skin sets each color setting to the theme\'s default color.<br>You can also change the color setting individually after changing the color skin.', 'neumorphic' ),
		)
	);

	// Background color
	$wp_customize->add_setting(
		'color_bg',
		array(
			'default'           => NEUMORPHIC_COLOR_SKIN['default']['bg'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_bg',
			array(
				'section'  => 'section_color',
				'settings' => 'color_bg',
				'label'    => __( 'Background color', 'neumorphic' ),
			)
		)
	);

	// Main text color
	$wp_customize->add_setting(
		'color_text_main',
		array(
			'default'           => NEUMORPHIC_COLOR_SKIN['default']['text_main'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_main',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_text_main',
				'label'       => __( 'Main text color', 'neumorphic' ),
				'description' => __( 'Set the color of main text.', 'neumorphic' ),
			)
		)
	);

	// Accent color
	$wp_customize->add_setting(
		'color_accent',
		array(
			'default'           => NEUMORPHIC_COLOR_SKIN['default']['accent'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_accent',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_accent',
				'label'       => __( 'Accent color', 'neumorphic' ),
				'description' => __( 'Set the color of title, SNS icons, widget title and so forth.', 'neumorphic' ),
			)
		)
	);

	// Link text color
	$wp_customize->add_setting(
		'color_text_link',
		array(
			'default'           => NEUMORPHIC_COLOR_SKIN['default']['text_link'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_link',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_text_link',
				'label'       => __( 'Link text color', 'neumorphic' ),
				'description' => __( 'Set the color of the link text in the article body.', 'neumorphic' ),
			)
		)
	);

	// Enable border text
	$wp_customize->add_setting(
		'color_text_border_display',
		array(
			'default'           => NEUMORPHIC_COLOR_SKIN['default']['text_border_display'],
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_border_display',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_text_border_display',
				'label'       => __( 'Enable border text', 'neumorphic' ),
				'description' => __( 'Add a border to text so that it stands out from the background. ( Cover headlines, global menus and so forth. )', 'neumorphic' ),
				'type'        => 'checkbox',
			)
		)
	);

	// Text border color
	$wp_customize->add_setting(
		'color_text_border_color',
		array(
			'default'           => NEUMORPHIC_COLOR_SKIN['default']['text_border_color'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_border_color',
			array(
				'section'  => 'section_color',
				'settings' => 'color_text_border_color',
				'label'    => __( 'Text border color', 'neumorphic' ),
			)
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_color' );
